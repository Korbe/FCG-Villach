<template>
    <AppLayout :title="form.id ? 'News bearbeiten' : 'Neue Predigt'">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ form.id ? 'News bearbeiten' : 'News hochladen' }}
            </h2>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-400">
                {{ form.id ? 'Bearbeite die News' : 'Lade aktuelle News hoch.' }}
            </p>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <form class="space-y-10 divide-y divide-gray-200 dark:divide-gray-700 sm:space-y-5" @submit.prevent="save">
                        <div class="p-4">
                            <div>
                                <div class="space-y-8 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                                        <v-input id="title" v-model="form.title" :error="form.errors.title"
                                            label="Titel" />
                                        <VTextArea id="description" v-model="form.description"
                                            :error="form.errors.description" label="Beschreibung" />
                                    </div>

                                    <!-- Titelbild -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">Titel
                                            Bild</label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <!-- Bildvorschau -->
                                            <img v-if="title_image_preview" :src="title_image_preview"
                                                class="mb-2 w-32 h-32 object-cover rounded border dark:border-gray-600" />

                                            <file-input id="title_image" @change="previewTitleImage" accept="image/*"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                name="image" type="file" />
                                            <jet-input-error :message="form.errors.title_image" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Unterstützungsbild -->
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 dark:border-gray-700 sm:pt-5">
                                        <label
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 sm:mt-px sm:pt-2">Unterstützungs
                                            Bild</label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <!-- Bildvorschau -->
                                            <img v-if="support_image_preview" :src="support_image_preview"
                                                class="mb-2 w-32 h-32 object-cover rounded border dark:border-gray-600" />

                                            <file-input id="support_image" @change="previewSupportImage"
                                                accept="image/*"
                                                class="max-w-lg block w-full focus:ring-brand-primary focus:border-brand-primary sm:max-w-xs sm:text-sm"
                                                name="image" type="file" />
                                            <jet-input-error :message="form.errors.support_image" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 dark:bg-opacity-40 flex flex-row-reverse">
                            <div class="p-6">
                                <jet-button>{{ form.id ? 'Aktualisieren' : 'Hochladen' }}</jet-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { ref } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetButton from "@/Jetstream/Button.vue";
import FileInput from "@/Shared/FileInput.vue";
import VInput from "@/Shared/VInput.vue";
import VTextArea from "@/Shared/VTextarea.vue";

// Wenn wir die Daten erhalten, definieren wir sie hier
const props = defineProps({
    news: Object,
});

const form = useForm({
    id: props.news?.id || null,
    title: props.news?.title || '',
    description: props.news?.description || '',
    title_image: null,
    support_image: null
});

// Bild-Vorschau
const title_image_preview = ref(props.news?.media[0]?.original_url || null);
const support_image_preview = ref(props.news?.media[1]?.original_url || null);

// Funktion, um eine Bildvorschau anzuzeigen
const previewTitleImage = (event) => {
    const file = event.target.files[0];
    if (file) {
        title_image_preview.value = URL.createObjectURL(file);
        form.title_image = file;
    }
};

const previewSupportImage = (event) => {
    const file = event.target.files[0];
    if (file) {
        support_image_preview.value = URL.createObjectURL(file);
        form.support_image = file;
    }
};

const save = () => {
    // Wenn eine ID vorhanden ist, ein PUT-Request senden
    if (form.id)
        router.post(route('dashboard.news.update', form.id), { _method: 'put', ...form })
    else
        form.post(route("dashboard.news.store"))
};
</script>
