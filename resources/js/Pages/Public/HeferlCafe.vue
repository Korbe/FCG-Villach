<template>
    <public-layout title="Heferl Café">

        <!-- Hero -->
        <div class="relative flex flex-col h-screen">
            <div class="absolute inset-0">
                <img loading="lazy" alt="" class="w-full h-full object-cover"
                    :src="theme === 'dark' ? '/images/heferl/hero-dark.png' : '/images/heferl/hero-light.jpg'" />
                <div aria-hidden="true" class="absolute inset-0 bg-black/50" />
            </div>

            <Navbar hasBackground />

            <div class="relative flex justify-center items-center flex-grow px-4">
                <div class="max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full bg-white/10 backdrop-blur px-4 py-1.5 text-sm font-semibold text-white ring-1 ring-white/20">
                        Jeden 1. Freitag im Monat · 14 – 18 Uhr
                    </span>
                    <h1 class="mt-5 text-5xl font-extrabold tracking-tight text-white sm:text-6xl md:text-7xl">
                        Heferl <span class="text-brand-secondary">Café</span>
                    </h1>
                    <p class="mt-6 text-2xl italic text-white/90 leading-relaxed">
                        „Kommt, seht und schmeckt, wie freundlich der Herr ist."
                    </p>
                    <p class="mt-6 max-w-xl mx-auto text-lg text-white/80">
                        Ein gemütliches Zusammenkommen bei Torte, Kaffee und guter Gesellschaft – frei zugänglich für
                        jeden, alles auf freiwillige Spende.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                        <a v-smooth-scroll href="#buffet"
                            class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-primary-400">
                            <CakeIcon class="h-6 w-6 mr-2" /> Zum Buffet
                        </a>
                        <a v-smooth-scroll href="#standort"
                            class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400">
                            <MapPinIcon class="h-6 w-6 mr-2" /> Wo wir sind
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quote / Intro -->
        <div class="bg-white dark:bg-gray-800 py-20">
            <div class="max-w-3xl mx-auto px-6 text-center">
                <figure>
                    <blockquote class="text-xl sm:text-2xl font-medium text-gray-900 dark:text-white leading-relaxed">
                        <p>„Heferl-Café", das ich unter dem Slogan <span class="text-brand-primary">„Kommt, seht und
                                schmeckt, wie freundlich der Herr ist"</span> leite. Einmal im Monat laden wir Leute in
                            unsere Gemeinde ein, um uns mit ihnen bei Torte und Kaffee zu unterhalten und
                            auszutauschen.</p>
                    </blockquote>
                    <figcaption class="mt-6 flex items-center justify-center gap-3">
                        <img src="/images/portraits/Erika-Korbitsch.jpg" alt="Erika Korbitsch"
                            class="h-12 w-12 rounded-full object-cover" />
                        <div class="text-left">
                            <div class="font-semibold text-gray-900 dark:text-white">Erika Korbitsch</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Leitung Heferl Café</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>

        <!-- Buffet -->
        <div id="buffet" class="bg-gray-50 dark:bg-gray-900 py-20 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <span
                        class="inline-flex items-center rounded-full bg-brand-secondary-50 dark:bg-brand-secondary-900 px-4 py-1.5 text-sm font-semibold text-brand-secondary-800 dark:text-brand-secondary-200">
                        Für jeden Geschmack
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Unser Buffet
                    </h2>
                    <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                        Verschiedenste Backwaren, Torten und Süßigkeiten – und für alle, die es herzhaft mögen, gibt
                        es auch immer eine pikante Alternative.
                    </p>
                </div>

                <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div v-for="item in buffet" :key="item.title"
                        class="rounded-2xl bg-white dark:bg-gray-800 shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10 p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <span
                            class="inline-flex items-center justify-center h-14 w-14 rounded-xl bg-brand-secondary text-white text-2xl shadow-lg shadow-brand-secondary-500/30">
                            <component :is="item.icon" v-if="item.icon" class="h-7 w-7" />
                            <span v-else>{{ item.emoji }}</span>
                        </span>
                        <h3 class="mt-4 font-semibold text-gray-900 dark:text-white">{{ item.title }}</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ item.description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div id="team" class="bg-white dark:bg-gray-800 py-20 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <span
                        class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                        Das Team
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Die Köpfe hinter dem Heferl Café
                    </h2>
                    <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                        Ein eingespieltes Team, das jeden Monat mit viel Liebe für euch backt, kocht und einschenkt.
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div v-for="(photo, index) in teamPhotos" :key="photo.caption"
                        class="aspect-[4/3] rounded-2xl overflow-hidden shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10 cursor-pointer group"
                        @click="openLightbox(teamPhotos, index)">
                        <img loading="lazy" :src="photo.image" :alt="photo.caption"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                    </div>
                </div>

                <ul role="list"
                    class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-5 max-w-4xl mx-auto lg:max-w-none">
                    <li v-for="person in team" :key="person.name"
                        class="rounded-2xl text-center bg-white dark:bg-gray-700 shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="aspect-w-1 aspect-h-1">
                            <img loading="lazy" class="object-cover" :src="person.imageUrl" :alt="person.name" />
                        </div>
                        <div class="p-5">
                            <h3 class="text-gray-900 dark:text-white font-medium">{{ person.name }}</h3>
                            <p class="text-brand-primary text-sm mt-1">{{ person.role }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Galerie -->
        <div id="galerie" class="bg-gray-50 dark:bg-gray-900 py-20 scroll-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <span
                        class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                        Impressionen
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Ein Blick ins Heferl Café
                    </h2>
                </div>

                <Carousel class="mt-14" :items-to-show="1" :gap="40" :wrap-around="true"
                    :breakpoints="{ 768: { itemsToShow: 2, gap: 32 }, 1024: { itemsToShow: 3, gap: 40 } }">
                    <Slide v-for="(slide, index) in gallery" :key="slide.caption">
                        <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden"
                            :class="slide.image ? 'cursor-pointer group' : ''"
                            @click="slide.image && openLightbox(gallery, index)">
                            <img v-if="slide.image" loading="lazy" :src="slide.image" :alt="slide.caption"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                            <div v-else
                                class="w-full h-full flex flex-col items-center justify-center gap-3 bg-gradient-to-br from-brand-secondary-100 to-brand-primary-100 dark:from-gray-800 dark:to-gray-700">
                                <PhotoIcon class="h-10 w-10 text-brand-secondary-600 dark:text-gray-500 px-5" />
                                <p class="text-sm font-medium text-brand-secondary-800 dark:text-gray-400">{{ slide.caption }}</p>
                            </div>
                        </div>
                    </Slide>

                    <template #addons>
                        <Navigation />
                        <Pagination />
                    </template>
                </Carousel>
            </div>
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

                <button v-if="activeGallery.length > 1" @click.stop="prevImage" type="button"
                    class="hidden sm:flex absolute left-4 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10">
                    <span class="sr-only">Vorheriges Bild</span>
                    <ChevronLeftIcon class="h-8 w-8" />
                </button>
                <button v-if="activeGallery.length > 1" @click.stop="nextImage" type="button"
                    class="hidden sm:flex absolute right-4 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10">
                    <span class="sr-only">Nächstes Bild</span>
                    <ChevronRightIcon class="h-8 w-8" />
                </button>

                <img @click.stop :src="activeGallery[lightboxIndex].image" :alt="activeGallery[lightboxIndex].caption"
                    class="max-w-full max-h-full object-contain rounded-lg select-none" />
            </div>
        </Teleport>

        <!-- Standort -->
        <div id="standort" class="bg-white dark:bg-gray-800 py-20 scroll-mt-20">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span
                    class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                    So findet ihr uns
                </span>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Wo wir sind
                </h2>
                <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                    Im Erdgeschoss der FCG Villach, Vassacherstraße 28, 9500 Villach. Frei zugänglich für jeden – ihr
                    müsst euch nicht anmelden, kommt einfach vorbei.
                </p>

                <div class="mt-10 w-full shadow-xl rounded-2xl overflow-hidden text-left">
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/9]">
                        <iframe v-if="consent === 'accepted'" allowfullscreen height="100%" loading="lazy"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2740.0343905297646!2d13.8433933!3d46.6260827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477081c082b8e4f7%3A0xce20ee88b28b7a1!2sFreie%20Christengemeinde%20%2F%20Pfingstgemeinde!5e0!3m2!1sde!2sat!4v1658674190571!5m2!1sde!2sat"
                            style="border: 0" width="100%" class="absolute inset-0"></iframe>

                        <div v-else
                            class="absolute inset-0 flex flex-col items-center justify-center text-center gap-4 bg-gray-100 dark:bg-gray-900 px-6">
                            <MapIcon class="h-10 w-10 text-brand-primary" aria-hidden="true" />
                            <p class="max-w-md text-sm text-gray-600 dark:text-gray-300">
                                Um die Karte anzuzeigen, muss eine Verbindung zu Google Maps hergestellt werden.
                                Dabei werden Daten an Google übertragen. Weitere Infos in unserer
                                <Link :href="route('public.privacy')" class="text-brand-primary hover:underline">Datenschutzerklärung</Link>.
                            </p>
                            <button @click="accept" type="button"
                                class="inline-flex items-center px-5 py-2.5 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-primary-400">
                                Zustimmen &amp; Karte laden
                            </button>
                        </div>
                    </div>
                    <div class="p-6 bg-gray-50 dark:bg-gray-900 flex flex-wrap gap-x-6 gap-y-2">
                        <a class="inline-flex items-center text-base font-medium text-brand-primary-700 dark:text-brand-primary-300 hover:text-brand-primary-600"
                            href="https://goo.gl/maps/fDxswRLhh9dfKHUZ8" rel="noopener noreferrer" target="_blank">
                            Google Maps <span aria-hidden="true" class="ml-1">&rarr;</span>
                        </a>
                        <span class="inline-flex items-center text-base text-gray-500 dark:text-gray-400">
                            <ClockIcon class="h-5 w-5 mr-1.5" /> Jeden 1. Freitag im Monat, 14 – 18 Uhr
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";
import { Carousel, Slide, Navigation, Pagination } from "vue3-carousel";
import { CakeIcon, HeartIcon, ClockIcon, MapPinIcon, MapIcon, PhotoIcon, XMarkIcon, ChevronLeftIcon, ChevronRightIcon } from "@heroicons/vue/24/outline";
import { useCookieConsent } from "@/Composables/useCookieConsent";
import { useDarkMode } from "@/Composables/useDarkMode";

const { consent, accept } = useCookieConsent();
const { theme } = useDarkMode();

const buffet = [
    {
        title: "Süßes vom Feinsten",
        description: "Torten, Kuchen, Kekse und Süßigkeiten in bunter Auswahl.",
        icon: CakeIcon,
    },
    {
        title: "Auch mal herzhaft",
        description: "Es gibt immer auch etwas Pikantes zum Naschen.",
        emoji: "🥪",
    },
    {
        title: "Kaffee nach Wunsch",
        description: "Ob verlängert oder Latte Macchiato – für die Truppe kein Problem.",
        emoji: "☕",
    },
    {
        title: "Alles auf Spendenbasis",
        description: "Kein Fixpreis – eine freiwillige Spende reicht völlig.",
        icon: HeartIcon,
    },
];

const team = [
    {
        name: "Erika Korbitsch",
        role: "Leitung",
        imageUrl: "/images/portraits/Erika-Korbitsch.jpg",
    },
    {
        name: "Andrea Kirisits",
        role: "Tochter & Mitorganisation",
        imageUrl: "/images/portraits/Andrea-Kirisits.jpg",
    },
    {
        name: "Maria Stöhr",
        role: "Team",
        imageUrl: "https://ui-avatars.com/api/?name=Maria+Stöhr&color=0DB3E9&background=edfbff",
    },
    {
        name: "Melanie Schmölzer",
        role: "Team",
        imageUrl: "https://ui-avatars.com/api/?name=Melanie+Schmölzer&color=E49001&background=fff3d9",
    },
    {
        name: "Maedeh Danialfar",
        role: "Team",
        imageUrl: "/images/portraits/Maedeh-Danialfar.jpg",
    },
];

const teamPhotos = [
    { caption: "Das Heferl Café Team", image: "/images/heferl/team.jpg" },
    { caption: "Das Team am Buffet", image: "/images/heferl/team-buffet.jpg" },
];

const gallery = [
    { caption: "Buffet-Impression 1", image: "/images/heferl/buffet/bufffet%20(1).jpg" },
    { caption: "Buffet-Impression 2", image: "/images/heferl/buffet/bufffet%20(2).jpg" },
    { caption: "Buffet-Impression 3", image: "/images/heferl/buffet/bufffet%20(3).jpg" },
    { caption: "Buffet-Impression 4", image: "/images/heferl/buffet/bufffet%20(4).jpg" },
    { caption: "Buffet-Impression 5", image: "/images/heferl/buffet/bufffet%20(5).jpg" },
    { caption: "Buffet-Impression 6", image: "/images/heferl/buffet/bufffet%20(6).jpg" },
    { caption: "Buffet-Impression 7", image: "/images/heferl/buffet/bufffet%20(7).jpg" },
    { caption: "Buffet-Impression 8", image: "/images/heferl/buffet/bufffet%20(8).jpg" },
    { caption: "Buffet-Impression 9", image: "/images/heferl/buffet/bufffet%20(9).jpg" },
    { caption: "Buffet-Impression 10", image: "/images/heferl/buffet/bufffet%20(10).jpg" },
    { caption: "Buffet-Impression 11", image: "/images/heferl/buffet/bufffet%20(11).jpg" },
    { caption: "Buffet-Impression 12", image: "/images/heferl/buffet/bufffet%20(12).jpg" },
    { caption: "Buffet-Impression 13", image: "/images/heferl/buffet/bufffet%20(13).jpg" },
];

// Lightbox
const activeGallery = ref(gallery);
const lightboxIndex = ref(null);

const openLightbox = (images, index) => {
    activeGallery.value = images;
    lightboxIndex.value = index;
};

const closeLightbox = () => {
    lightboxIndex.value = null;
};

const prevImage = () => {
    if (lightboxIndex.value === null) return;
    lightboxIndex.value = (lightboxIndex.value - 1 + activeGallery.value.length) % activeGallery.value.length;
};

const nextImage = () => {
    if (lightboxIndex.value === null) return;
    lightboxIndex.value = (lightboxIndex.value + 1) % activeGallery.value.length;
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
