<template>

    <Head :title="title" />
    
    <CookieBanner />

    <Banner />

    <slot />

    <Footer/>

</template>

<script setup>
import Banner from '@/Jetstream/Banner.vue'
import CookieBanner from '@/Partials/CookieBanner.vue';
import Footer from "@/Partials/Footer.vue";
import { Head } from '@inertiajs/vue3';

defineProps({
    title: String,
});
</script>
