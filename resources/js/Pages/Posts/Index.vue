<template>
    <AppLayout title="Predigten">
        <template #header>
            <div class="flex items-center">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                    Predigten
                </h2>
                <Link :href="route('dashboard.posts.create')"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                Neue Predigt</Link>
            </div>
        </template>

        <!-- Unpublished posts -->
        <div class="pt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-2 pb-6">
                    <h3 class="text-lg font-medium text-gray-900">Unveröffentlichte Predigten</h3>
                    <p class="mt-1 text-sm text-gray-600">Hier werden alle Predigten angezeigt welche entweder noch kein
                        Veröffentlichungsdatum haben oder erst veröffentlicht werden.</p>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                                <table class="bg-white min-w-full divide-y divide-gray-200">
                                    <thead class=" py-10">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Author</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Title</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Audio</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Veröffentlicht</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Bearbeiten</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr v-for="post in unpublished" :key="post.id">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <!-- Author Image in Tabelle -->
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img loading="lazy" class="h-10 w-10 rounded-full"
                                                            :src="post.photo" :alt="post.author" />
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-500">
                                                            {{ post.author }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ post.title }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <template v-if="post.audio_name">
                                                    {{ post.audio_name }} ({{ post.audio_size }})
                                                </template>
                                                <template v-else>
                                                    Keine Aufnahme
                                                </template>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ post.published_at ?? 'kein Datum festgelegt' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <Link :href="route('dashboard.posts.edit', post.id)"
                                                    class="flex text-brand-primary-600 hover:text-brand-primary-900">
                                                <ArrowPathIcon class="h-5 w-5" />
                                                </Link>
                                            </td>
                                        </tr>
                                        <tr v-if="unpublished.length === 0">
                                            <td colspan="5"
                                                class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Keine unveröffentlichten Predigten
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

        <!-- all published posts -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex flex-col">
                    <div class="px-2 pb-6">
                        <h3 class="text-lg font-medium text-gray-900">Veröffentlichte Predigten</h3>
                        <p class="mt-1 text-sm text-gray-600">Hier werden alle veröffentlichte Predigten angezeigt.
                            Unter
                            Bearbeiten können weitere Aktionen durchführen.</p>
                    </div>

                    <div class="overflow-x-auto bg-white sm:rounded-md"> <!--sm:-mx-6 lg:-mx-8-->
                        <div class="align-middle inline-block min-w-full"> <!--  sm:px-6 lg:px-8 -->
                            <div class="shadow overflow-hidden border-b border-gray-200">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-white py-10">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Author</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Title</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Audio</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                                Veröffentlicht</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Bearbeiten</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr v-for="(post, postIndex) in posts.data" :key="post.id"
                                            :class="postIndex % 2 === 0 ? undefined : 'bg-gray-50'">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img loading="lazy" class="h-10 w-10 rounded-full"
                                                            :src="post.photo" :alt="post.author" />
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ post.author }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ post.title }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <template v-if="post.audio_name">
                                                    {{ post.audio_name }} ({{ post.audio_size }})
                                                </template>
                                                <template v-else>
                                                    Keine Aufnahme
                                                </template>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ post.published_at }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <Link :href="route('dashboard.posts.edit', post.id)"
                                                    class="flex text-brand-primary-600 hover:text-brand-primary-900">
                                                <ArrowPathIcon class="h-5 w-5" />
                                                </Link>
                                            </td>
                                        </tr>
                                        <tr v-if="posts.total === 0">
                                            <td colspan="5"
                                                class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Keine veröffentlichten Predigten
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <div v-if="posts.total > 0"
                        class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <Link preserve-scroll  v-if="posts.prev_page_url" :disabled="posts.prev_page_url" :href="posts.prev_page_url"
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Zurück
                            </Link>
                            <Link preserve-scroll v-if="posts.next_page_url" :disabled="posts.next_page_url" :href="posts.next_page_url"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Weiter
                            </Link>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Ergebnisse
                                    <span class="font-medium">{{ posts.from }}</span>
                                    {{ ' ' }}
                                    bis
                                    {{ ' ' }}
                                    <span class="font-medium">{{ posts.to }}</span>
                                    {{ ' ' }}
                                    von
                                    {{ ' ' }}
                                    <span class="font-medium">{{ posts.total }}</span>
                                    {{ ' ' }}
                                    gesamt
                                </p>
                            </div>
                            <div>
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                        aria-label="Pagination">

                                        <Link preserve-scroll v-if="posts.prev_page_url" :disabled="posts.prev_page_url"
                                            :href="posts.prev_page_url"
                                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Zurück</span>
                                        <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
                                        </Link>

                                        <template v-for="link in posts.links">
                                            <Link preserve-scroll :disabled="!link.url" :href="link.url"
                                                v-if="link.url && !isNaN(link.label)" :key="link.url + link.label"
                                                :class="[link.active ? 'z-10 bg-brand-primary-50 border-brand-primary-500 text-brand-primary-600' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50', 'text-base font-medium ']"
                                                class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50  relative items-center px-4 py-2 border text-sm font-medium">
                                            {{ link.label }}
                                            </Link>
                                        </template>

                                        <Link v-if="posts.next_page_url" preserve-scroll :disabled="posts.next_page_url"
                                            :href="posts.next_page_url"
                                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Weiter</span>
                                        <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
                                        </Link>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ArrowPathIcon, ArrowRightIcon } from "@heroicons/vue/24/outline";
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/24/solid'

defineProps({
    unpublished: Array,
    posts: Object,
})
</script>