<template>

    <Head :title="title">
        <meta v-if="description" head-key="description" name="description" :content="description" />
        <meta v-if="description" head-key="og:description" property="og:description" :content="description" />
        <meta v-if="description" head-key="twitter:description" property="twitter:description" :content="description" />
        <meta head-key="og:title" property="og:title" :content="fullTitle" />
        <meta head-key="twitter:title" property="twitter:title" :content="fullTitle" />
        <link head-key="canonical" rel="canonical" :href="canonicalUrl" />
        <meta head-key="og:url" property="og:url" :content="canonicalUrl" />
        <meta head-key="twitter:url" property="twitter:url" :content="canonicalUrl" />
        <meta head-key="og:image" property="og:image" :content="image" />
        <meta head-key="twitter:image" property="twitter:image" :content="image" />
        <meta head-key="og:type" property="og:type" :content="ogType" />
        <meta head-key="robots" name="robots" :content="noindex ? 'noindex, nofollow' : 'index, follow'" />
    </Head>

    <CookieBanner />

    <Banner />

    <slot />

    <Footer/>

</template>

<script setup>
import { computed } from 'vue';
import Banner from '@/Jetstream/Banner.vue'
import CookieBanner from '@/Partials/CookieBanner.vue';
import Footer from "@/Partials/Footer.vue";
import { Head, usePage } from '@inertiajs/vue3';

const SITE_URL = 'https://fcg-villach.at';

const props = defineProps({
    title: String,
    description: String,
    url: String,
    image: { type: String, default: `${SITE_URL}/images/fcg-villach-logo-minimal.png` },
    ogType: { type: String, default: 'website' },
    noindex: Boolean,
});

const page = usePage();

const fullTitle = computed(() => `${props.title} - FCG Villach`);

const canonicalUrl = computed(() => {
    if (props.url) return props.url;
    const path = page.url.split('?')[0].split('#')[0].replace(/\/+$/, '');
    return SITE_URL + path;
});
</script>
