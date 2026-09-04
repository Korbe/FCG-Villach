<template>
    <div class="flex flex-col h-screen relative">

        <div class="absolute inset-0 ">
            <img alt="" class="w-full h-full object-cover" :src="theme === 'dark' ? '/images/hero-dark.png' : '/images/hero-light.jpg'"/>
            <div class="absolute inset-0 bg-black/0 dark:bg-black/20"></div>
        </div>

        <Navbar blueMobileButton hasBackground/>

        <div class="relative flex justify-center items-center flex-grow">
            <header>
                <div class="px-4 sm:px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-bold text-white">Assemblies of God</h2>
                    <h1 class="text-center text-5xl font-extrabold tracking-tight lg:text-7xl">
                        <span class="block text-white">Freie Christengemeinde</span>
                        {{ ' ' }}
                        <span class="block text-brand-primary">Villach</span>
                    </h1>
                    <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">Wir sind eine Gruppe
                        christusgläubiger Menschen, die aus Freude an Jesus Christus und an ihrem neuen Leben vereint
                        sind.</p>

                    <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                        <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                            <Link :href="route('public.blog')"
                                  class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-primary-400 sm:px-8">
                                <PlayIcon class="h-7 mr-3"/>
                                Predigten anhören
                            </Link>
                            <a :href="route('public.contact')"
                               class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400 sm:px-8">
                                <UserGroupIcon class="h-7 mr-3"/>
                                Besuchen Sie uns </a>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex justify-center items-center pt-32">
                    <div class="mouse"></div>
                </div>
            </header>
        </div>
    </div>

</template>

<script setup>
import {PlayIcon, UserGroupIcon} from "@heroicons/vue/24/outline";
import Navbar from "@/Partials/Navbar.vue";
import { useDarkMode } from "@/Composables/useDarkMode";

const { theme } = useDarkMode();
</script>
