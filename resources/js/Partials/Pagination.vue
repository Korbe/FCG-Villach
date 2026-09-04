<template>

    <nav class="py-5 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between sm:px-0">
        <div class="-mt-px w-0 flex-1 flex">
            <Link v-if="data.current_page > 1" :href="data.prev_page_url"
                class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center  font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 dark:hover:border-gray-500"
                preserve-scroll>
            <ChevronLeftIcon aria-hidden="true" class="mr-3 h-5 w-5 text-gray-400" />
            Zurück
            </Link>
        </div>
        <div v-if="data.last_page > 1" class="hidden md:-mt-px md:flex">

            <Link v-if="data.current_page > 1" :href="data.first_page_url"
                class="border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 dark:hover:border-gray-500 border-t-2 pt-4 px-4 inline-flex items-center  font-medium"
                preserve-scroll>
            1
            </Link>

            <span v-if="data.current_page == data.last_page"
                class="text-gray-500 dark:text-gray-400 pt-4 px-4 inline-flex items-center font-medium">
                ...
            </span>

            <span aria-current="page"
                class="border-brand-primary-500 text-brand-primary-600 dark:text-brand-primary-300 border-t-2 pt-4 px-4 inline-flex items-center  font-medium">
                {{
                    data.current_page
                }} </span>

            <span v-if="data.current_page < data.last_page"
                class="text-gray-500 dark:text-gray-400 pt-4 px-4 inline-flex items-center font-medium">
                ...
            </span>

            <Link v-if="data.current_page < data.last_page" :href="data.last_page_url"
                class="border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 dark:hover:border-gray-500 border-t-2 pt-4 px-4 inline-flex items-center  font-medium"
                preserve-scroll>
            {{
                data.last_page
            }}
            </Link>
        </div>
        <div class="-mt-px w-0 flex-1 flex justify-end">
            <Link v-if="data.current_page < data.last_page" :href="data.next_page_url"
                class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-base font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 dark:hover:border-gray-500"
                preserve-scroll>
            Weiter
            <ChevronRightIcon aria-hidden="true" class="ml-3 h-5 w-5 text-gray-400" />
            </Link>
        </div>
    </nav>

</template>

<script setup>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/24/solid'

defineProps({ data: Object });
</script>
