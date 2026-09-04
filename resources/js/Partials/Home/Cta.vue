<template>
    <div class="bg-gradient-to-b from-white to-gray-100 dark:from-gray-800 dark:to-gray-800 py-16 sm:pb-32">
        <div class="relative">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="relative rounded-2xl px-6 py-10 bg-brand-primary-600 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                        <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-brand-primary-500 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                            <path class="text-brand-primary-700 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="sm:text-center">
                            <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Machen Sie gerade eine schwere Zeit durch?</h2>
                            <p class="mt-6 mx-auto max-w-2xl text-lg text-brand-primary-50">Befinden Sie sich gerade in einer Lebenskrise oder treiben Sie schlechte Gedanken in die Irre? Haben Sie
                            Fragen oder wollen einfach nur mehr erfahren. Wir sind jederzeit für Sie da!</p>
                        </div>
                        <div class="mt-14 mx-auto max-w-sm">
                            <Link :href="route('public.contact')"
                                          class="block text-center w-full rounded-md border border-transparent px-5 py-3 bg-brand-primary-500 text-base font-medium text-white shadow hover:bg-brand-primary-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-primary-600 sm:px-10">Kontaktieren Sie uns</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>
