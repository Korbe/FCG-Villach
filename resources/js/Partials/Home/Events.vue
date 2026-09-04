<template>
    <section class="py-28 bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1 id="freie-christengemeinde" style="scroll-margin: 7rem">

                    <span
                        class="mt-2 block text-3xl md:text-center leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Unsere
                        <span class="text-brand-primary">Events</span></span>
                </h1>
                <p class="mt-8 md:text-center text-xl text-gray-500 dark:text-gray-400 leading-8">Bei uns wird
                    es nie langweilig. Es gibt allerhand zu tun und zu besuchen. Schauen Sie doch auch mal bei uns
                    vorbei.</p>

            </div>
        </div>

        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-wrap">
                <div v-for="event in events" :key="event.name" class="w-full xl:w-1/3 md:w-1/2 p-3">
                    <component :is="event.link ? Link : 'div'" :href="event.link"
                        class="border bg-white dark:bg-gray-700 border-gray-200 dark:border-gray-600 rounded-lg flex flex-col items-center group shadow hover:shadow-lg transition-shadow"
                        :class="event.link ? 'cursor-pointer' : ''">
                        <!-- Bildbereich (1/3 der Karte) -->
                        <div class="w-full h-56 overflow-hidden rounded-t-lg">
                            <img :src="event.image" alt="Event Image"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Textbereich -->
                        <div class="w-full flex flex-col items-center my-4 p-6">
                            <h2 class="text-xl text-gray-900 dark:text-white font-medium mb-2">{{ event.name }}</h2>

                            <div class="mt-4 space-y-2 text-center text-gray-700 dark:text-gray-300">
                                <div class="flex items-center">
                                    <CalendarIcon class="h-6 w-6 text-brand-primary-500" />
                                    <p class="ml-2">{{ event.interval }}</p>
                                </div>
                                <div class="flex items-center">
                                    <ClockIcon class="h-6 w-6 text-brand-secondary" />
                                    <p class="ml-2">{{ event.time }}</p>
                                </div>
                                <div class="flex items-center">
                                    <UserCircleIcon class="h-6 w-6 text-gray-500 dark:text-gray-400" />
                                    <p class="ml-2">{{ event.responsible }}</p>
                                </div>
                            </div>
                        </div>
                    </component>

                </div>

            </div>
        </div>

        <div class="flex justify-center ">
            <Link :href="route('public.events')"
                class="flex rounded-md shadow items-center justify-center px-10 py-3 border border-transparent text-base font-medium text-white bg-brand-secondary hover:bg-brand-secondary-400">
            <span>Alle Events</span>
            <ArrowRightCircleIcon class="h-7 ml-3" />
            </Link>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ArrowRightCircleIcon, CakeIcon, CalendarIcon, ClockIcon, NewspaperIcon, UserCircleIcon } from '@heroicons/vue/24/outline';

const events = [
    {
        name: "Heferl Café",
        interval: "Jeden ersten Freitag im Monat",
        time: "14 - 18 Uhr",
        responsible: "Erika Korbitsch",
        icon: CakeIcon,
        image: "/images/events/cake.jpg",
        link: route('public.heferlCafe'),
    },
    {
        name: "Gebet & Seelsorge",
        interval: "Auf Anfrage",
        time: "Jederzeit",
        responsible: "Erika Korbitsch",
        icon: UserCircleIcon,
        image: "/images/events/pray.jpg",
    },
    {
        name: "Bibelstunde",
        interval: "14-tägig, Mittwochs",
        time: "16:30 Uhr",
        responsible: "Christian Korbitsch",
        icon: NewspaperIcon,
        image: "/images/events/togehter.webp",
    },
];

</script>
