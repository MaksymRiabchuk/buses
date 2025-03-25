<script setup>
import {useToast} from 'vue-toastification';
import {Head, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import Button from "../../Components/AdminComponents/Button.vue";
import Field from "../../Components/AdminComponents/Field.vue";
import {useCrudCreate} from '../../Components/Composables/useCrudCreate.js';
import Layout from "../../Layouts/AdminLayout.vue";

defineOptions({layout: Layout});
const itemName = 'main_page';
onMounted(() => {
    if (props.item) {
        form.first_main_image = props.item.first_main_image;
        form.first_main_title = props.item.first_main_title;
        form.first_main_text = props.item.first_main_text;
        form.first_main_btn_text = props.item.first_main_btn_text;

        form.slider_title_1 = props.item.slider_title_1;
        form.slider_title_2 = props.item.slider_title_2;
        form.slider_title_3 = props.item.slider_title_3;
        form.slider_title_4 = props.item.slider_title_4;
        form.slider_title_5 = props.item.slider_title_5;
        form.slider_title_6 = props.item.slider_title_6;
        form.slider_text_1 = props.item.slider_text_1;
        form.slider_text_2 = props.item.slider_text_2;
        form.slider_text_3 = props.item.slider_text_3;
        form.slider_text_4 = props.item.slider_text_4;
        form.slider_text_5 = props.item.slider_text_5;
        form.slider_text_6 = props.item.slider_text_6;
        form.slider_img_1 = props.item.slider_img_1;
        form.slider_img_2 = props.item.slider_img_2;
        form.slider_img_3 = props.item.slider_img_3;
        form.slider_img_4 = props.item.slider_img_4;
        form.slider_img_5 = props.item.slider_img_5;
        form.slider_img_6 = props.item.slider_img_6;

        form.about_us_text = props.item.about_us_text;
        form.about_us_item_title_1 = props.item.about_us_item_title_1;
        form.about_us_item_title_2 = props.item.about_us_item_title_2;
        form.about_us_item_title_3 = props.item.about_us_item_title_3;
        form.about_us_item_text_1 = props.item.about_us_item_text_1;
        form.about_us_item_text_2 = props.item.about_us_item_text_2;
        form.about_us_item_text_3 = props.item.about_us_item_text_3;

        form.gallery_text = props.item.gallery_text;
        form.gallery_item_image_1 = props.item.gallery_item_image_1;
        form.gallery_item_image_2 = props.item.gallery_item_image_2;
        form.gallery_item_image_3 = props.item.gallery_item_image_3;
        form.gallery_item_image_4 = props.item.gallery_item_image_4;
        form.gallery_item_image_5 = props.item.gallery_item_image_5;
        form.gallery_item_image_6 = props.item.gallery_item_image_6;

        form.gallery_item_title_1 = props.item.gallery_item_title_1;
        form.gallery_item_title_2 = props.item.gallery_item_title_2;
        form.gallery_item_title_3 = props.item.gallery_item_title_3;
        form.gallery_item_title_4 = props.item.gallery_item_title_4;
        form.gallery_item_title_5 = props.item.gallery_item_title_5;
        form.gallery_item_title_6 = props.item.gallery_item_title_6;

        form.faqs_text = props.item.faqs_text;
        form.faqs_item_question_1 = props.item.faqs_item_question_1;
        form.faqs_item_question_2 = props.item.faqs_item_question_2;
        form.faqs_item_question_3 = props.item.faqs_item_question_3;
        form.faqs_item_answer_1 = props.item.faqs_item_answer_1;
        form.faqs_item_answer_2 = props.item.faqs_item_answer_2;
        form.faqs_item_answer_3 = props.item.faqs_item_answer_3;

        form.team_member_name_1 = props.item.team_member_name_1;
        form.team_member_name_2 = props.item.team_member_name_2;
        form.team_member_name_3 = props.item.team_member_name_3;
        form.team_member_name_4 = props.item.team_member_name_4;
        form.team_member_name_5 = props.item.team_member_name_5;
        form.team_member_name_6 = props.item.team_member_name_6;
        form.team_member_position_1 = props.item.team_member_position_1;
        form.team_member_position_2 = props.item.team_member_position_2;
        form.team_member_position_3 = props.item.team_member_position_3;
        form.team_member_position_4 = props.item.team_member_position_4;
        form.team_member_position_5 = props.item.team_member_position_5;
        form.team_member_position_6 = props.item.team_member_position_6;
        form.team_member_image_1 = props.item.team_member_image_1;
        form.team_member_image_2 = props.item.team_member_image_2;
        form.team_member_image_3 = props.item.team_member_image_3;
        form.team_member_image_4 = props.item.team_member_image_4;
        form.team_member_image_5 = props.item.team_member_image_5;
        form.team_member_image_6 = props.item.team_member_image_6;
    }

    if (successMessage.value) {
        toast.success(successMessage.value);
        showMessage.value = true;
        setTimeout(() => {
            showMessage.value = false;
        }, 3000);
    }
});
const form = useForm({
    first_main_image: "",
    first_main_title: "",
    first_main_text: "",
    first_main_btn_text: "",

    slider_title_1: "",
    slider_title_2: "",
    slider_title_3: "",
    slider_title_4: "",
    slider_title_5: "",
    slider_title_6: "",
    slider_text_1: "",
    slider_text_2: "",
    slider_text_3: "",
    slider_text_4: "",
    slider_text_5: "",
    slider_text_6: "",
    slider_img_1: "",
    slider_img_2: "",
    slider_img_3: "",
    slider_img_4: "",
    slider_img_5: "",
    slider_img_6: "",

    about_us_text: "",
    about_us_item_title_1: "",
    about_us_item_title_2: "",
    about_us_item_title_3: "",
    about_us_item_text_1: "",
    about_us_item_text_2: "",
    about_us_item_text_3: "",

    gallery_text: "",
    gallery_item_image_1: "",
    gallery_item_image_2: "",
    gallery_item_image_3: "",
    gallery_item_image_4: "",
    gallery_item_image_5: "",
    gallery_item_image_6: "",
    gallery_item_title_1: "",
    gallery_item_title_2: "",
    gallery_item_title_3: "",
    gallery_item_title_4: "",
    gallery_item_title_5: "",
    gallery_item_title_6: "",

    faqs_text: " ",
    faqs_item_question_1: " ",
    faqs_item_question_2: " ",
    faqs_item_question_3: " ",
    faqs_item_answer_1: " ",
    faqs_item_answer_2: " ",
    faqs_item_answer_3: " ",

    team_member_name_1: " ",
    team_member_name_2: " ",
    team_member_name_3: " ",
    team_member_name_4: " ",
    team_member_name_5: " ",
    team_member_name_6: " ",
    team_member_position_1: " ",
    team_member_position_2: " ",
    team_member_position_3: " ",
    team_member_position_4: " ",
    team_member_position_5: " ",
    team_member_position_6: " ",
    team_member_image_1: " ",
    team_member_image_2: " ",
    team_member_image_3: " ",
    team_member_image_4: " ",
    team_member_image_5: " ",
    team_member_image_6: " ",

});

const props = defineProps({
    item: {
        type: Object,
        default: null,
    },
    isUpdating: {
        type: Boolean,
        default: false,
    },
});


const handleImageUpdate = (event, attribute) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        if (attribute === 'first_main_image') {
            form.first_main_image = e.target.result;
        }
        if (attribute === 'slider_img_1') {
            form.slider_img_1 = e.target.result;
        }
        if (attribute === 'slider_img_2') {
            form.slider_img_2 = e.target.result;
        }
        if (attribute === 'slider_img_3') {
            form.slider_img_3 = e.target.result;
        }
        if (attribute === 'slider_img_4') {
            form.slider_img_4 = e.target.result;
        }
        if (attribute === 'slider_img_5') {
            form.slider_img_5 = e.target.result;
        }
        if (attribute === 'slider_img_6') {
            form.slider_img_6 = e.target.result;
        }
        if (attribute === 'gallery_item_image_1') {
            form.gallery_item_image_1 = e.target.result;
        }
        if (attribute === 'gallery_item_image_2') {
            form.gallery_item_image_2 = e.target.result;
        }
        if (attribute === 'gallery_item_image_3') {
            form.gallery_item_image_3 = e.target.result;
        }
        if (attribute === 'gallery_item_image_4') {
            form.gallery_item_image_4 = e.target.result;
        }
        if (attribute === 'gallery_item_image_5') {
            form.gallery_item_image_5 = e.target.result;
        }
        if (attribute === 'gallery_item_image_6') {
            form.gallery_item_image_6 = e.target.result;
        }

        if (attribute === 'team_member_image_1') {
            form.team_member_image_1 = e.target.result;
        }
        if (attribute === 'team_member_image_2') {
            form.team_member_image_2 = e.target.result;
        }
        if (attribute === 'team_member_image_3') {
            form.team_member_image_3 = e.target.result;
        }
        if (attribute === 'team_member_image_4') {
            form.team_member_image_4 = e.target.result;
        }
        if (attribute === 'team_member_image_5') {
            form.team_member_image_5 = e.target.result;
        }
        if (attribute === 'team_member_image_6') {
            form.team_member_image_6 = e.target.result;
        }

    };
    reader.readAsDataURL(file);
};

const triggerFileInput = (elementId) => {
    document.getElementById(elementId).click();
};

const deleteImage = (attribute) => {
    if (attribute === 'first_main_image') {
        form.first_main_image = '';
    }
    if (attribute === 'slider_img_1') {
        form.slider_img_1 = '';
    }
    if (attribute === 'slider_img_2') {
        form.slider_img_2 = '';
    }
    if (attribute === 'slider_img_3') {
        form.slider_img_3 = '';
    }
    if (attribute === 'slider_img_4') {
        form.slider_img_4 = '';
    }
    if (attribute === 'slider_img_5') {
        form.slider_img_5 = '';
    }
    if (attribute === 'slider_img_6') {
        form.slider_img_6 = '';
    }
    if (attribute === 'gallery_item_image_1') {
        form.gallery_item_image_1 = '';
    }
    if (attribute === 'gallery_item_image_2') {
        form.gallery_item_image_2 = '';
    }
    if (attribute === 'gallery_item_image_3') {
        form.gallery_item_image_3 = '';
    }
    if (attribute === 'gallery_item_image_4') {
        form.gallery_item_image_4 = '';
    }
    if (attribute === 'gallery_item_image_5') {
        form.gallery_item_image_5 = '';
    }
    if (attribute === 'gallery_item_image_6') {
        form.gallery_item_image_6 = '';
    }

    if (attribute === 'team_member_image_1') {
        form.team_member_image_1 = '';
    }
    if (attribute === 'team_member_image_2') {
        form.team_member_image_2 = '';
    }
    if (attribute === 'team_member_image_3') {
        form.team_member_image_3 = '';
    }
    if (attribute === 'team_member_image_4') {
        form.team_member_image_4 = '';
    }
    if (attribute === 'team_member_image_5') {
        form.team_member_image_5 = '';
    }
    if (attribute === 'team_member_image_6') {
        form.team_member_image_6 = '';
    }
};

const {title, submit, add, update} = useCrudCreate(form, props, itemName);
const toast = useToast();

const page = usePage();
const showMessage = ref(false);

const successMessage = computed(() => {
    return page.props.flash ? page.props.flash.success : null;
});

watch(
    () => form.errors, (newErrors) => {
        if (Object.keys(newErrors).length > 0) {
            toast.error('Виправіть помилки.');
        }
    },
);

watch(
    () => page.props.flash,
    (newVal) => {
        if (newVal && newVal.success) {
            showMessage.value = true;
            toast.success(newVal.success);
            setTimeout(() => {
                showMessage.value = false;
            }, 3000);
        }
    },
    {deep: true}
)
const currentMainTab = ref('main');
</script>

<template>
    <Head :title="title"/>

    <template>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight capitalize">{{ title }}</h2>
        </div>
    </template>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form @submit.prevent="submit" class="mt-6 space-y-6">
            <div class="tabs flex space-x-8 mb-4">
                <a @click="currentMainTab = 'main'" :class="{ active: currentMainTab==='main' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Головний"
                </a>
                <a @click="currentMainTab = 'services'" :class="{ active: currentMainTab==='services' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Що ми обслуговуємо"
                </a>
                <a @click="currentMainTab = 'about_us'" :class="{ active: currentMainTab==='about_us' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Про нас"
                </a>
                <a @click="currentMainTab = 'areas_of_expertise'"
                   :class="{ active: currentMainTab==='areas_of_expertise' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Сфери обслуговування"
                </a>
                <a @click="currentMainTab = 'faqs'" :class="{ active: currentMainTab==='faqs' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "ЧАПи"
                </a>
                <a @click="currentMainTab = 'teams'" :class="{ active: currentMainTab==='teams' }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Команда"
                </a>
            </div>
            <div v-if="currentMainTab==='main'" style="max-height: 68vh; overflow-y: auto;">
                <div class="flex">
                    <div style="width: 20%">
                        <div class="relative max-w-[250px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.first_main_image ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.first_main_image">
                                <img
                                    :src="form.first_main_image.length<=100 && form.first_main_image!=='/storage/no_image.webp'?'/storage/main/'+form.first_main_image:form.first_main_image"
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
                            <div v-if="form.errors.first_main_image" class="mt-2 text-sm text-red-600">
                                {{ form.errors.first_main_image }}
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
                                v-model="form.first_main_title"
                                :error="form.errors.first_main_title"
                                label="Головний заголовок"
                            />
                        </div>
                        <div>
                            <Field
                                id="first_main_btn_text"
                                type="text"
                                v-model="form.first_main_btn_text"
                                :error="form.errors.first_main_btn_text"
                                label="Текст кнопки"
                            />
                        </div>
                        <div>
                            <Field
                                id="first_main_text"
                                type="textarea"
                                v-model="form.first_main_text"
                                :error="form.errors.first_main_text"
                                label="Головний текст"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='services'" style="max-height: 68vh; overflow-y: auto;"
                 class="grid-cols-3 gap-x-8 gap-y-14 grid">
                <div class="flex justify-center flex-col items-center">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_1"
                                type="text"
                                v-model="form.slider_title_1"
                                :error="form.errors.slider_title_1"
                                label="Заголовок 1 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_1"
                                type="textarea"
                                v-model="form.slider_text_1"
                                :error="form.errors.slider_text_1"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_1 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_1">
                            <img
                                :src="form.slider_img_1.length<=100 && form.slider_img_1!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_1:form.slider_img_1"
                                alt="Зображення першого елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage1FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_1')">
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
                                @click="triggerFileInput('SliderImage1FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_1" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_1 }}
                        </div>
                        <input
                            :id="`SliderImage1FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_1')"
                            accept="image/*"
                        />
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_2"
                                type="text"
                                v-model="form.slider_title_2"
                                :error="form.errors.slider_title_2"
                                label="Заголовок 2 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_2"
                                type="textarea"
                                v-model="form.slider_text_2"
                                :error="form.errors.slider_text_2"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_2 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_2">
                            <img
                                :src="form.slider_img_2.length<=100 && form.slider_img_2!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_2:form.slider_img_2"
                                alt="Зображення другого елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage2FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_2')">
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
                                @click="triggerFileInput('SliderImage2FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_2" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_2 }}
                        </div>
                        <input
                            :id="`SliderImage2FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_2')"
                            accept="image/*"
                        />
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center ">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_3"
                                type="text"
                                v-model="form.slider_title_3"
                                :error="form.errors.slider_title_3"
                                label="Заголовок 3 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_3"
                                type="textarea"
                                v-model="form.slider_text_3"
                                :error="form.errors.slider_text_3"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_3 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_3">
                            <img
                                :src="form.slider_img_3.length<=100 && form.slider_img_3!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_3:form.slider_img_3"
                                alt="Зображення третього елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage3FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_3')">
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
                                @click="triggerFileInput('SliderImage3FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_3" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_3 }}
                        </div>
                        <input
                            :id="`SliderImage3FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_3')"
                            accept="image/*"
                        />
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_4"
                                type="text"
                                v-model="form.slider_title_4"
                                :error="form.errors.slider_title_4"
                                label="Заголовок 4 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_4"
                                type="textarea"
                                v-model="form.slider_text_4"
                                :error="form.errors.slider_text_4"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_4 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_4">
                            <img
                                :src="form.slider_img_4.length<=100 && form.slider_img_4!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_4:form.slider_img_4"
                                alt="Зображення 4 елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage4FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_4')">
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
                                @click="triggerFileInput('SliderImage4FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_4" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_4 }}
                        </div>
                        <input
                            :id="`SliderImage4FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_4')"
                            accept="image/*"
                        />
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_5"
                                type="text"
                                v-model="form.slider_title_5"
                                :error="form.errors.slider_title_5"
                                label="Заголовок 5 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_5"
                                type="textarea"
                                v-model="form.slider_text_5"
                                :error="form.errors.slider_text_5"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_5 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_5">
                            <img
                                :src="form.slider_img_5.length<=100 && form.slider_img_5!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_5:form.slider_img_5"
                                alt="Зображення пʼятого елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage5FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_5')">
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
                                @click="triggerFileInput('SliderImage5FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_5" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_5 }}
                        </div>
                        <input
                            :id="`SliderImage5FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_5')"
                            accept="image/*"
                        />
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center">
                    <div class="w-full">
                        <div>
                            <Field
                                id="slider_title_6"
                                type="text"
                                v-model="form.slider_title_6"
                                :error="form.errors.slider_title_6"
                                label="Заголовок 6 елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                id="slider_text_6"
                                type="textarea"
                                v-model="form.slider_text_6"
                                :error="form.errors.slider_text_6"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors.slider_img_6 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.slider_img_6">
                            <img
                                :src="form.slider_img_6.length<=100 && form.slider_img_6!=='/storage/no_image.webp'?'/storage/main/'+form.slider_img_6:form.slider_img_6"
                                alt="Зображення шостого елементу"
                                class="object-cover h-full w-full cursor-pointer"
                                @click="triggerFileInput('SliderImage6FileInput')"
                            />
                            <button
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                @click="deleteImage('slider_img_6')">
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
                                @click="triggerFileInput('SliderImage6FileInput')">
                                <i class="fa fa-plus text-xl text-gray-600"></i>
                            </button>
                        </div>
                        <div v-if="form.errors.slider_img_6" class="mt-2 text-sm text-red-600">
                            {{ form.errors.slider_img_6 }}
                        </div>
                        <input
                            :id="`SliderImage6FileInput`"
                            type="file"
                            class="hidden"
                            @change="(event) => handleImageUpdate(event,'slider_img_6')"
                            accept="image/*"
                        />
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='about_us'" style="max-height: 68vh; overflow-y: auto;">
                <div class="grid-cols-4 gap-4 grid">
                    <div class="space-y-4">
                        <Field
                            id="about_us_text"
                            type="textarea"
                            :rows="10"
                            v-model="form.about_us_text"
                            :error="form.errors.about_us_text"
                            label="Головний текст"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="about_us_item_title_1"
                            type="text"
                            v-model="form.about_us_item_title_1"
                            :error="form.errors.about_us_item_title_1"
                            label="Заголовок 1 елементу"
                        />
                        <Field
                            id="about_us_item_text_1"
                            type="textarea"
                            v-model="form.about_us_item_text_1"
                            :error="form.errors.about_us_item_text_1"
                            label="Текст 1 елементу"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="about_us_item_title_2"
                            type="text"
                            v-model="form.about_us_item_title_2"
                            :error="form.errors.about_us_item_title_2"
                            label="Заголовок 2 елементу"
                        />
                        <Field
                            id="about_us_item_text_2"
                            type="textarea"
                            v-model="form.about_us_item_text_2"
                            :error="form.errors.about_us_item_text_2"
                            label="Текст 2 елементу"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="about_us_item_title_3"
                            type="text"
                            v-model="form.about_us_item_title_3"
                            :error="form.errors.about_us_item_title_3"
                            label="Заголовок 3 елементу"
                        />
                        <Field
                            id="about_us_item_text_3"
                            type="textarea"
                            v-model="form.about_us_item_text_3"
                            :error="form.errors.about_us_item_text_3"
                            label="Текст 3 елементу"
                        />
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='areas_of_expertise'" style="max-height: 68vh; overflow-y: auto;">
                <div class="mb-4">
                    <Field
                        id="gallery_text"
                        type="text"
                        v-model="form.gallery_text"
                        :error="form.errors.gallery_text"
                        label="Верхній текст галереї"
                    />
                </div>
                <div class="grid-cols-3 gap-x-8 gap-y-14 grid">
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_1"
                                    type="text"
                                    v-model="form.gallery_item_title_1"
                                    :error="form.errors.gallery_item_title_1"
                                    label="Заголовок 1 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_1 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_1">
                                <img
                                    :src="form.gallery_item_image_1.length<=100 && form.gallery_item_image_1!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_1:form.gallery_item_image_1"
                                    alt="Зображення першого елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage1FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_1')">
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
                                    @click="triggerFileInput('GalleryImage1FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_1" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_1 }}
                            </div>
                            <input
                                :id="`GalleryImage1FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_1')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_2"
                                    type="text"
                                    v-model="form.gallery_item_title_2"
                                    :error="form.errors.gallery_item_title_2"
                                    label="Заголовок 2 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_2 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_2">
                                <img
                                    :src="form.gallery_item_image_2.length<=100 && form.gallery_item_image_2!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_2:form.gallery_item_image_2"
                                    alt="Зображення другого елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage2FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_2')">
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
                                    @click="triggerFileInput('GalleryImage2FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_2" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_2 }}
                            </div>
                            <input
                                :id="`GalleryImage2FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_2')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_3"
                                    type="text"
                                    v-model="form.gallery_item_title_3"
                                    :error="form.errors.gallery_item_title_3"
                                    label="Заголовок 3 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_3 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_3">
                                <img
                                    :src="form.gallery_item_image_3.length<=100 && form.gallery_item_image_3!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_3:form.gallery_item_image_3"
                                    alt="Зображення третього елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage3FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_3')">
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
                                    @click="triggerFileInput('GalleryImage3FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_3" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_3 }}
                            </div>
                            <input
                                :id="`GalleryImage3FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_3')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_4"
                                    type="text"
                                    v-model="form.gallery_item_title_4"
                                    :error="form.errors.gallery_item_title_4"
                                    label="Заголовок 4 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_4 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_4">
                                <img
                                    :src="form.gallery_item_image_4.length<=100 && form.gallery_item_image_4!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_4:form.gallery_item_image_4"
                                    alt="Зображення четвертого елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage4FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_4')">
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
                                    @click="triggerFileInput('GalleryImage4FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_4" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_4 }}
                            </div>
                            <input
                                :id="`GalleryImage4FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_4')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_5"
                                    type="text"
                                    v-model="form.gallery_item_title_5"
                                    :error="form.errors.gallery_item_title_5"
                                    label="Заголовок 5 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_5 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_5">
                                <img
                                    :src="form.gallery_item_image_5.length<=100 && form.gallery_item_image_5!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_5:form.gallery_item_image_5"
                                    alt="Зображення пʼятого елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage5FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_5')">
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
                                    @click="triggerFileInput('GalleryImage5FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_5" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_5 }}
                            </div>
                            <input
                                :id="`GalleryImage5FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_5')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="gallery_item_title_6"
                                    type="text"
                                    v-model="form.gallery_item_title_6"
                                    :error="form.errors.gallery_item_title_6"
                                    label="Заголовок 6 елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.gallery_item_image_6 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення елементу
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery_item_image_6">
                                <img
                                    :src="form.gallery_item_image_6.length<=100 && form.gallery_item_image_6!=='/storage/no_image.webp'?'/storage/main/'+form.gallery_item_image_6:form.gallery_item_image_6"
                                    alt="Зображення шостого елементу"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('GalleryImage6FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('gallery_item_image_6')">
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
                                    @click="triggerFileInput('GalleryImage6FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.gallery_item_image_6" class="mt-2 text-sm text-red-600">
                                {{ form.errors.gallery_item_image_6 }}
                            </div>
                            <input
                                :id="`GalleryImage6FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'gallery_item_image_6')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='faqs'" style="max-height: 68vh; overflow-y: auto;">
                <div class="flex">
                    <div style="width: 25%" class="mr-4">
                        <Field
                            id="faqs_text"
                            type="textarea"
                            :rows="9"
                            v-model="form.faqs_text"
                            :error="form.errors.faqs_text"
                            label="Верхній текст блоку"
                        />
                    </div>
                    <div style="width: 73%">
                        <div class="grid-cols-3 gap-3 grid">
                            <div>
                                <Field
                                    id="faqs_item_question_1"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_question_1"
                                    :error="form.errors.faqs_item_question_1"
                                    label="Запитання №1"
                                />
                            </div>
                            <div>
                                <Field
                                    id="faqs_item_question_2"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_question_2"
                                    :error="form.errors.faqs_item_question_2"
                                    label="Запитання №2"
                                />
                            </div>
                            <div>
                                <Field
                                    id="faqs_item_question_3"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_question_3"
                                    :error="form.errors.faqs_item_question_3"
                                    label="Запитання №3"
                                />
                            </div>
                            <div>
                                <Field
                                    id="faqs_item_answer_1"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_answer_1"
                                    :error="form.errors.faqs_item_answer_1"
                                    label="Відповідь №1"
                                />
                            </div>
                            <div>
                                <Field
                                    id="faqs_item_answer_2"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_answer_2"
                                    :error="form.errors.faqs_item_answer_2"
                                    label="Відповідь №2"
                                />
                            </div>
                            <div>
                                <Field
                                    id="faqs_item_answer_3"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.faqs_item_answer_3"
                                    :error="form.errors.faqs_item_answer_3"
                                    label="Відповідь №3"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='teams'" style="max-height: 68vh; overflow-y: auto;">
                <div class="grid-cols-3 gap-x-8 gap-y-14 grid">
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_1"
                                    type="text"
                                    v-model="form.team_member_name_1"
                                    :error="form.errors.team_member_name_1"
                                    label="Імʼя члена команди №1"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_1"
                                    type="text"
                                    v-model="form.team_member_position_1"
                                    :error="form.errors.team_member_position_1"
                                    label="Фах члена команди №1"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_1 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_1">
                                <img
                                    :src="form.team_member_image_1.length<=100 && form.team_member_image_1!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_1:form.team_member_image_1"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage1FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_1')">
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
                                    @click="triggerFileInput('TeamImage1FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_1" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_1 }}
                            </div>
                            <input
                                :id="`TeamImage1FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_1')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_2"
                                    type="text"
                                    v-model="form.team_member_name_2"
                                    :error="form.errors.team_member_name_2"
                                    label="Імʼя члена команди №2"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_2"
                                    type="text"
                                    v-model="form.team_member_position_2"
                                    :error="form.errors.team_member_position_2"
                                    label="Фах члена команди №2"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_2 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_2">
                                <img
                                    :src="form.team_member_image_2.length<=100 && form.team_member_image_2!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_2:form.team_member_image_2"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage2FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_2')">
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
                                    @click="triggerFileInput('TeamImage2FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_2" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_2 }}
                            </div>
                            <input
                                :id="`TeamImage2FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_2')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_3"
                                    type="text"
                                    v-model="form.team_member_name_3"
                                    :error="form.errors.team_member_name_3"
                                    label="Імʼя члена команди №3"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_3"
                                    type="text"
                                    v-model="form.team_member_position_3"
                                    :error="form.errors.team_member_position_3"
                                    label="Фах члена команди №3"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_3 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_3">
                                <img
                                    :src="form.team_member_image_3.length<=100 && form.team_member_image_3!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_3:form.team_member_image_3"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage3FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_3')">
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
                                    @click="triggerFileInput('TeamImage3FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_3" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_3 }}
                            </div>
                            <input
                                :id="`TeamImage3FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_3')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_4"
                                    type="text"
                                    v-model="form.team_member_name_4"
                                    :error="form.errors.team_member_name_4"
                                    label="Імʼя члена команди №4"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_4"
                                    type="text"
                                    v-model="form.team_member_position_4"
                                    :error="form.errors.team_member_position_4"
                                    label="Фах члена команди №4"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_4 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_4">
                                <img
                                    :src="form.team_member_image_4.length<=100 && form.team_member_image_4!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_4:form.team_member_image_4"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage4FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_4')">
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
                                    @click="triggerFileInput('TeamImage4FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_4" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_4 }}
                            </div>
                            <input
                                :id="`TeamImage4FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_4')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_5"
                                    type="text"
                                    v-model="form.team_member_name_5"
                                    :error="form.errors.team_member_name_5"
                                    label="Імʼя члена команди №5"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_5"
                                    type="text"
                                    v-model="form.team_member_position_5"
                                    :error="form.errors.team_member_position_5"
                                    label="Фах члена команди №5"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_5 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_5">
                                <img
                                    :src="form.team_member_image_5.length<=100 && form.team_member_image_5!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_5:form.team_member_image_5"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage5FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_5')">
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
                                    @click="triggerFileInput('TeamImage5FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_5" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_5 }}
                            </div>
                            <input
                                :id="`TeamImage5FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_5')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="flex justify-center flex-col items-center">
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_name_6"
                                    type="text"
                                    v-model="form.team_member_name_6"
                                    :error="form.errors.team_member_name_6"
                                    label="Імʼя члена команди №6"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <Field
                                    id="team_member_position_6"
                                    type="text"
                                    v-model="form.team_member_position_6"
                                    :error="form.errors.team_member_position_6"
                                    label="Фах члена команди №6"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.team_member_image_6 ? 'text-red-600' : 'text-gray-700 dark:text-gray-300']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.team_member_image_6">
                                <img
                                    :src="form.team_member_image_6.length<=100 && form.team_member_image_6!=='/storage/no_image.webp'?'/storage/main/'+form.team_member_image_6:form.team_member_image_6"
                                    alt="Зображення"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerFileInput('TeamImage6FileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('team_member_image_6')">
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
                                    @click="triggerFileInput('TeamImage6FileInput')">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.team_member_image_6" class="mt-2 text-sm text-red-600">
                                {{ form.errors.team_member_image_6 }}
                            </div>
                            <input
                                :id="`TeamImage6FileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'team_member_image_6')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <Button variant="primary" :type="'submit'">Зберегти</Button>
            </div>
        </form>
    </div>
</template>

<style scoped>
.active {
    font-weight: bold;
}
</style>
