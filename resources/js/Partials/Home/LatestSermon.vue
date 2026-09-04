<template>
    <section v-if="post" class="py-24 sm:py-28 bg-gradient-to-b from-white to-gray-100 bg-white">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto text-center">
                <span class="inline-flex items-center rounded-full bg-brand-primary-50 px-4 py-1.5 text-sm font-semibold text-brand-primary-700">
                    Zuletzt gepredigt
                </span>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Neueste Predigt</h2>
                <p class="mt-4 text-xl text-gray-500">Verpasst? Hier können Sie die letzte Predigt ganz bequem nachhören.</p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-12 px-4">
            <post-audio-player :post="post" :index="0" />

            <div class="mt-6 flex justify-center">
                <Link :href="route('public.blog')"
                    class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400 sm:px-8">
                <ListBulletIcon class="h-7 mr-3" /> Alle Predigten
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ListBulletIcon } from "@heroicons/vue/24/outline";
import PostAudioPlayer from "@/Partials/PostAudioPlayer.vue";

defineProps({
    post: Object,
});
</script>
