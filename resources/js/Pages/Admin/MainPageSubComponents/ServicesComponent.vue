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


const handleSliderImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        props.form.sliders[index].image = e.target.result;
    };
    reader.readAsDataURL(file);
    props.form.sliders[index].imageFile = file;
};

const triggerSliderFileInput = (index) => {
    document.getElementById(`SliderImageFileInput${index}`).click();
};

const deleteSliderImage = (index) => {
    props.form.sliders[index].image = '';
};


const addSlider = () => {
    props.form.sliders.push({
        id: '',
        title: '',
        text: '',
        image: '',
    })
}

const removeSlider = (index) => {
    props.form.sliders.splice(index, 1);
}

</script>

<template>
    <div class="flex justify-center flex-col items-center relative" v-for="(slider,index) in props.form.sliders">
        <div class="w-full">
            <div>
                <Field
                    :id="'slider_title_'+index"
                    type="text"
                    v-model="props.form.sliders[index].title"
                    :error="props.form.errors['sliders.' + index + '.title']"
                    label="Заголовок елементу слайдера"
                />
            </div>
            <div>
                <Field
                    :id="'slider_text_'+index"
                    type="textarea"
                    v-model="props.form.sliders[index].text"
                    :error="props.form.errors['sliders.' + index + '.text']"
                    label="Текст елементу"
                />
            </div>
        </div>
        <div class="relative w-full h-[200px]">
            <label
                :class="['block text-gray-700 font-semibold mb-2', props.form.errors['sliders.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                Зображення елементу
            </label>
            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                 v-if="props.form.sliders[index].image">
                <img
                    :src="props.form.sliders[index].image.length<=100 && props.form.sliders[index].image!=='/storage/no_image.webp'?'/storage/main/'+props.form.sliders[index].image:props.form.sliders[index].image"
                    alt="Зображення першого елементу"
                    class="object-cover h-full w-full cursor-pointer"
                    @click="triggerSliderFileInput(index)"
                />
                <button
                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                    @click="deleteSliderImage(index)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a2 2 0 00-2 2v1h8V5a2 2 0 00-2-2m-4 0h4"/>
                    </svg>
                </button>
            </div>
            <div class="w-full h-full overflow-hidden rounded-md border border-gray-300" v-else>
                <button
                    type="button"
                    class="flex justify-center items-center w-full h-full bg-gray-200 rounded-md cursor-pointer"
                    @click="triggerSliderFileInput(index)">
                    <i class="fa fa-plus text-xl text-gray-600"></i>
                </button>
            </div>
            <div v-if="props.form.errors['sliders.' + index + '.image']" class="mt-2 text-sm text-red-600">
                {{ props.form.errors['sliders.' + index + '.image'] }}
            </div>
            <input
                :id="`SliderImageFileInput${index}`"
                type="file"
                class="hidden"
                @change="(event) => handleSliderImageUpdate(event,index)"
                accept="image/*"
            />
        </div>
        <div class="text-red-500 cursor-pointer absolute right-1 top-0" @click="removeSlider(index)">
            X
        </div>
    </div>
    <div @click="addSlider()">
        <i class="fa fa-plus text-xl text-gray-600"></i>
    </div>
</template>

<style scoped>

</style>
