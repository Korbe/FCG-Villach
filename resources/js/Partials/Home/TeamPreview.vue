<template>
    <section class="py-24 sm:py-28 bg-white dark:bg-gray-800">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto text-center">
                <span class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                    Wer wir sind
                </span>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Lernen Sie uns kennen</h2>
                <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">Zwei Gesichter aus unserem Leiterteam, die Ihnen bei einem Besuch begegnen werden.</p>
            </div>

            <div class="mt-12 max-w-3xl mx-auto grid gap-8 sm:grid-cols-2">
                <Link v-for="person in team" :key="person.name"
                    :href="route('public.about.team', slugify(person.name))"
                    class="group rounded-2xl text-left bg-white dark:bg-gray-700 shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="aspect-w-1 aspect-h-1 overflow-hidden">
                        <img loading="lazy" class="object-cover transition-transform duration-500 group-hover:scale-105"
                            :src="person.imageUrl" :alt="person.name" />
                    </div>
                    <div class="p-5 flex items-center justify-between">
                        <div class="font-medium leading-6 space-y-1">
                            <h3 class="text-lg text-gray-900 dark:text-white">{{ person.name }}</h3>
                            <p class="text-brand-primary">{{ person.role }}</p>
                        </div>
                        <ArrowRightIcon class="w-6 h-6 text-gray-400 flex-shrink-0 transition-transform duration-300 group-hover:translate-x-1 group-hover:text-brand-primary" />
                    </div>
                </Link>
            </div>

            <div class="mt-10 flex justify-center">
                <Link :href="route('public.about')"
                    class="inline-flex items-center text-base font-medium text-brand-primary-700 hover:text-brand-primary-600 group">
                    Das ganze Team kennenlernen
                    <span aria-hidden="true" class="ml-1 transition-transform group-hover:translate-x-1">&rarr;</span>
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ArrowRightIcon } from "@heroicons/vue/24/outline";

const team = [
    {
        name: 'Christian Korbitsch',
        role: 'Pastor & Gemeindeleiter',
        imageUrl: 'images/portraits/Christian-Korbitsch.jpg',
    },
    {
        name: 'Erika Korbitsch',
        role: 'Lobpreis, Gemeindemanagement & Heferl Café',
        imageUrl: 'images/portraits/Erika-Korbitsch.jpg',
    },
];

const slugify = (str) => {
    return str.replace(/\s+/g, '-').toLowerCase();
}
</script>
