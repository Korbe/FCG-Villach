<template>
    <AppLayout title="Neue Predigt">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Neue Predigt
            </h2>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Zum Erstellen einer neuen Predigt, füllen Sie bitte alle Felder aus.
            </p>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="createPost" class="space-y-8 divide-y divide-gray-200">
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                            <div class="p-6">
                                <div class="space-y-6 sm:space-y-5">

                                    <!-- Titel -->
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <label for="title"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Titel *
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.title" type="text" name="title" id="title"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 rounded-md" />
                                            <JetInputError :message="form.errors.title" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Autor -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="author"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Autor *
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.author" type="text" name="author" id="author"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 rounded-md" />
                                            <JetInputError :message="form.errors.author" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Profilfoto -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="photo"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Autor Foto
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <FileInput v-model="form.photo" :error="form.errors.photo" accept="image/*"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                type="file" />
                                            <JetInputError :message="form.errors.photo" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Veröffentlichungsdatum -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="published_at"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Veröffentlichen am
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.published_at" id="published_at" name="published_at"
                                                type="datetime-local"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 rounded-md" />
                                            <JetInputError :message="form.errors.published_at" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Audio -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="audio"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Aufnahme
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <FileInput v-model="form.audio" :error="form.errors.audio"
                                                accept="audio/mp3,audio/*;capture=microphone"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                type="file" />
                                            <JetInputError :message="form.errors.audio" class="mt-2" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="bg-gray-200 bg-opacity-25 flex flex-row-reverse">
                                <div class="p-6">
                                    <JetButton :disabled="form.processing">Erstellen</JetButton>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetButton from "@/Jetstream/Button.vue";
import FileInput from "@/Shared/FileInput.vue";
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    title: null,
    author: null,
    published_at: null,
    photo: null,  // Profilfoto
    audio: null,
    errors: {}
});

const createPost = () => {
    form.post(route('dashboard.posts.store'));
};
</script>
