<template>
    <Popover as="div" class="w-full relative z-40 mx-auto">

        <div class="flex justify-center">

            <nav class="relative mx-auto flex items-center justify-between pt-6 pb-2 px-4 sm:px-6 lg:px-8"
                aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-around space-x-10 lg:justify-between w-full lg:w-auto">
                        <Link href="/">
                        <span class="sr-only">FCG Villach</span>
                        <Logo class="lg:block h-20 mx-auto w-auto lg:h-20" />
                        </Link>

                        <div class="lg:hidden">
                            <PopoverButton
                                :class="[hasBackground ? 'text-white focus:ring-white' : 'text-gray-500',
                                    'bg-opacity-0 rounded-md p-2 inline-flex items-center justify-center hover:text-white hover:bg-opacity-100 focus:outline-none']"
                                class="">
                                <span class="sr-only">Open main menu</span>
                                <Bars3Icon :class="[blueMobileButton ? 'text-brand-primary' : '', 'h-6 w-6']"
                                    class="h-6 w-6" aria-hidden="true" />
                            </PopoverButton>
                        </div>
                    </div>

                    <div class="hidden lg:flex lg:ml-10 space-x-10 items-center justify-center">
                        <Link v-for="item in navigation" :key="item.name" :href="item.href" :class="[
                            hasBackground ? 'text-white hover:text-brand-primary-300' : 'text-gray-500 hover:text-brand-primary-300',
                            currentRoute === item.href ? 'text-brand-primary-600' : '',
                            'text-base font-medium']">
                        {{ item.name }}
                        </Link>

                        <DarkModeToggle :button-class="hasBackground ? 'text-white hover:text-brand-primary-300 hover:bg-white/10' : 'text-gray-500 hover:text-brand-primary hover:bg-gray-100 dark:text-gray-300 dark:hover:text-brand-primary-300 dark:hover:bg-gray-700'" />

                        <Link :href="route('dashboard.home')"
                            class="flex items-center justify-center px-6 py-1 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-primary-400">
                            <UserCircleIcon class="h-5 w-5 mr-2" /> Intern
                        </Link>

                        <button v-if="$page.props.auth.user" @click="logout"
                            class="flex items-center justify-center px-6 py-1 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400">
                            <ArrowLeftStartOnRectangleIcon class="h-7" /> Abmelden
                        </button>
                    </div>

                </div>
            </nav>

        </div>

        <!-- Mobile Menu -->
        <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
            leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute top-0 inset-x-0 transition transform origin-top lg:hidden">
                <div class="shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black dark:ring-white/10 ring-opacity-5 overflow-hidden">
                    <div class="pt-6">
                        <div class="flex items-center flex-1 mb-5">
                            <div
                                class="flex items-center justify-center space-x-10 lg:justify-between w-full lg:w-auto">
                                <Link href="/">
                                <span class="sr-only">FCG Villach</span>
                                <Logo class="h-20 mx-auto w-auto lg:h-20" />
                                </Link>

                                <div class="shrink flex items-center space-x-2">
                                    <DarkModeToggle />

                                    <PopoverButton
                                        class="bg-white dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-primary">
                                        <span class="sr-only">Close menu</span>
                                        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                                    </PopoverButton>
                                </div>
                            </div>
                        </div>

                        <div class="py-3 px-4">
                            <nav class="grid gap-y-5">
                                <Link href="/" :class="{ 'bg-gray-100 dark:bg-gray-700': currentRoute === homeRoute }"
                                    class="-m-1 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-primary text-white sm:h-12 sm:w-12">
                                    <HomeIcon class="h-6 w-6" aria-hidden="true" />
                                </div>
                                <span class="ml-3 text-base font-medium text-gray-500 dark:text-gray-300"
                                    :class="{ 'font-bold': currentRoute === homeRoute }">
                                    Home
                                </span>
                                </Link>

                                <Link v-for="item in navigation" :key="item.name" :href="item.href"
                                    :class="{ 'bg-gray-100 dark:bg-gray-700': currentRoute === item.href }"
                                    class="-m-1 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-primary text-white sm:h-12 sm:w-12">
                                    <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                                </div>
                                <span class="ml-3 text-base font-medium text-gray-500 dark:text-gray-300"
                                    :class="{ 'font-bold': currentRoute === item.href }">
                                    {{ item.name }}
                                </span>
                                </Link>

                                <Link :href="route('login')"
                                    class="-m-1 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-primary text-white sm:h-12 sm:w-12">
                                    <UserCircleIcon class="h-7" />
                                </div>
                                <span class="ml-3 text-base font-medium text-gray-500 dark:text-gray-300">
                                    Intern
                                </span>
                                </Link>

                                <button v-if="$page.props.auth.user" @click="logout"
                                    class="flex items-center justify-center px-6 py-1 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400">
                                    <ArrowLeftStartOnRectangleIcon class="h-7" /> Abmelden
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>


    <!-- Menu when scrolled down -->
    <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95"
        enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
        leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
        <Disclosure v-if="!atTopOfPage" as="nav" class="fixed z-40 inset-x-0 top-0 bg-white dark:bg-gray-800 shadow-lg"
            v-slot="{ open }">
            <div
                class="relative max-w-7xl mx-auto text-center py-1 px-2 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

                <div class="flex items-center justify-around lg:justify-center space-x-10 w-full">
                    <Link href="/">
                    <span class="sr-only">FCG Villach</span>
                    <Logo class="h-12"></Logo>
                    </Link>

                    <div class="lg:hidden flex items-center justify-between space-x-4">

                        <span class="font-medium text-gray-500 dark:text-gray-300">{{ currentPageName }}</span>

                        <DarkModeToggle />

                        <DisclosureButton v-if="!open"
                            class="text-gray-500 dark:text-gray-300 rounded-md p-2 inline-flex items-center justify-center">
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                        </DisclosureButton>

                        <DisclosureButton v-if="open"
                            class="text-gray-500 dark:text-gray-300 rounded-md p-2 inline-flex items-center justify-center">
                            <span class="sr-only">Close main menu</span>
                            <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                        </DisclosureButton>

                    </div>

                    <div class="hidden space-x-10 lg:flex items-center justify-center">

                        <Link v-if="$page.props.user" :href="route('dashboard.home')"
                            class="text-gray-500 dark:text-gray-300 hover:text-brand-primary-300 text-base font-medium">Dashboard
                        </Link>

                        <Link v-for="item in navigation" :key="item.name" :href="item.href" :class="['text-gray-500 dark:text-gray-300 hover:text-brand-primary-300',
                            currentRoute === item.href ? 'text-brand-primary-600' : '',
                            'text-base font-medium ']">{{ item.name }}
                        </Link>

                        <DarkModeToggle />

                        <Link :href="route('dashboard.home')"
                            class="flex items-center justify-center px-4 py-1 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-primary hover:bg-brand-primary-400">
                        <UserCircleIcon class="h-5 w-5 mr-2" /> Intern
                        </Link>

                        <button v-if="$page.props.auth.user" @click="logout"
                            class="flex items-center justify-center px-6 py-1 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-brand-secondary hover:bg-brand-secondary-400">
                            <ArrowLeftStartOnRectangleIcon class="h-5" /> Abmelden
                        </button>
                    </div>
                </div>


            </div>

            <DisclosurePanel class="px-2 pt-2 shadow-lg rounded">

                <div class="bg-white dark:bg-gray-800 px-2 py-3">
                    <nav class="grid gap-y-5">
                        <Link href="/" :class="{ 'bg-gray-100 dark:bg-gray-700': currentRoute === homeRoute }"
                            class="-m-1 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-primary text-white sm:h-12 sm:w-12">
                            <HomeIcon class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <span class="ml-3 text-base font-medium text-gray-500 dark:text-gray-300"
                            :class="{ 'font-bold': currentRoute === homeRoute }">
                            Home
                        </span>
                        </Link>

                        <Link v-for="item in navigation" :key="item.name" :href="item.href"
                            :class="{ 'bg-gray-100 dark:bg-gray-700': currentRoute === item.href }"
                            class="-m-1 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-primary text-white sm:h-12 sm:w-12">
                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <span class="ml-3 text-base font-medium text-gray-500 dark:text-gray-300"
                            :class="{ 'font-bold': currentRoute === item.href }">
                            {{ item.name }}
                        </span>
                        </Link>
                    </nav>
                </div>

            </DisclosurePanel>
        </Disclosure>
    </transition>
</template>

<script setup>
import { ref, computed, onBeforeMount, onBeforeUnmount } from 'vue';

import { Disclosure, DisclosureButton, DisclosurePanel, Popover, PopoverButton, PopoverPanel } from '@headlessui/vue';
import { ArrowLeftEndOnRectangleIcon, XMarkIcon, CalendarIcon, BanknotesIcon, ChatBubbleLeftRightIcon, Bars3Icon, NewspaperIcon, UserGroupIcon, HomeIcon, ArrowLeftStartOnRectangleIcon, UserCircleIcon } from '@heroicons/vue/24/outline';

import Logo from "@/Partials/Logo.vue";
import LogoText from "@/Partials/LogoText.vue";
import DarkModeToggle from "@/Partials/DarkModeToggle.vue";

import { router } from '@inertiajs/vue3';

defineProps({
    hasBackground: Boolean,
    blueMobileButton: Boolean,
});

const atTopOfPage = ref(true);
const homeRoute = route('public.home') + '/';

const navigation = [
    { name: 'Über uns', href: route('public.about'), icon: UserGroupIcon },
    { name: 'Events', href: route('public.events'), icon: CalendarIcon },
    { name: 'Predigten', href: route('public.blog'), icon: NewspaperIcon },
    { name: 'Kontakt', href: route('public.contact'), icon: ChatBubbleLeftRightIcon },
    { name: 'Spenden', href: route('public.donate'), icon: BanknotesIcon },
];

const currentRoute = computed(() => window.location.href);
const currentPageName = computed(() => {
    if (currentRoute.value === homeRoute) {
        return "Home";
    }
    return navigation.find(item => item.href === currentRoute.value)?.name;
});

const logout = () => {
    router.post(route('logout'));
};

// Scroll Event Handler
const handleScroll = () => {
    atTopOfPage.value = window.pageYOffset <= 130;
};

onBeforeMount(() => {
    window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>
