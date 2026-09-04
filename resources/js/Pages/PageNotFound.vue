<template>
    <public-layout title="404 - Seite konnte nicht gefunden werden">
        <Navbar />

        <div class="min-h-full py-36 lg:py-48 flex flex-col bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
            <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="py-16">
                    <div class="text-center">
                        <p class="text-sm font-semibold text-brand-primary-600 dark:text-brand-primary-300 uppercase tracking-wide">404 Error</p>
                        <h1 class="mt-2 text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight sm:text-5xl">Seite nicht
                            gefunden.</h1>
                        <p class="mt-2 text-base text-gray-500 dark:text-gray-400">Entschuldigung, wir konnten die gesuchte Seite nicht
                            finden, überprüfen Sie gegebenenfalls die Adresszeile.</p>
                        <div class="mt-6">
                            <Link href="/"
                                class="text-base font-medium text-brand-primary-600 hover:text-brand-primary-500">Zurück
                            zur Startseite<span aria-hidden="true"> &rarr;</span></Link>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";
</script>
