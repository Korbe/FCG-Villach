<template>
    <public-layout title="Events">
        <Navbar />

        <div class="bg-gradient-to-b from-white to-gray-100">
            <div class="text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 pb-20 px-5">
                <span class="inline-flex items-center rounded-full bg-brand-primary-50 px-4 py-1.5 text-sm font-semibold text-brand-primary-700">
                    Termine &amp; Angebote
                </span>
                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    Sie sind <span class="text-brand-primary">willkommen</span>
                </h1>
                <p
                    class="mt-3 max-w-5xl lg:max-w-4xl text-gray-500 mx-auto text-xl sm:text-lg md:mt-5 lg:max-w-3xl md:text-xl">
                    Wir sind nicht nur eine Kirche, wir sind Gemeinschaft. Sie sind herzlich willkommen unsere
                    Veranstaltungen zu besuchen.
                </p>
            </div>

            <div class="pb-28 max-w-7xl mx-auto">
                <ul role="list"
                    class="px-4 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 text-base text-gray-500">
                    <li v-for="event in events" :key="event.email"
                        class="col-span-1 flex flex-col bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 divide-y divide-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="w-full p-6">
                            <div class="flex justify-between">
                                <h1 class="text-gray-900 text-xl font-semibold">{{ event.name }}</h1>
                            </div>
                            <p v-if="event.description" class="mt-1 text-sm text-gray-500">{{ event.description }}</p>
                            <div class="mt-5 space-y-3">
                                <div class="flex items-center">
                                    <span class="inline-flex items-center justify-center h-9 w-9 rounded-lg bg-brand-primary-50">
                                        <CalendarIcon class="h-5 w-5 text-brand-primary-600" />
                                    </span>
                                    <p class="ml-3">{{ event.interval }}</p>
                                </div>
                                <div class="flex items-center">
                                    <span class="inline-flex items-center justify-center h-9 w-9 rounded-lg bg-brand-secondary-50">
                                        <ClockIcon class="h-5 w-5 text-brand-secondary-700" />
                                    </span>
                                    <p class="ml-3">{{ event.time }}</p>
                                </div>
                                <div class="flex items-center">
                                    <span class="inline-flex items-center justify-center h-9 w-9 rounded-lg bg-gray-100">
                                        <UserCircleIcon class="h-5 w-5 text-gray-500" />
                                    </span>
                                    <p class="ml-3">{{ event.responsible }}</p>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="-mt-px flex divide-x divide-gray-100">
                                <div class="w-0 flex-1 flex text-gray-700 hover:bg-gray-50">
                                    <a :href="`mailto:${event.mail}`"
                                        class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm font-medium border border-transparent rounded-bl-2xl transition-colors">
                                        <EnvelopeIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
                                        <span class="ml-3">Schreiben</span>
                                    </a>
                                </div>
                                <div class="-ml-px w-0 flex-1 flex text-gray-700 hover:bg-gray-50">
                                    <a :href="`tel:${event.phone}`"
                                        class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm font-medium border border-transparent rounded-br-2xl transition-colors">
                                        <PhoneIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
                                        <span class="ml-3">Anrufen</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import { CalendarIcon, ClockIcon, EnvelopeIcon, PhoneIcon, UserCircleIcon } from "@heroicons/vue/24/outline";
import Navbar from "@/Partials/Navbar.vue";

const events = [
    {
        name: "Gottesdienst",
        interval: "Sonntags",
        time: "10 Uhr",
        description: "",
        responsible: "Christian Korbitsch",
        phone: "+436505893093",
        mail: "chritian.korbitsch@fcg-villach.at"
    },
    {
        name: "Gemeindegebet",
        interval: "Montags",
        time: '10 Uhr',
        description: "",
        responsible: "Erika Korbitsch",
        phone: "+4369911848920",
        mail: "erika.korbitsch@fcg-villach.at"
    },
    {
        name: "Heferl Café",
        interval: "Jeden ersten Freitag im Monat",
        time: "14 - 18 Uhr",
        description: "Unterhaltung, Austausch und Vernetzung bei Kuchen und Kaffee",
        responsible: "Erika Korbitsch",
        phone: "+4369911848920",
        mail: "erika.korbitsch@fcg-villach.at"
    },
    {
        name: "Bibelstunde",
        interval: "14-tägig, Mittwochs",
        time: "16:30 Uhr",
        description: "",
        responsible: "Christian Korbitsch",
        phone: "+436505893093",
        mail: "chritian.korbitsch@fcg-villach.at"
    },
    {
        name: "Gebet & Seelsorge",
        interval: "Auf Anfrage",
        time: "Jederzeit",
        description: "",
        responsible: "Erika Korbitsch",
        phone: "+4369911848920",
        mail: "erika.korbitsch@fcg-villach.at"
    },
        {
        name: "Hauskreis Erika",
        interval: "14-tägig, Mittwochs",
        time: "15 Uhr",
        description: "",
        responsible: "Erika Korbitsch",
        phone: "+4369911848920",
        mail: "erika.korbitsch@fcg-villach.at"
    },
];
</script>
