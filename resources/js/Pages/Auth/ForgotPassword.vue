<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import InputError from '@/Jetstream/InputError.vue';
import InputLabel from '@/Jetstream/InputLabel.vue';
import PrimaryButton from '@/Jetstream/PrimaryButton.vue';
import TextInput from '@/Jetstream/TextInput.vue';
import { ArrowLeftIcon } from '@heroicons/vue/24/outline';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>

    <Head title="Forgot Password" />

    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side: Image -->
        <div class="w-full h-40 md:w-1/3 md:h-screen">
            <img src="/images/auth/compass.jpg" alt="Bildbeschreibung" class="object-cover w-full h-full" />
        </div>

        <!-- Right side: Form -->
        <div class="w-full h-screen md:w-2/3 bg-white dark:bg-gray-800 flex flex-col relative">
            <Link :href="'/'" class="absolute top-4 left-4 flex items-center text-gray-900 dark:text-gray-100">
            <ArrowLeftIcon class="h-5 w-5 mr-2" /> Zurück
            </Link>

            <!-- Reset-Formular zentriert -->
            <div class="p-5 flex-grow flex justify-center items-center">
                <div class="w-full max-w-md">
                    <!-- Logo -->
                    <div class="flex justify-center mb-10">
                        <Link :href="'/'" class="text-center">
                        <img loading="lazy" alt="FCG Villach" class="h-20" src="/images/fcg-villach-logo-minimal.png" />
                        </Link>
                    </div>

                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                        {{ status }}
                    </div>

                    <form @submit.prevent="submit">
                        <div>
                            <InputLabel for="email" value="Email" />
                            <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required
                                autofocus autocomplete="username" />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Passwort zurücksetzen
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>