<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import {ArchiveBoxIcon, BookOpenIcon, ListBulletIcon, PlusIcon, ArrowUpOnSquareIcon} from "@heroicons/vue/24/outline";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                    <!-- Welcome -->
                    <div>
                        <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 dark:text-gray-100">
                            <div class="">
                                <ApplicationLogo class="h-32 w-auto"/>
                            </div>

                            <div class="mt-8 text-2xl">
                                Willkommen im FCG-Villach Dashboard
                            </div>
                        </div>

                        <!--Predigten-->
                        <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 dark:bg-opacity-40 grid grid-cols-1 md:grid-cols-2">
                            <Link :href="route('dashboard.posts.create')">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <BookOpenIcon class="w-8 h-8 text-gray-400"/>
                                        <div class="ml-4 text-lg text-gray-600 dark:text-gray-300 leading-7 font-semibold">Neue Predigt</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-3 flex items-center text-sm font-semibold text-brand-primary-700">
                                            <div>Neu erstellen</div>
                                            <div class="ml-1 text-brand-primary">
                                                <PlusIcon class="w-4 h-4"/>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </Link>

                            <Link :href="route('dashboard.posts.index')">
                                <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-t-0 md:border-l">

                                    <div class="flex items-center">
                                        <ListBulletIcon class="w-8 h-8 text-gray-400"/>
                                        <div class="ml-4 text-lg text-gray-600 dark:text-gray-300 leading-7 font-semibold">Alle Predigten</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-sm text-gray-500">
                                        </div>
                                        <div class="mt-3 flex items-center text-sm font-semibold text-brand-primary-700">
                                            <div>Predigten anzeigen</div>

                                            <div class="ml-1 text-brand-primary">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </Link>
                        </div>

                        <!--News-->
                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                            <Link :href="route('dashboard.news.create')">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <ArrowUpOnSquareIcon class="w-8 h-8 text-gray-400"/>
                                        <div class="ml-4 text-lg text-gray-600 dark:text-gray-300 leading-7 font-semibold">Neuigkeiten hochladen</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-3 flex items-center text-sm font-semibold text-brand-primary-700">
                                            <div>Hochladen</div>
                                            <div class="ml-1 text-brand-primary">
                                                <PlusIcon class="w-4 h-4"/>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </Link>

                            <Link :href="route('dashboard.news.index')">
                                <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-t-0 md:border-l">

                                    <div class="flex items-center">
                                        <ArchiveBoxIcon class="w-8 h-8 text-gray-400"/>
                                        <div class="ml-4 text-lg text-gray-600 dark:text-gray-300 leading-7 font-semibold">Alle Neuigkeiten</div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-sm text-gray-500">
                                        </div>
                                        <div class="mt-3 flex items-center text-sm font-semibold text-brand-primary-700">
                                            <div>Neuigkeiten anzeigen</div>

                                            <div class="ml-1 text-brand-primary">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </AppLayout>
</template>
