<template>
    <div class="relative bg-white dark:bg-gray-800 py-4 pb-32 lg:pt-2">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                    <div v-for="task in tasks" :key="task.name" class="pt-6">
                        <div class="flow-root h-full rounded-2xl bg-gray-50 dark:bg-gray-700 px-6 pb-8 ring-1 ring-gray-900/5 dark:ring-white/10 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:ring-brand-primary/20">
                            <div class="-mt-6">
                                <div>
                                  <span class="inline-flex items-center justify-center rounded-xl bg-brand-primary p-3 shadow-lg shadow-brand-primary-500/30">
                                    <component :is="task.icon" class="h-6 w-6 text-white" aria-hidden="true" />
                                  </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 dark:text-white">{{ task.name }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {
    ShieldCheckIcon,
    MegaphoneIcon,
    SparklesIcon,
    UserGroupIcon
} from '@heroicons/vue/24/outline';

const tasks = [
    {
        name: 'Jesus Christus als Retter der Welt verkündigen',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: MegaphoneIcon,
    },
    {
        name: 'Gemeinschaft miteinander pflegen',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: UserGroupIcon,
    },
    {
        name: 'Uns gegenseitig unterstützen',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ShieldCheckIcon,
    },
    {
        name: 'Unseren Glauben gemeinsam feiern',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: SparklesIcon,
    },
];
</script>

