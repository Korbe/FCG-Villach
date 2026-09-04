<template>
    <public-layout title="Predigten">

        <Navbar />

        <div class="bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
            <div class="text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 pb-20 px-5">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    Alle <span class="text-brand-primary">Predigten</span>
                </h1>
                <p
                    class="mt-3 max-w-5xl lg:max-w-4xl text-gray-500 dark:text-gray-400 mx-auto text-xl sm:text-lg md:mt-5 lg:max-w-3xl md:text-xl">
                    Im Archiv können Sie durch alle Predigten stöbern
                </p>
            </div>

            <div id="posts" class="bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800">
                <div class="max-w-4xl mx-auto pb-24 px-4">
                    <BlogList :posts="posts" />
                </div>
            </div>
        </div>

    </public-layout>
</template>

<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import Navbar from "@/Partials/Navbar.vue";
import BlogList from '@/Partials/BlogList.vue'

defineProps({ posts: Object, });
</script>
