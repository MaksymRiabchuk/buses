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

        form.about_us_text = props.item.about_us_text;
        form.about_us_item_title_1 = props.item.about_us_item_title_1;
        form.about_us_item_title_2 = props.item.about_us_item_title_2;
        form.about_us_item_title_3 = props.item.about_us_item_title_3;
        form.about_us_item_text_1 = props.item.about_us_item_text_1;
        form.about_us_item_text_2 = props.item.about_us_item_text_2;
        form.about_us_item_text_3 = props.item.about_us_item_text_3;

        form.gallery_text = props.item.gallery_text;


        form.faqs_text = props.item.faqs_text;

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

        if (props.item.sliders) {
            form.sliders = props.item.sliders;
        } else {
            form.sliders = [];
        }

        if (props.item.gallery) {
            form.gallery = props.item.gallery;
        } else {
            form.gallery = [];
        }

        if (props.item.faqs) {
            form.faqs = props.item.faqs;
        } else {
            form.faqs = [];
        }

        if (props.item.employees) {
            form.employees = props.item.employees;
        } else {
            form.employees = [];
        }
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
    sliders: "",
    gallery: "",
    faqs: "",
    employees: "",
    first_main_image: "",
    first_main_title: "",
    first_main_text: "",
    first_main_btn_text: "",
    about_us_text: "",
    about_us_item_title_1: "",
    about_us_item_title_2: "",
    about_us_item_title_3: "",
    about_us_item_text_1: "",
    about_us_item_text_2: "",
    about_us_item_text_3: "",
    gallery_text: "",
    faqs_text: "",
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

const handleSliderImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        form.sliders[index].image = e.target.result;
    };
    reader.readAsDataURL(file);
};

const triggerSliderFileInput = (index) => {
    document.getElementById(`SliderImageFileInput${index}`).click();
};

const deleteSliderImage = (index) => {
    form.sliders[index].image = '';
};


const addSlider = () => {
    form.sliders.push({
        id: '',
        title: '',
        text: '',
        image: '',
    })
}

const removeSlider = (index) => {
    form.sliders.splice(index, 1);
}


const handleGalleryImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        form.gallery[index].image = e.target.result;
    };
    reader.readAsDataURL(file);
};

const triggerGalleryFileInput = (index) => {
    document.getElementById(`GalleryImageFileInput${index}`).click();
};

const deleteGalleryItemImage = (index) => {
    form.gallery[index].image = '';
};


const addGalleryItem = () => {
    form.gallery.push({
        id: '',
        title: '',
        image: '',
    })
}

const removeGalleryItem = (index) => {
    form.gallery.splice(index, 1);
}

const addFaqItem = () => {
    form.faqs.push({
        id: '',
        question: '',
        answer: '',
    })
}

const removeFaqItem = (index) => {
    form.faqs.splice(index, 1);
}

const handleEmployeeImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        form.employees[index].image = e.target.result;
    };
    reader.readAsDataURL(file);
};

const triggerEmployeeFileInput = (index) => {
    document.getElementById(`EmployeeImageFileInput${index}`).click();
};

const deleteEmployeeImage = (index) => {
    form.employees[index].image = '';
};


const addEmployee = () => {
    form.employees.push({
        id: '',
        full_name: '',
        position: '',
        image: '',
    })
}

const removeEmployee = (index) => {
    form.employees.splice(index, 1);
}
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
                <a @click="currentMainTab = 'main'" :class="{ active: currentMainTab==='main',
                'text-red-600':form.errors.first_main_title||form.errors.first_main_btn_text||
                form.errors.first_main_image||form.errors.first_main_text}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Головний"
                </a>
                <a @click="currentMainTab = 'services'"
                   :class="{ active: currentMainTab==='services','text-red-600':form.errors.sliders}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Що ми обслуговуємо"
                </a>
                <a @click="currentMainTab = 'about_us'" :class="{ active: currentMainTab==='about_us',
                'text-red-600':form.errors.about_us_text||form.errors.about_us_item_text_1||
                form.errors.about_us_item_text_2||form.errors.about_us_item_text_3||
                form.errors.about_us_item_title_1||form.errors.about_us_item_title_2||form.errors.about_us_item_title_3}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Про нас"
                </a>
                <a @click="currentMainTab = 'areas_of_expertise'"
                   :class="{ active: currentMainTab==='areas_of_expertise','text-red-600':form.errors.gallery||form.errors.gallery_text }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Галерея"
                </a>
                <a @click="currentMainTab = 'faqs'"
                   :class="{ active: currentMainTab==='faqs','text-red-600':form.errors.faqs||form.errors.faqs_text }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "ЧАПи"
                </a>
                <a @click="currentMainTab = 'teams'"
                   :class="{ active: currentMainTab==='teams','text-red-600':form.errors.employees }"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Команда"
                </a>
            </div>
            <div v-if="currentMainTab==='main'" style="max-height: 68vh; overflow-y: auto;">
                <div class="flex">
                    <div style="width: 20%">
                        <div class="relative max-w-[250px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.first_main_image ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
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
                 class="grid-cols-3 gap-x-8 gap-y-16 grid">
                <div class="flex justify-center flex-col items-center relative" v-for="(slider,index) in form.sliders">
                    <div class="w-full">
                        <div>
                            <Field
                                :id="'slider_title_'+index"
                                type="text"
                                v-model="form.sliders[index].title"
                                :error="form.errors['sliders.' + index + '.title']"
                                label="Заголовок елементу слайдера"
                            />
                        </div>
                        <div>
                            <Field
                                :id="'slider_text_'+index"
                                type="textarea"
                                v-model="form.sliders[index].text"
                                :error="form.errors['sliders.' + index + '.text']"
                                label="Текст елементу"
                            />
                        </div>
                    </div>
                    <div class="relative w-full h-[200px]">
                        <label
                            :class="['block text-gray-700 font-semibold mb-2', form.errors['sliders.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                            Зображення елементу
                        </label>
                        <div class="w-full overflow-hidden rounded-md border border-gray-300"
                             v-if="form.sliders[index].image">
                            <img
                                :src="form.sliders[index].image.length<=100 && form.sliders[index].image!=='/storage/no_image.webp'?'/storage/main/'+form.sliders[index].image:form.sliders[index].image"
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
                        <div v-if="form.errors['sliders.' + index + '.image']" class="mt-2 text-sm text-red-600">
                            {{ form.errors['sliders.' + index + '.image'] }}
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
                    <div class="flex justify-center flex-col items-center relative"
                         v-for="(item,index) in form.gallery">
                        <div class="w-full">
                            <div>
                                <Field
                                    :id="'gallery_title_'+index"
                                    type="text"
                                    v-model="form.gallery[index].title"
                                    :error="form.errors['gallery.' + index + '.title']"
                                    label="Заголовок елементу галереї"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors['gallery.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                                Зображення елементу галереї
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.gallery[index].image">
                                <img
                                    :src="form.gallery[index].image.length<=100 && form.gallery[index].image!=='/storage/no_image.webp' ? '/storage/main/'+form.gallery[index].image : form.gallery[index].image"
                                    alt="Зображення елементу галереї"
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
                            <div class="w-full h-full overflow-hidden rounded-md border border-gray-300" v-else>
                                <button
                                    type="button"
                                    class="flex justify-center items-center w-full h-full bg-gray-200 rounded-md cursor-pointer"
                                    @click="triggerGalleryFileInput(index)">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors['gallery.' + index + '.image']" class="mt-2 text-sm text-red-600">
                                {{ form.errors['gallery.' + index + '.image'] }}
                            </div>
                            <input
                                :id="`GalleryImageFileInput${index}`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleGalleryImageUpdate(event,index)"
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
            </div>
            <div v-if="currentMainTab==='faqs'" style="">
                <div class="flex-col">
                    <div>
                        <Field
                            id="faqs_text"
                            type="textarea"
                            :rows="4"
                            v-model="form.faqs_text"
                            :error="form.errors.faqs_text"
                            label="Верхній текст блоку"
                        />
                    </div>
                    <div class="grid-cols-3 gap-3 grid mt-4">
                        <div class="flex relative" v-for="(item,index) in form.faqs">
                            <div class="flex-col w-full">
                                <Field
                                    :id="'faqs_item_question_'+index"
                                    type="textarea"
                                    :rows="3"
                                    class="w-full"
                                    v-model="form.faqs[index].question"
                                    :error="form.errors['faqs.' + index + '.question']"
                                    :label="'Запитання №'+(index+1)"
                                />
                                <Field
                                    :id="'faqs_item_answer_'+index"
                                    type="textarea"
                                    :rows="4"
                                    v-model="form.faqs[index].answer"
                                    :error="form.errors['faqs.' + index + '.answer']"
                                    :label="'Відповідь №'+(index+1)"
                                />
                            </div>
                            <div class="text-red-500 cursor-pointer absolute right-1 top-0"
                                 @click="removeFaqItem(index)">
                                X
                            </div>
                        </div>
                        <div @click="addFaqItem()">
                            <i class="fa fa-plus text-xl text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='teams'" style="max-height: 68vh; overflow-y: auto;">
                <div class="grid-cols-3 gap-x-8 gap-y-14 grid">
                    <div class="flex justify-center flex-col items-center relative"
                         v-for="(employee,index) in form.employees">
                        <div class="w-full">
                            <div>
                                <Field
                                    :id="'employee_full_name_'+index"
                                    type="text"
                                    v-model="form.employees[index].full_name"
                                    :error="form.errors['employees.' + index + '.full_name']"
                                    label="Повне імʼя працівника"
                                />
                            </div>
                            <div>
                                <Field
                                    :id="'employee_position_'+index"
                                    type="text"
                                    v-model="form.employees[index].position"
                                    :error="form.errors['employees.' + index + '.position']"
                                    label="Фах працівника"
                                />
                            </div>
                        </div>
                        <div class="relative w-full h-[200px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors['employees.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                                Фото працівника
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.employees[index].image">
                                <img
                                    :src="form.employees[index].image.length<=100 && form.employees[index].image!=='/storage/no_image.webp'?'/storage/main/'+form.employees[index].image:form.employees[index].image"
                                    alt="Фото працівника"
                                    class="object-cover h-full w-full cursor-pointer"
                                    @click="triggerEmployeeFileInput(index)"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteEmployeeImage(index)">
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
                                    @click="triggerEmployeeFileInput(index)">
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors['employees.' + index + '.image']" class="mt-2 text-sm text-red-600">
                                {{ form.errors['employees.' + index + '.image'] }}
                            </div>
                            <input
                                :id="`EmployeeImageFileInput${index}`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleEmployeeImageUpdate(event,index)"
                                accept="image/*"
                            />
                        </div>
                        <div class="text-red-500 cursor-pointer absolute right-1 top-0" @click="removeEmployee(index)">
                            X
                        </div>
                    </div>
                    <div @click="addEmployee()">
                        <i class="fa fa-plus text-xl text-gray-600"></i>
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
