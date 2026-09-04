<template>
    <div ref="wrapper" class="relative flex flex-col sm:flex-row text-center rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-2 md:px-6 py-5 items-center justify-center
               md:text-left md:justify-between shadow-sm hover:border-brand-primary focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-primary
               transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden group">

        <div ref="progressBox" class="rounded-l-lg h-full absolute w-0 inset-0 bg-brand-primary-100 dark:bg-brand-primary-900/50"></div>

        <div class="z-10 pb-3 md:pb-0 flex-shrink-0">
            <img loading="lazy" :alt="post.author"
                :src="post.photo ?? 'https://ui-avatars.com/api/?name=' + encodeURIComponent(post.author) + '&color=0DB3E9&background=edfbff'"
                class="relative rounded-full h-24 w-24 transition-transform duration-300 ease-in-out group-hover:scale-125" />
        </div>

        <div class="z-10 basis-full w-full md:pl-4">

            <p v-if="completed" class="text-brand-primary flex">
                <CheckBadgeIcon class="h-7 mr-1" />
                <span class="inline-block">{{ 'Angehört' }}</span>
            </p>

            <p class="text-xl md:text-2xl font-medium text-gray-900 dark:text-white">
                {{ post.title }}
            </p>
            <p class="py-3 text-base text-gray-500 dark:text-gray-400">
                <span class="font-medium hover:underline">{{ post.author }}</span>
                <span class="text-gray-600 dark:text-gray-400"> · {{ post.published_at }}</span>
            </p>
        </div>

        <div v-if="post.audio && audioRef" class="z-10 w-full sm:flex flex-end md:justify-end sm:justify-center">
            <div class="flex space-x-2">

                <a v-if="audioRef.currentTime > 0"
                    class="p-2 flex items-center justify-center  border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-secondary-400"
                    href="#" @click.prevent="addSeconds(-10)">
                    <BackwardIcon class="h-7 mr-1" />
                    10s
                </a>

                <a :id="'play_button_' + index"
                    class="p-2 flex items-center justify-center w-full  border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-secondary-400"
                    href="#" @click.prevent="playPause()">
                    <template v-if="audioRef.paused">
                        <PlayIcon class="h-7 mr-1" />
                        <span class="inline-block">{{ songTime ?? 'Abspielen' }}</span>
                    </template>
                    <template v-else>
                        <PauseIcon class="h-7 mr-1" />
                        <span class="inline-block">{{ songTime ?? 'Pause' }}</span>
                    </template>
                </a>

                <a v-if="audioRef.currentTime > 0"
                    class="p-2 flex items-center justify-center border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-secondary-400"
                    href="#" @click.prevent="addSeconds(60)">
                    1min
                    <BackwardIcon class="rotate-180 h-7 ml-1" />
                </a>

            </div>
        </div>

        <audio :id="audio_id" ref="audioRef" @timeupdate="onTimeUpdate" @ended="onEnded">
            <source :src="post.audio" type="audio/mp3" /> Your browser does not support the audio tag.
        </audio>
    </div>
</template>
<script setup>
import { ref, onMounted, computed } from 'vue';
import { PauseIcon, PlayIcon } from "@heroicons/vue/24/solid";
import { BackwardIcon, CheckBadgeIcon } from "@heroicons/vue/24/outline";
import { hashIt } from "@/Shared/HashIt";
import { router } from '@inertiajs/vue3';

const props = defineProps({
    post: Object,
    index: Number
});

// Reaktive Variablen
const audioRef = ref(null);
const songTime = ref(null);
const completed = ref(false);
const viewStatRecorded = ref(false);
const wrapper = ref(null);
const progressBox = ref(null);
const audio_id = computed(() => `audio_${props.index}`);

onMounted(() => {
    audioRef.value = document.getElementById(audio_id.value);

    let completedHistory = JSON.parse(localStorage.getItem("completion-hist")) ?? [];
    if (completedHistory.includes(getHash())) {
        completed.value = true;
    }
});

const songActive = () => {
    // Event kann hier bei Bedarf emittiert werden
};

const addSeconds = (sec) => {
    if (audioRef.value) {
        audioRef.value.currentTime += sec;
    }
};

const playPause = () => {
    if (audioRef.value.paused) {
        songActive();
        completed.value = false;
        audioRef.value.play();
        SetPostViewed();
    } else {
        audioRef.value.pause();
    }
};

const onTimeUpdate = () => {
    if (!audioRef.value) return;

    let { currentTime, duration } = audioRef.value;

    let currentSeconds = (Math.floor(currentTime % 60) < 10 ? '0' : '') + Math.floor(currentTime % 60);
    let currentMinutes = Math.floor(currentTime / 60);
    songTime.value = `${currentMinutes}:${currentSeconds} / ${Math.floor(duration / 60)}:${Math.floor(duration % 60).toString().padStart(2, '0')}`;

    let percentageOfSong = (currentTime / duration);
    progressBox.value.style.width = `${Math.round(wrapper.value.offsetWidth * percentageOfSong)}px`;
};

const getHash = () => {
    return hashIt(`${props.post.author}.${props.post.title}`);
};

const onEnded = () => {
    if (audioRef.value) {
        audioRef.value.pause();
        audioRef.value.currentTime = 0;
        completed.value = true;

        if (progressBox.value) {
            progressBox.value.style.width = "0px";
        }

        SetPostCompleted();

        let completedHistory = JSON.parse(localStorage.getItem("completion-hist")) ?? [];
        if (!completedHistory.includes(getHash())) {
            localStorage.setItem("completion-hist", JSON.stringify([...completedHistory, getHash()]));
        }
    }
};

const SetPostViewed = () => {
    if (!viewStatRecorded.value) {
        router.post(route('public.blog.post.viewed', props.post.id), null, { preserveScroll: true });
        viewStatRecorded.value = true;
    }
};

const SetPostCompleted = () => {
    router.post(route('public.blog.post.completed', props.post.id), null, { preserveScroll: true });
};
</script>