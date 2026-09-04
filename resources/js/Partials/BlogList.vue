<template>

    <div class="grid grid-cols-1 gap-4">
        <post-audio-player :ref="'post'+index" v-for="(post, index) in posts.data" :key="index" :index=index :post="post" />

        <!--empty state-->
        <div v-if="posts.total === 0 "
             class="text-center rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 dark:text-gray-300 px-6 py-5 shadow-sm hover:border-brand-primary focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-primary">
            Noch keine Prediten
        </div>
    </div>

    <pagination :data="posts" />

</template>

<script setup>

import PostAudioPlayer from "@/Partials/PostAudioPlayer.vue";
import Pagination from './Pagination.vue';

defineProps({
        posts: Object,
    });
</script>
