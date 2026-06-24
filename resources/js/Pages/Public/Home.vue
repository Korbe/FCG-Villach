<template>
    <public-layout title="Home">

        <hero />

        <welcome />

        <news :items="news" />

        <visit-us />

        <Events />

        <testimonials />

        <faq />

        <cta />

    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Hero from '@/Partials/Home/Hero.vue'
import Testimonials from "@/Partials/Home/Testimonials.vue";
import Cta from "@/Partials/Home/Cta.vue";
import Faq from "@/Partials/Faq.vue";
import News from "@/Partials/Home/News.vue";
import VisitUs from "@/Partials/Home/VisitUs.vue";
import Welcome from "@/Partials/Home/Welcome.vue";
import Events from "@/Partials/Home/Events.vue";

defineProps({ news: Array })

</script>
