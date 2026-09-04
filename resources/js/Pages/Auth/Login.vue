<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Jetstream/Checkbox.vue';
import InputError from '@/Jetstream/InputError.vue';
import InputLabel from '@/Jetstream/InputLabel.vue';
import PrimaryButton from '@/Jetstream/PrimaryButton.vue';
import TextInput from '@/Jetstream/TextInput.vue';
import { ArrowLeftIcon } from '@heroicons/vue/24/outline';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Log in" />

    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side: Image -->
        <div class="w-full h-40 md:w-1/3 md:h-screen">
            <img src="/images/auth/church.jpeg"
                alt="Bildbeschreibung" class="object-cover w-full h-full" />
        </div>

        <!-- Right side: Form -->
        <div class="w-full h-screen md:w-2/3 bg-white dark:bg-gray-800 flex flex-col relative">
            <Link :href="'/'" class="absolute top-4 left-4 flex items-center text-gray-900 dark:text-gray-100">
            <ArrowLeftIcon class="h-5 w-5 mr-2" /> Zurück
            </Link>

            <!-- Login-Formular zentriert -->
            <div class="flex-grow flex justify-center items-center">
                <div class="w-full max-w-md">
                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                        {{ status }}
                    </div>

                    <!-- Logo -->
                    <div class="flex justify-center mb-10">
                        <Link :href="'/'" class="text-center">
                        <img loading="lazy" alt="FCG Villach" class="h-20" src="/images/fcg-villach-logo-minimal.png" />
                        </Link>
                    </div>

                    <!-- Login-Formular -->
                    <form @submit.prevent="submit" class="p-5">
                        <div>
                            <InputLabel for="email" value="Email" />
                            <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required
                                autofocus autocomplete="username" />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="password" value="Passwort" />
                            <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full"
                                required autocomplete="current-password" />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="block mt-4">
                            <label class="flex items-center">
                                <Checkbox v-model:checked="form.remember" name="remember" />
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Angemeldet bleiben</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <Link v-if="canResetPassword" :href="route('password.request')"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-primary-500">
                            Passwort vergessen?
                            </Link>

                            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Anmelden
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>
