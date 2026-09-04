<template>
    <button type="button" @click="toggleTheme"
        :class="[large ? 'h-10 w-10' : 'h-9 w-9', 'relative inline-flex items-center justify-center rounded-full transition-colors', buttonClass]"
        :aria-label="theme === 'dark' ? 'Zu hellem Modus wechseln' : 'Zu dunklem Modus wechseln'">
        <SunIcon v-if="theme === 'dark'" class="h-5 w-5" aria-hidden="true" />
        <MoonIcon v-else class="h-5 w-5" aria-hidden="true" />
    </button>
</template>

<script setup>
import { SunIcon, MoonIcon } from "@heroicons/vue/24/outline";
import { useDarkMode } from "@/Composables/useDarkMode";

defineProps({
    large: Boolean,
    buttonClass: {
        type: String,
        default: 'text-gray-500 hover:text-brand-primary hover:bg-gray-100 dark:text-gray-300 dark:hover:text-brand-primary-300 dark:hover:bg-gray-700',
    },
});

const { theme, toggleTheme } = useDarkMode();
</script>
