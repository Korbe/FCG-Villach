<template>
    <section class="py-24 sm:py-28 bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto text-center">
                <span class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                    Impressionen
                </span>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Einblicke in unsere Gemeinde
                </h2>
                <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">
                    Ein paar Momente aus Gottesdienst, Gemeinschaft und Veranstaltungen.
                </p>
            </div>

            <Carousel class="mt-14 max-w-7xl mx-auto" :items-to-show="1" :gap="40" :wrap-around="true"
                :breakpoints="{ 768: { itemsToShow: 2, gap: 32 }, 1024: { itemsToShow: 3, gap: 40 } }">
                <Slide v-for="(slide, index) in gallery" :key="slide.caption">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden"
                        :class="slide.image ? 'cursor-pointer group' : ''"
                        @click="slide.image && openLightbox(index)">
                        <img v-if="slide.image" loading="lazy" :src="slide.image" :alt="slide.caption"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        <div v-else
                            class="w-full h-full flex flex-col items-center justify-center gap-3 bg-gradient-to-br from-brand-primary-100 to-brand-secondary-100 dark:from-gray-700 dark:to-gray-600">
                            <PhotoIcon class="h-10 w-10 text-brand-primary-600 dark:text-gray-400" />
                            <p class="text-sm font-medium text-brand-primary-800 dark:text-gray-300 px-5 text-center">{{ slide.caption }}</p>
                        </div>
                    </div>
                </Slide>

                <template #addons>
                    <Navigation />
                    <Pagination />
                </template>
            </Carousel>
        </div>

        <!-- Lightbox -->
        <Teleport to="body">
            <div v-if="lightboxIndex !== null"
                class="fixed inset-0 z-[100] bg-black/90 flex items-center justify-center p-4 sm:p-8"
                @click="closeLightbox" @touchstart="onTouchStart" @touchend="onTouchEnd">

                <button @click.stop="closeLightbox" type="button"
                    class="absolute top-4 right-4 sm:top-6 sm:right-6 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10">
                    <span class="sr-only">Schließen</span>
                    <XMarkIcon class="h-8 w-8" />
                </button>

                <button v-if="gallery.length > 1" @click.stop="prevImage" type="button"
                    class="hidden sm:flex absolute left-4 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10">
                    <span class="sr-only">Vorheriges Bild</span>
                    <ChevronLeftIcon class="h-8 w-8" />
                </button>
                <button v-if="gallery.length > 1" @click.stop="nextImage" type="button"
                    class="hidden sm:flex absolute right-4 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10">
                    <span class="sr-only">Nächstes Bild</span>
                    <ChevronRightIcon class="h-8 w-8" />
                </button>

                <img v-if="lightboxIndex !== null" @click.stop :src="gallery[lightboxIndex].image" :alt="gallery[lightboxIndex].caption"
                    class="max-w-full max-h-full object-contain rounded-lg select-none" />
            </div>
        </Teleport>
    </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Carousel, Slide, Navigation, Pagination } from "vue3-carousel";
import { PhotoIcon, XMarkIcon, ChevronLeftIcon, ChevronRightIcon } from "@heroicons/vue/24/outline";

const gallery = [
    { caption: "Gottesdienst", image: null },
    { caption: "Gemeinschaft & Austausch", image: null },
    { caption: "Lobpreis & Anbetung", image: null },
    { caption: "Events & Feste", image: null },
];

// Lightbox
const lightboxIndex = ref(null);

const openLightbox = (index) => {
    lightboxIndex.value = index;
};

const closeLightbox = () => {
    lightboxIndex.value = null;
};

const prevImage = () => {
    if (lightboxIndex.value === null) return;
    lightboxIndex.value = (lightboxIndex.value - 1 + gallery.length) % gallery.length;
};

const nextImage = () => {
    if (lightboxIndex.value === null) return;
    lightboxIndex.value = (lightboxIndex.value + 1) % gallery.length;
};

const handleKeydown = (event) => {
    if (lightboxIndex.value === null) return;
    if (event.key === "Escape") closeLightbox();
    if (event.key === "ArrowLeft") prevImage();
    if (event.key === "ArrowRight") nextImage();
};

onMounted(() => window.addEventListener("keydown", handleKeydown));
onBeforeUnmount(() => window.removeEventListener("keydown", handleKeydown));

let touchStartX = 0;

const onTouchStart = (event) => {
    touchStartX = event.changedTouches[0].clientX;
};

const onTouchEnd = (event) => {
    const delta = event.changedTouches[0].clientX - touchStartX;
    if (Math.abs(delta) < 50) return;
    delta > 0 ? prevImage() : nextImage();
};
</script>
