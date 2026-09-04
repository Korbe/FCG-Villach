<template>
    <public-layout :title="person.name">

        <Navbar/>

        <div class="relative py-16 lg:py-28 bg-white dark:bg-gray-800 lg:bg-gradient-to-b lg:from-white lg:to-gray-100 dark:lg:from-gray-800 dark:lg:to-gray-800">
            <div class="hidden absolute top-0 inset-x-0 h-1/2 bg-transparent lg:block" aria-hidden="true"/>
            <div class="max-w-7xl mx-auto bg-brand-primary-600 lg:bg-transparent lg:px-8">
                <div class="lg:grid lg:grid-cols-12">
                    <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
                        <div class="absolute inset-x-0 h-1/2 bg-white dark:bg-gray-800 lg:hidden" aria-hidden="true"/>
                        <div class="max-w-md mx-auto px-4 sm:max-w-lg sm:px-6 lg:max-w-none lg:p-0">
                            <div class="aspect-w-1 aspect-h-1">
                                <img loading="lazy" class="object-cover object-center rounded-3xl shadow-2xl" :src="person.imageUrl" :alt="person.name"/>
                            </div>
                        </div>
                    </div>

                    <div class="relative bg-brand-primary-600 lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
                        <div class="hidden absolute inset-0 overflow-hidden rounded-3xl lg:block" aria-hidden="true">
                            <svg class="absolute top-full transform -translate-y-1/3 -translate-x-1/3 xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384"
                                 aria-hidden="true">
                                <defs>
                                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-brand-primary-300" fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
                            </svg>
                        </div>
                        <div class="relative max-w-md mx-auto py-12 px-4 sm:max-w-3xl sm:py-16 lg:my-10 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">


                            <p class="text-xl text-white font-medium">{{ person.role }}</p>
                            <h1 class="my-2 text-3xl font-extrabold text-white">{{ person.name }}</h1>

                            <p class="text-white text text-xl sm:text-lg md:text-xl">{{ person.lead }}</p>
                            <p class="mt-5 text-lg text-white">{{ person.bio }}</p>

                            <div class="sm:space-x-4 mt-5 sm:flex justify-center sm:justify-start">
                                <a :href="`tel:${person.phone}`"
                                   class="border border-transparent bg-white text-gray-500 flex items-center justify-center px-5 py-3 text-base shadow-md font-medium rounded-md white hover:bg-gray-50 md:px-10">
                                    <PhoneIcon class="w-5 h-5" aria-hidden="true"/>
                                    <span class="ml-3">Anrufen</span>
                                </a>
                                <a :href="`mailto:${person.mail}`"
                                   class="mt-3 sm:mt-0 border border-transparent bg-white text-gray-500 flex items-center justify-center px-5 py-3 text-base shadow-md font-medium rounded-md white hover:bg-gray-50 md:px-10">
                                    <EnvelopeIcon class="w-5 h-5" aria-hidden="true"/>
                                    <span class="ml-3">Schreiben</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Footer from "@/Partials/Footer.vue";
import Navbar from "@/Partials/Navbar.vue";
import { EnvelopeIcon, PhoneIcon } from "@heroicons/vue/24/outline";

defineProps({
    person: {
        type: Object,
        required: true,
        default: () => ({
            name: "",
            role: "",
            imageUrl: "",
            lead: "",
            bio: "",
            phone: "",
            mail: ""
        })
    }
});
</script>

