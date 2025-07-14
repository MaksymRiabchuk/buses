<script setup lang="ts">

import Label from "../../../Components/AdminComponents/Label.vue";
import Field from "../../../Components/AdminComponents/Field.vue";
import Button from "../../../Components/AdminComponents/Button.vue";

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

const handleGalleryImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    if (file.type.startsWith('video/')) {
        props.form.gallery[index].video = true;
        props.form.gallery[index].videoFile = file;
        props.form.gallery[index].image = URL.createObjectURL(file);
    } else {
        const reader = new FileReader();
        reader.onload = (e) => {
            props.form.gallery[index].image = e.target.result;
        };
        reader.readAsDataURL(file);
        props.form.gallery[index].imageFile = file;
    }
};

const handleGalleryPreviewImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (e) => {
        props.form.gallery[index].previewImage = e.target.result;
    };
    reader.readAsDataURL(file);
    props.form.gallery[index].previewImageFile = file;

};

const triggerGalleryFileInput = (index) => {
    document.getElementById(`GalleryImageFileInput${index}`).click();
};

const triggerGalleryPreviewFileInput = (index) => {
    document.getElementById(`GalleryPreviewImageFileInput${index}`).click();
};

const deleteGalleryItemImage = (index) => {
    props.form.gallery[index].image = '';
    props.form.gallery[index].imageFile = '';
};

const deleteGalleryItemPreviewImage = (index) => {
    props.form.gallery[index].previewImage = '';
    props.form.gallery[index].previewImageFile = '';
};


const addGalleryItem = () => {
    props.form.gallery.push({
        id: '',
        title: '',
        image: '',
        previewImage: '',
    })
}

const removeGalleryItem = (index) => {
    props.form.gallery.splice(index, 1);
}


</script>

<template>
    <div class="mb-4">
        <Field
            id="gallery_text"
            type="text"
            v-model="props.form.gallery_text"
            :error="props.form.errors.gallery_text"
            label="Верхній текст галереї"
        />
    </div>
    <div class="grid-cols-2 gap-x-8 gap-y-14 grid">
        <div class="flex justify-center flex-col items-center relative"
             v-for="(item,index) in props.form.gallery">
            <div class="w-full">
                <div class="flex">
                    <div class="w-full">
                        <Field
                            :id="'gallery_title_'+index"
                            type="text"
                            v-model="props.form.gallery[index].title"
                            :error="props.form.errors['gallery.' + index + '.title']"
                            label="Заголовок елементу галереї"
                        />
                    </div>
                </div>
            </div>

            <div class="relative w-full min-h-[200px] mt-4">
                <label v-if="!props.form.gallery[index].video"
                       :class="['block text-gray-700 font-semibold mb-2', props.form.errors['gallery.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                    Зображення елементу галереї
                </label>
                <div class="flex" v-else>
                    <label
                           :class="['block text-gray-700 font-semibold mb-2', props.form.errors['gallery.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                        Відео
                    </label>
                    <label
                        :class="['block text-gray-700 font-semibold mb-2 ml-[46%]', props.form.errors['gallery.' + index + '.previewImage'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                        Зображення на початку відео
                    </label>
                </div>
                <div v-if="!props.form.gallery[index].video">
                    <div class="relative w-full h-[200px] overflow-hidden rounded-md border border-gray-300"
                         v-if="props.form.gallery[index].image">
                        <img
                            :src="props.form.gallery[index].image.length<=100 && props.form.gallery[index].image!=='/storage/no_image.webp' ? '/storage/main/'+props.form.gallery[index].image : props.form.gallery[index].image"
                            alt="Невдалось завантажити. Спробуйте оновити сторінку"
                            class="object-cover h-full w-full cursor-pointer"
                            @click="triggerGalleryFileInput(index)"
                        />
                        <button
                            class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                            @click="deleteGalleryItemImage(index)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a2 2 0 00-2 2v1h8V5a2 2 0 00-2-2m-4 0h4"/>
                            </svg>
                        </button>
                    </div>
                    <div v-else>
                        <button
                            type="button"
                            class="flex justify-center items-center w-full h-full bg-gray-200 rounded-md cursor-pointer"
                            @click="triggerGalleryFileInput(index)">
                            <i class="fa fa-plus text-xl text-gray-600"></i>
                        </button>
                    </div>
                </div>
                <div class="grid-cols-2 gap-4 grid  rounded-md" v-else>
                    <div v-if="props.form.gallery[index].image"
                         class="relative w-full h-[200px] overflow-hidden rounded-md border border-gray-300">
                        <video controls class="object-cover w-full h-full cursor-pointer"
                               @click="triggerGalleryFileInput(index)">
                            <source :src="'/storage/main/'+props.form.gallery[index].image" type="video/mp4">
                        </video>
                        <button
                            class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                            @click="deleteGalleryItemImage(index)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a2 2 0 00-2 2v1h8V5a2 2 0 00-2-2m-4 0h4"/>
                            </svg>
                        </button>
                    </div>
                    <div v-else class="relative w-full h-[200px] overflow-hidden rounded-md border border-gray-300">
                        <button
                            type="button"
                            class="flex justify-center items-center w-full h-full bg-gray-200 rounded-md cursor-pointer"
                            @click="triggerGalleryFileInput(index)">
                            <i class="fa fa-plus text-xl text-gray-600"></i>
                        </button>
                    </div>
                    <div v-if="props.form.gallery[index].previewImage"
                         class="relative w-full h-[200px] overflow-hidden rounded-md border border-gray-300">

                        <img
                            :src="props.form.gallery[index].previewImage.length<=100 && props.form.gallery[index].previewImage!=='/storage/no_image.webp' ? '/storage/main/'+props.form.gallery[index].previewImage : props.form.gallery[index].previewImage"
                            alt="Невдалось завантажити. Спробуйте оновити сторінку"
                            class="object-cover h-full w-full cursor-pointer"
                            @click="triggerGalleryFileInput(index)"
                        />
                        <button
                            class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                            @click="deleteGalleryItemPreviewImage(index)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a2 2 0 00-2 2v1h8V5a2 2 0 00-2-2m-4 0h4"/>
                            </svg>
                        </button>
                    </div>
                    <div v-else class="relative w-full h-[200px] overflow-hidden rounded-md border border-gray-300">
                        <button
                            type="button"
                            class="flex justify-center items-center w-full h-full bg-gray-200 rounded-md cursor-pointer"
                            @click="triggerGalleryPreviewFileInput(index)">
                            <i class="fa fa-plus text-xl text-gray-600"></i>
                        </button>
                    </div>
                </div>
                <div v-if="props.form.errors['gallery.' + index + '.image']" class="mt-2 text-sm text-red-600">
                    {{ props.form.errors['gallery.' + index + '.image'] }}
                </div>
                <div v-if="props.form.errors['gallery.' + index + '.previewImage']" class="mt-2 text-sm text-red-600">
                    {{ props.form.errors['gallery.' + index + '.previewImage'] }}
                </div>
                <input
                    :id="`GalleryImageFileInput${index}`"
                    type="file"
                    class="hidden"
                    @change="(event) => handleGalleryImageUpdate(event,index)"
                    accept="video/*,image/*"
                />
                <input
                    :id="`GalleryPreviewImageFileInput${index}`"
                    type="file"
                    class="hidden"
                    @change="(event) => handleGalleryPreviewImageUpdate(event,index)"
                    accept="image/*"
                />
            </div>
            <div class="text-red-500 cursor-pointer absolute right-1 top-0"
                 @click="removeGalleryItem(index)">
                X
            </div>
        </div>
        <div @click="addGalleryItem()">
            <i class="fa fa-plus text-xl text-gray-600"></i>
        </div>
    </div>
</template>

<style scoped>

</style>
