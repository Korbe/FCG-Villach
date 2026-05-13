<template>
    <public-layout title="Kontakt">
        <div class="min-h-screen">
            <header class="relative pb-32">
                <div class="absolute inset-0">
                    <img loading="lazy" alt="" class="w-full h-full object-cover" src="/images/contact.jpg" />
                    <div aria-hidden="true" class="absolute inset-0 bg-brand-primary-1000 mix-blend-multiply" />
                </div>

                <Navbar hasBackground />

                <div
                    class="relative mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 max-w-md mx-auto px-4 pb-32 sm:max-w-3xl sm:px-6  lg:max-w-7xl lg:px-8">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Wir freuen uns auf</span>
                        {{ ' ' }}
                        <span class="block text-brand-primary xl:inline">Sie</span>

                    </h1>
                    <p class="mt-3 md:mt-5 max-w-3xl text-xl text-gray-300">Sie können mit uns über Telefon, E-Mail oder
                        auch persönlich in Kontakt treten. Wir werden uns bemühen ihre Fragen, Anregungen oder auch
                        Beschwerden so schnell wie möglich zu beantwoten.</p>
                </div>
            </header>

            <main class="h-full mx-2 bg-gradient-to-b from-white to-gray-100">
                <div class="flex flex-grow ">
                    <!-- Cards -->
                    <section aria-labelledby="contact-heading"
                        class="-mt-32 max-w-md mx-auto relative z-10 sm:max-w-3xl lg:max-w-7xl">

                        <h2 class="sr-only">Kontaktieren Sie uns</h2>
                        <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                            <div v-for="contactDetail in contactDetails" :key="contactDetail.name"
                                class="flex flex-col bg-white rounded-2xl shadow-xl">
                                <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                                    <div
                                        class="absolute top-0 p-5 inline-block bg-brand-primary-600 rounded-xl shadow-lg transform -translate-y-1/2">
                                        <component :is="contactDetail.icon" aria-hidden="true"
                                            class="h-6 w-6 text-white" />
                                    </div>
                                    <h3 class="text-xl font-medium text-gray-900">{{ contactDetail.name }}</h3>
                                    <p class="mt-2 text-base text-brand-primary-700">{{ contactDetail.detail }}</p>
                                    <p class="mt-4 text-base text-gray-500">{{ contactDetail.description }}</p>
                                </div>
                                <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                                    <a :href="contactDetail.href"
                                        class="text-base font-medium text-brand-primary-700 hover:text-brand-primary-600"
                                        rel="noopener noreferrer" target="_blank">{{
                                            contactDetail.ctaText
                                        }}<span aria-hidden="true"> &rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!--Gmaps Card-->
                        <div class="w-full shadow-xl mt-4 sm:mt-6 lg:mt-8 mb-8 rounded-2xl">
                            <div
                                class="flex-1 w-full h-full relative map-responsive pb-[120%] sm:pb-[50%] md:pb-[50%] lg:pb-[30%] xl:pb-[30%] 2xl:pb-[30%]">


                                <iframe allowfullscreen class="rounded-tl-2xl rounded-tr-2xl" height="100%"
                                    loading="lazy"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2740.0343905297646!2d13.8433933!3d46.6260827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477081c082b8e4f7%3A0xce20ee88b28b7a1!2sFreie%20Christengemeinde%20%2F%20Pfingstgemeinde!5e0!3m2!1sde!2sat!4v1658674190571!5m2!1sde!2sat"
                                    style="border: 0" width="100%"></iframe>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                                <a class="text-base font-medium text-brand-primary-700 hover:text-brand-primary-600"
                                    href="#" rel="noopener noreferrer" target="_blank">Google Maps<span
                                        aria-hidden="true"> &rarr;</span></a>
                            </div>

                        </div>

                        <div class="bg-white p-5 mb-10 rounded-2xl shadow-xl text-gray-800">
                            <p>Sollte unser Parkplatz bereits voll sein, finden Sie einen Ausweichparkplatz gegenüber dem Supermarkt T&G.</p>
                        </div>

                    </section>

                </div>
            </main>
        </div>

    </public-layout>
</template>

<script setup>
import { MapPinIcon, EnvelopeIcon, PhoneIcon } from "@heroicons/vue/24/outline";
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
