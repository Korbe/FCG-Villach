<template>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2" :for="id">{{ label }}</label>
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <textarea
            :id="id"
            :value="modelValue"
            class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md"
            @input="$emit('update:modelValue', $event.target.value)"
            rows="5"
        ></textarea>

        <div v-show="error">
            <p class="text-sm text-red-600">
                {{ error }}
            </p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    id: {
        type: String,
        required: true
    },
    label: {
        type: String,
        required: true
    },
    modelValue: {
        type: String,
        required: false
    },
    error: {
        type: String,
    }
});

defineEmits(['update:modelValue']);
</script>
