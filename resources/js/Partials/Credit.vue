<template>
    <div class="mt-12 border-t border-gray-200 pt-8">
        <p class="text-base text-gray-500 xl:text-center">
            Designed and Developed with<span class="inline-block align-top">
                <HeartIcon class="text-red-500 h-5 px-1" />
            </span>by <a class="underline" href="https://korbitsch.at" target="_blank">Ing. Lukas Korbitsch</a>
        </p>
        <p class="pt-4 text-base text-gray-500 xl:text-center">
            &copy; {{ new Date().getFullYear() }} FCG-Villach. Alle Rechte vorbehalten
        </p>
    </div>
</template>
<script setup>
import { HeartIcon } from '@heroicons/vue/24/outline';

</script>