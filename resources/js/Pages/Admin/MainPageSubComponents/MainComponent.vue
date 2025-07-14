<script setup lang="ts">

import Label from "../../../Components/AdminComponents/Label.vue";
import Button from "../../../Components/AdminComponents/Button.vue";
import Field from "../../../Components/AdminComponents/Field.vue";

import {watch} from "vue";

const props = defineProps({
    form: {
        type: Object,
    },
});

const emit = defineEmits(['formChanged'])
watch(
    () => props.form, (newForm) => {
        emit('formChanged', newForm)
    },
);

const handleImageUpdate = (event, attribute) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        if (attribute === 'first_main_image') {
            props.form.first_main_image = e.target.result;
        }
    };
    reader.readAsDataURL(file);
    props.form.first_main_image_file = file;
};

const triggerFileInput = (elementId) => {
    document.getElementById(elementId).click();
};

const deleteImage = (attribute) => {
    if (attribute === 'first_main_image') {
        props.form.first_main_image = '';
        props.form.first_main_image_file = '';
    }
};

</script>

<template>
    <div class="flex">
        <div style="width: 20%">
            <div class="relative max-w-[250px]">
                <label
                    :class="['block text-gray-700 font-semibold mb-2', props.form.errors.first_main_image ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                    Зображення
                </label>
                <div class="w-full overflow-hidden rounded-md border border-gray-300"
                     v-if="props.form.first_main_image">
                    <img
                        :src="props.form.first_main_image.length<=100 && props.form.first_main_image!=='/storage/no_image.webp'?'/storage/main/'+props.form.first_main_image:props.form.first_main_image"
                        alt="First main image"
                        class="object-cover h-[50%] w-full cursor-pointer"
                        @click="triggerFileInput('FirstMainImageFileInput')"
                    />
                    <button
                        class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                        @click="deleteImage('first_main_image')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a2 2 0 00-2 2v1h8V5a2 2 0 00-2-2m-4 0h4"/>
                        </svg>
                    </button>
                </div>
                <div class=" overflow-hidden rounded-md border border-gray-300" v-else>
                    <button
                        type="button"
                        class="flex justify-center items-center w-full h-[50%] bg-gray-200 rounded-md cursor-pointer"
                        @click="triggerFileInput('FirstMainImageFileInput')"
                    >
                        <i class="fa fa-plus text-xl text-gray-600"></i>
                    </button>
                </div>
                <div v-if="props.form.errors.first_main_image" class="mt-2 text-sm text-red-600">
                    {{ props.form.errors.first_main_image }}
                </div>
                <input
                    :id="`FirstMainImageFileInput`"
                    type="file"
                    class="hidden"
                    @change="(event) => handleImageUpdate(event,'first_main_image')"
                    accept="image/*"
                />
            </div>
        </div>
        <div class="space-y-4" style="width: 80%">
            <div>
                <Field
                    id="first_main_title"
                    type="text"
                    v-model="props.form.first_main_title"
                    :error="props.form.errors.first_main_title"
                    label="Головний заголовок"
                />
            </div>
            <div>
                <Field
                    id="first_main_btn_text"
                    type="text"
                    v-model="props.form.first_main_btn_text"
                    :error="props.form.errors.first_main_btn_text"
                    label="Текст кнопки"
                />
            </div>
            <div>
                <Field
                    id="first_main_text"
                    type="textarea"
                    v-model="props.form.first_main_text"
                    :error="props.form.errors.first_main_text"
                    label="Головний текст"
                />
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
