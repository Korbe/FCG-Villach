<template>

    <footer class="bg-white dark:bg-gray-800" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="text-center space-y-8 xl:col-span-1">

                    <LogoText class="w-52 mx-auto" />

                    <p class="text-gray-500 dark:text-gray-400 text-base">
                        Daran werden alle erkennen, dass ihr meine Jünger seid,
                        wenn ihr Liebe untereinander habt (Johannes 13,35)
                    </p>
                    <div class="flex space-x-6">
                        <Link v-for="item in navigation.social" :key="item.name" :href="item.href"
                            class="text-gray-500 dark:text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                        <span class="sr-only">{{ item.name }}</span>
                        <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                        </Link>
                    </div>
                </div>
                <div class="mt-12 grid md:grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="grid grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 tracking-wider uppercase">
                                FCG Villach
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in navigation.site" :key="item.name">
                                    <Link :href="item.href" class="text-base text-gray-500 dark:text-gray-400 hover:text-blue-gray-900 dark:hover:text-white">
                                    {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-0">
                            <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 tracking-wider uppercase">
                                Rechtliches
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in navigation.legal" :key="item.name">
                                    <Link :href="item.href" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                    {{ item.name }}
                                    </Link>
                                </li>
                                <li>
                                    <button type="button" @click="resetCookieConsent"
                                        class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                        Cookie-Einstellungen
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden md:block md:grid md:grid-cols-2 md:gap-10">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 tracking-wider uppercase">
                                Besuchen Sie auch
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in navigation.links.splice(0, 3)" :key="item.name">
                                    <a :href="item.href" target="_blank"
                                        class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                        {{ item.name }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-5">
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in navigation.links" :key="item.name">
                                    <a :href="item.href" target="_blank"
                                        class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                        {{ item.name }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <Credit/>
        </div>
    </footer>
</template>

<script setup>

import LogoText from "@/Partials/LogoText.vue";
import { HeartIcon } from "@heroicons/vue/24/outline";
import Credit from "./Credit.vue";
import { useCookieConsent } from "@/Composables/useCookieConsent";

const { reset: resetCookieConsent } = useCookieConsent();

const navigation = {
    site: [
        { name: 'Über uns', href: route('public.about') },
        { name: 'Events', href: route('public.events') },
        { name: 'Heferl Café', href: route('public.heferlCafe') },
        { name: 'Predigten', href: route('public.blog') },
        { name: 'Kontakt', href: route('public.contact') },
        { name: 'Spenden', href: route('public.donate') },
    ],
    legal: [
        { name: 'Impressum', href: route('public.imprint') },
        { name: 'Datenschutz', href: route('public.privacy') },
    ],
    links: [
        { name: 'GospelVan', href: 'https://www.gospelvan.at' },
        { name: 'Bund Pfingstlicher Freikirchen', href: 'https://www.bpfoe.at.' },
        { name: 'Freikirchen in Österreich', href: 'https://freikirchen.at/29082013Nr1.php' },
        { name: 'AmPuls Außenmission', href: 'https://ampuls.or.at/' },
        { name: 'AVC „Aktion für verfolgte Christen und Notleidende“', href: 'https://avc-at.org/de/' },
        { name: 'Soziale Tagesstätte Raphael', href: 'https://soziale-tagestaette-raphael.at/' },
    ],
};
</script>
