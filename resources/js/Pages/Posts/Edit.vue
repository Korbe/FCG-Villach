<template>
    <AppLayout title="Predigt bearbeiten">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                Predigt ändern
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

                <!-- Haupt-Formular -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="updatePost" class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700 sm:space-y-5">
                            <div class="p-6">
                                <div class="space-y-6 sm:space-y-5">

                                    <!-- Titel -->
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <label for="title"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Titel </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.title" type="text" name="title" id="title"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md" />
                                            <jet-input-error :message="form.errors.title" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Autor -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label for="author"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Autor </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.author" type="text" name="author" id="author"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md" />
                                            <jet-input-error :message="form.errors.author" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Veröffentlichungsdatum -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label for="published_at"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Veröffentlicht
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input v-model="form.published_at" id="published_at" name="published_at"
                                                type="datetime-local"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md" />
                                            <jet-input-error :message="form.errors.published_at" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Erstellt / Aktualisiert -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Erstellt
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input disabled :value="post.created_at" type="datetime-local"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded-md" />
                                        </div>
                                    </div>

                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Aktualisiert
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input disabled :value="post.updated_at" type="datetime-local"
                                                class="max-w-lg block w-full shadow-sm focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded-md" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 dark:bg-opacity-40 flex flex-row-reverse">
                                <div class="p-6 space-x-4">
                                    <jet-danger-button :disabled="form.processing" type="button"
                                        @click="deletePost">Löschen</jet-danger-button>
                                    <jet-button :disabled="form.processing">Speichern</jet-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Audio-Formular -->
                <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="updateAttachment" class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700 sm:space-y-5">
                            <div class="p-6">
                                <div class="space-y-6 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                            Aufnahme
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <file-input v-model="audioForm.audio" :error="audioForm.errors.audio"
                                                accept="audio/mp3,audio/*;capture=microphone"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                type="file" />
                                            <jet-input-error :message="audioForm.errors.audio" class="mt-2" />
                                        </div>
                                    </div>

                                    <div v-if="audioForm.audio || post.audio?.original_url"
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2"> Anhören
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <audio class="py-2" controls
                                                :src="audioForm.audio ? audio_url : post.audio.original_url"></audio>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 dark:bg-opacity-40 flex flex-row-reverse">
                                <div class="p-6 space-x-4">
                                    <jet-button :disabled="audioForm.processing">Speichern</jet-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Foto-Formular -->
                <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="updatePhoto" class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="space-y-8 divide-y divide-gray-200 dark:divide-gray-700 sm:space-y-5">
                            <div class="p-6">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">
                                        Profilfoto aktualisieren
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <FileInput v-model="photoForm.photo" :error="photoForm.errors.photo"
                                            accept="image/*"
                                            class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                            type="file" />
                                        <jet-input-error :message="photoForm.errors.photo" class="mt-2" />
                                        <div v-if="photoPreview || post.photo_url" class="mt-2">
                                            <img :src="photoPreview || post.photo_url"
                                                class="h-32 w-32 object-cover rounded-md border dark:border-gray-600" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 dark:bg-opacity-40 flex flex-row-reverse">
                                <div class="p-6 space-x-4">
                                    <jet-button :disabled="photoForm.processing">Speichern</jet-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetDangerButton from "@/Jetstream/DangerButton.vue";
import FileInput from "@/Shared/FileInput.vue";

export default {
    props: { post: Object },
    components: { AppLayout, JetInputError, JetButton, JetDangerButton, FileInput },
    data() {
        return {
            form: this.$inertia.form({
                title: this.post.title,
                author: this.post.author,
                published_at: this.post.published_at,
            }),
            audioForm: this.$inertia.form({
                audio: null
            }),
            photoForm: this.$inertia.form({
                photo: null
            }),
            audio_url: null,
            photoPreview: null
        }
    },
    watch: {
        'audioForm.audio'(newValue) {
            this.audio_url = newValue ? URL.createObjectURL(newValue) : null;
        },
        'photoForm.photo'(newValue) {
            this.photoPreview = newValue ? URL.createObjectURL(newValue) : null;
        }
    },
    methods: {
        updatePost() {
            this.form.put(route('dashboard.posts.update', this.post.id));
        },
        deletePost() {
            this.form.delete(route('dashboard.posts.destroy', this.post.id));
        },
        updateAttachment() {
            this.audioForm.post(route('dashboard.posts.audio', this.post.id));
        },
        updatePhoto() {
            this.photoForm.post(route('dashboard.posts.photo', this.post.id));
        }
    }
}
</script>
