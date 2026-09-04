<template>
    <public-layout title="Kontakt">
        <Navbar />

        <div class="bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
            <div class="text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 pb-16 px-5">
                <span class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                    Wir sind für Sie da
                </span>
                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    Wir freuen uns auf <span class="text-brand-primary">Sie</span>
                </h1>
                <p class="mt-3 text-xl text-gray-500 dark:text-gray-400 max-w-3xl mx-auto sm:text-lg md:mt-5 md:text-xl">
                    Sie können mit uns über Telefon, E-Mail oder auch persönlich in Kontakt treten. Wir werden uns
                    bemühen ihre Fragen, Anregungen oder auch Beschwerden so schnell wie möglich zu beantworten.
                </p>
            </div>

            <!-- Cards -->
            <section aria-labelledby="contact-heading"
                class="pb-20 max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">

                <h2 class="sr-only">Kontaktieren Sie uns</h2>
                <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                            <div v-for="contactDetail in contactDetails" :key="contactDetail.name"
                                class="flex flex-col bg-white dark:bg-gray-700 rounded-2xl shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                                <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                                    <div
                                        class="absolute top-0 p-5 inline-block bg-brand-primary-600 rounded-xl shadow-lg shadow-brand-primary-500/30 transform -translate-y-1/2">
                                        <component :is="contactDetail.icon" aria-hidden="true"
                                            class="h-6 w-6 text-white" />
                                    </div>
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">{{ contactDetail.name }}</h3>
                                    <p class="mt-2 text-base text-brand-primary-700 dark:text-brand-primary-300">{{ contactDetail.detail }}</p>
                                    <p class="mt-4 text-base text-gray-500 dark:text-gray-400">{{ contactDetail.description }}</p>
                                </div>
                                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-bl-2xl rounded-br-2xl md:px-8">
                                    <a :href="contactDetail.href"
                                        class="inline-flex items-center text-base font-medium text-brand-primary-700 dark:text-brand-primary-300 hover:text-brand-primary-600 group"
                                        rel="noopener noreferrer" target="_blank">{{
                                            contactDetail.ctaText
                                        }}<span aria-hidden="true" class="ml-1 transition-transform group-hover:translate-x-1">&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!--Gmaps Card-->
                        <div class="w-full shadow-xl mt-4 sm:mt-6 lg:mt-8 mb-8 rounded-2xl overflow-hidden">
                            <div
                                class="flex-1 w-full h-full relative map-responsive pb-[120%] sm:pb-[50%] md:pb-[50%] lg:pb-[30%] xl:pb-[30%] 2xl:pb-[30%]">


                                <iframe allowfullscreen height="100%"
                                    loading="lazy"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2740.0343905297646!2d13.8433933!3d46.6260827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477081c082b8e4f7%3A0xce20ee88b28b7a1!2sFreie%20Christengemeinde%20%2F%20Pfingstgemeinde!5e0!3m2!1sde!2sat!4v1658674190571!5m2!1sde!2sat"
                                    style="border: 0" width="100%"></iframe>
                            </div>
                            <div class="p-6 bg-gray-50 dark:bg-gray-800 md:px-8">
                                <a class="inline-flex items-center text-base font-medium text-brand-primary-700 dark:text-brand-primary-300 hover:text-brand-primary-600 group"
                                    href="https://goo.gl/maps/fDxswRLhh9dfKHUZ8" rel="noopener noreferrer" target="_blank">Google Maps<span
                                        aria-hidden="true" class="ml-1 transition-transform group-hover:translate-x-1">&rarr;</span></a>
                            </div>

                        </div>

                        <div class="bg-white dark:bg-gray-700 p-5 mb-10 rounded-2xl shadow-xl text-gray-800 dark:text-gray-200 flex items-start gap-3">
                            <InformationCircleIcon class="h-6 w-6 text-brand-primary flex-shrink-0" />
                            <p>Sollte unser Parkplatz bereits voll sein, finden Sie einen Ausweichparkplatz gegenüber dem Supermarkt T&amp;G.</p>
                        </div>

                    </section>
        </div>

    </public-layout>
</template>

<script setup>
import { MapPinIcon, EnvelopeIcon, PhoneIcon, InformationCircleIcon } from "@heroicons/vue/24/outline";
import Navbar from "@/Partials/Navbar.vue";
import PublicLayout from "@/Layouts/PublicLayout.vue";

const contactDetails = [
    {
        name: 'Rufen Sie uns an',
        detail: '+43 650 5893093',
        href: 'tel:+436505893093',
        description: 'Wir freuen uns auf Ihren Anruf und nehmen uns Zeit für Sie.',
        icon: PhoneIcon,
        ctaText: 'Anrufen',
    },
    {
        name: 'Schreiben Sie uns',
        detail: 'office@fcg-villach.at',
        href: 'mailto:office@fcg-villach.at',
        description: 'Sollten Sie Fragen, Anliegen oder Wünsche haben, beantworten wir gern alles.',
        icon: EnvelopeIcon,
        ctaText: 'Schreiben',
    },
    {
        name: 'Besuchen Sie uns',
        detail: 'Vassacherstraße 28, 9500 Villach',
        href: 'https://goo.gl/maps/fDxswRLhh9dfKHUZ8',
        description: 'Wir freuen uns Sie kennenzulernen. Es entsteht keinerlei Verpflichtung. Sie können kommen, schauen, bleiben oder wieder gehen.',
        icon: MapPinIcon,
        ctaText: 'Finden',
    },
];
</script>

<style scoped>
.map-responsive {
    overflow: hidden;
    position: relative;
    height: 0;
}

.map-responsive iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}
</style>
