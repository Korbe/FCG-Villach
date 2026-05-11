<template>

    <Head :title="title" />

    <Banner />

    <slot />

    <Footer/>

</template>

<script setup>
import Banner from '@/Jetstream/Banner.vue'
import Footer from "@/Partials/Footer.vue";
import { Head } from '@inertiajs/vue3';

defineProps({
    title: String,
});
</script>
