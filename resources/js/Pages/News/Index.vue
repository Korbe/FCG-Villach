<template>
    <AppLayout title="News">
        <template #header>
            <div class="flex items-center">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                    News
                </h2>
                <Link :href="route('dashboard.news.create')" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">News hochladen</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex flex-col">

                    <div class="overflow-x-auto bg-white dark:bg-gray-800 sm:rounded-md">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-700">

                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-white dark:bg-gray-800 py-10">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                Titel</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                Titelbild</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                Unterstützungsbild</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Bearbeiten</span>
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Löschen</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr v-for="(item, index) in news" :key="item.id"
                                            :class="index % 2 === 0 ? '' : 'bg-gray-50 dark:bg-gray-700/50'">

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 truncate w-64">
                                                        <span class="text-gray-800 dark:text-gray-200">{{ item.title }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-32">
                                                        <img loading="lazy" class="rounded"
                                                            :src="item.media[0].original_url" />
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-32">
                                                        <img loading="lazy" class="rounded"
                                                            :src="item.media[1].original_url" />
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium ">
                                                <Link :href="route('dashboard.news.edit', item.id)" tag="button">
                                                <ArrowPathIcon
                                                    class="h-5 w-5 text-brand-primary-600 hover:text-brand-primary-900" />
                                                </Link>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <button @click="deleteItem(item.id)"
                                                    :href="route('dashboard.news.destroy', item.id)"
                                                    class="flex :text-brand-primary-900">
                                                    <TrashIcon
                                                        class="h-5 w-5 text-gray-700 dark:text-gray-300 hover:text-brand-primary-900" />
                                                </button>
                                            </td>
                                        </tr>
                                        <tr v-if="news.length === 0">
                                            <td colspan="5"
                                                class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                Keine Neuigkeiten
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { TrashIcon } from '@heroicons/vue/24/solid'
import { router } from '@inertiajs/vue3'
import { ArrowPathIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
    news: Array,
});

const deleteItem = (id) => {
    router.delete(route('dashboard.news.destroy', id))
}
</script>
