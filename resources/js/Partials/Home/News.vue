<template>

    <section v-if="items.length > 0" class="py-28 bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1 id="freie-christengemeinde" style="scroll-margin: 7rem">

                    <span
                        class="mt-2 block text-3xl md:text-center leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Unsere
                        <span class="text-brand-primary">Neuigkeiten</span></span>
                </h1>
                <p class="mt-8 md:text-center text-xl text-gray-500 dark:text-gray-400 leading-8">Hier erfährst du alles darüber, was
                    bei uns passiert, welche Neuigkeiten es gibt und welche spannenden Ereignisse anstehen.</p>

            </div>
        </div>

        <div className="max-w-7xl mx-auto py-16 px-5">

            <swiper :modules="modules" :slides-per-view="1" :scrollbar="{ draggable: true }" :spaceBetween="20"
                :autoplay="{ delay: 6000, disableOnInteraction: false }">
                <swiper-slide v-for="(news, index) in items" :key="index">

                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 py-5">
                        <!-- Linke Karte (Textbereich) -->
                        <div
                            className="flex flex-col rounded-lg border dark:border-gray-700 bg-white dark:bg-gray-700 text-card-foreground shadow-sm overflow-hidden">
                            <div className="h-96 overflow-hidden">
                                <img :src="news.media[0].original_url" className="w-full h-full object-cover" />
                            </div>
                            <div className="p-6 flex-grow">
                                <h3
                                    className="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white break-words whitespace-normal">
                                    {{ news.title }}
                                </h3>

                                <p className="mt-2 text-lg text-gray-500 dark:text-gray-400 leading-8">
                                    {{ news.description }}
                                </p>
                            </div>
                        </div>

                        <!-- Rechte Karte (Bildbereich) -->
                        <div
                            className="hidden lg:flex flex-col rounded-lg border dark:border-gray-700 bg-white dark:bg-gray-700 text-card-foreground shadow-sm overflow-hidden">
                            <div className="h-full max-h-[600px] flex-grow">
                                <img :src="news.media[1].original_url" className="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>

                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>

<script setup>
import { Navigation, Scrollbar, Autoplay } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css';

const modules = [Navigation, Scrollbar, Autoplay];

const props = defineProps({
    items: Array,
});

</script>