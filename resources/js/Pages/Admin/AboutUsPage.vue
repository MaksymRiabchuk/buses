<script setup>
import {useToast} from 'vue-toastification';
import {Head, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import Button from "../../Components/AdminComponents/Button.vue";
import Field from "../../Components/AdminComponents/Field.vue";
import {useCrudCreate} from '../../Components/Composables/useCrudCreate.js';
import Layout from "../../Layouts/AdminLayout.vue";

defineOptions({layout: Layout});
const itemName = 'about_us';
onMounted(() => {
    if (props.item) {
        form.first_main_image = props.item.first_main_image;
        form.first_main_text = props.item.first_main_text;

        form.reasons_main_text = props.item.reasons_main_text;
        form.reason_title_1 = props.item.reason_title_1;
        form.reason_title_2 = props.item.reason_title_2;
        form.reason_title_3 = props.item.reason_title_3;
        form.reason_text_1 = props.item.reason_text_1;
        form.reason_text_2 = props.item.reason_text_2;
        form.reason_text_3 = props.item.reason_text_3;

        form.reviews_side_image = props.item.reviews_side_image;

        form.our_history_text = props.item.our_history_text;
        form.our_history_image = props.item.our_history_image;
        form.our_history_title_mark_1 = props.item.our_history_title_mark_1;
        form.our_history_title_mark_2 = props.item.our_history_title_mark_2;
        form.our_history_title_mark_3 = props.item.our_history_title_mark_3;
        form.our_history_title_mark_4 = props.item.our_history_title_mark_4;
        form.our_history_title_mark_5 = props.item.our_history_title_mark_5;

        if (props.item.employees) {
            form.employees = props.item.employees;
        } else {
            form.employees = [];
        }
        if (props.item.reviews) {
            form.reviews = props.item.reviews;
        } else {
            form.reviews = [];
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
    employees: "",
    first_main_image: "",
    first_main_text: "",
    reasons_main_text: "",
    reason_title_1: "",
    reason_title_2: "",
    reason_title_3: "",
    reason_text_1: "",
    reason_text_2: "",
    reason_text_3: "",
    about_us_item_text_1: "",
    about_us_item_text_2: "",
    about_us_item_text_3: "",

    reviews_side_image: "",
    reviews: "",

    our_history_text: "",
    our_history_image: "",
    our_history_title_mark_1: "",
    our_history_title_mark_2: "",
    our_history_title_mark_3: "",
    our_history_title_mark_4: "",
    our_history_title_mark_5: "",
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
        if (attribute === 'our_history_image') {
            form.our_history_image = e.target.result;
        }
        if (attribute === 'reviews_side_image') {
            form.reviews_side_image = e.target.result;
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
    if (attribute === 'our_history_image') {
        form.our_history_image = '';
    }
    if (attribute === 'reviews_side_image') {
        form.reviews_side_image = '';
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


const addReview = () => {
    form.reviews.push({
        id: '',
        title: '',
        text: '',
        image: '',
    })
}

const removeReview = (index) => {
    form.reviews.splice(index, 1);
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
                'text-red-600':form.errors.first_main_image||form.errors.first_main_text}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Головний"
                </a>
                <a @click="currentMainTab = 'reasons'"
                   :class="{ active: currentMainTab==='reasons','text-red-600':form.errors.reason_title_1||form.errors.reason_title_2
                ||form.errors.reason_title_3||form.errors.reason_text_1||form.errors.reason_text_3}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Чому варто вибирати нас?"
                </a>
                <a @click="currentMainTab = 'reviews'" :class="{ active: currentMainTab==='reviews',
                'text-red-600':form.errors.reviews}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Відгуки клієнтів"
                </a>
                <a @click="currentMainTab = 'history'"
                   :class="{ active: currentMainTab==='history','text-red-600':form.errors.our_history_text||form.errors.our_history_image||
                form.errors.our_history_title_mark_1||form.errors.our_history_title_mark_2||form.errors.our_history_title_mark_3||
                form.errors.our_history_title_mark_4||form.errors.our_history_title_mark_5}"
                   class="tab-button border-1 border-gray-400 shadow p-2 text-lg hover:text-gray-600 rounded cursor-pointer">
                    Блок "Історія"
                </a>
                <a @click="currentMainTab = 'teams'"
                   :class="{ active: currentMainTab==='teams','text-red-600':form.errors.employees}"
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
                                    :src="form.first_main_image.length<=100 && form.first_main_image!=='/storage/no_image.webp'?'/storage/about_us/'+form.first_main_image:form.first_main_image"
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
            <div v-if="currentMainTab==='reasons'" style="max-height: 68vh; overflow-y: auto;">
                <div class="grid-cols-4 gap-4 grid">
                    <div class="space-y-4">
                        <Field
                            id="reasons_main_text"
                            type="textarea"
                            :rows="10"
                            v-model="form.reasons_main_text"
                            :error="form.errors.reasons_main_text"
                            label="Головний текст"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="reason_title_1"
                            type="text"
                            v-model="form.reason_title_1"
                            :error="form.errors.reason_title_1"
                            label="Заголовок 1 елементу"
                        />
                        <Field
                            id="reason_text_1"
                            type="textarea"
                            v-model="form.reason_text_1"
                            :error="form.errors.reason_text_1"
                            label="Текст 1 елементу"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="reason_title_2"
                            type="text"
                            v-model="form.reason_title_2"
                            :error="form.errors.reason_title_2"
                            label="Заголовок 2 елементу"
                        />
                        <Field
                            id="reason_text_2"
                            type="textarea"
                            v-model="form.reason_text_2"
                            :error="form.errors.reason_text_2"
                            label="Текст 2 елементу"
                        />
                    </div>
                    <div class="space-y-4">
                        <Field
                            id="reason_title_3"
                            type="text"
                            v-model="form.reason_title_3"
                            :error="form.errors.reason_title_3"
                            label="Заголовок 3 елементу"
                        />
                        <Field
                            id="reason_text_3"
                            type="textarea"
                            v-model="form.reason_text_3"
                            :error="form.errors.reason_text_3"
                            label="Текст 3 елементу"
                        />
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='reviews'">
                <div class="flex">
                    <div style="width: 20%">
                        <div class="relative max-w-[250px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.reviews_side_image ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.reviews_side_image">
                                <img
                                    :src="form.reviews_side_image.length<=100 && form.reviews_side_image!=='/storage/no_image.webp'?'/storage/about_us/'+form.reviews_side_image:form.reviews_side_image"
                                    alt="First main image"
                                    class="object-cover  w-full cursor-pointer"
                                    @click="triggerFileInput('ReviewsImageFileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('reviews_side_image')">
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
                                    class="flex justify-center items-center w-full h-[250px] bg-gray-200 rounded-md cursor-pointer"
                                    @click="triggerFileInput('ReviewsImageFileInput')"
                                >
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.reviews_side_image" class="mt-2 text-sm text-red-600">
                                {{ form.errors.reviews_side_image }}
                            </div>
                            <input
                                :id="`ReviewsImageFileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'reviews_side_image')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div class="grid-cols-4 gap-3 grid mt-4 w-full">
                        <div class="flex relative" v-for="(item,index) in form.reviews">
                            <div class="flex-col w-full">
                                <Field
                                    :id="'reviews_item_full_name_'+index"
                                    type="text"
                                    class="w-full"
                                    v-model="form.reviews[index].full_name"
                                    :error="form.errors['faqs.' + index + '.full_name']"
                                    :label="'Повне імʼя'"
                                />
                                <Field
                                    :id="'reviews_item_text_'+index"
                                    type="textarea"
                                    :rows="3"
                                    v-model="form.reviews[index].text"
                                    :error="form.errors['faqs.' + index + '.text']"
                                    :label="'Текст відгуку'"
                                />
                            </div>
                            <div class="text-red-500 cursor-pointer absolute right-1 top-0"
                                 @click="removeReview(index)">
                                X
                            </div>
                        </div>
                        <div @click="addReview()">
                            <i class="fa fa-plus text-xl text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="currentMainTab==='history'" style="max-height: 68vh; overflow-y: auto;">
                <div class="flex">
                    <div style="width: 20%">
                        <div class="relative max-w-[250px]">
                            <label
                                :class="['block text-gray-700 font-semibold mb-2', form.errors.our_history_image ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                                Зображення
                            </label>
                            <div class="w-full overflow-hidden rounded-md border border-gray-300"
                                 v-if="form.our_history_image">
                                <img
                                    :src="form.our_history_image.length<=100 && form.our_history_image!=='/storage/no_image.webp'?'/storage/about_us/'+form.our_history_image:form.our_history_image"
                                    alt="Our History Image"
                                    class="object-cover  w-full cursor-pointer"
                                    @click="triggerFileInput('OurHistoryImageFileInput')"
                                />
                                <button
                                    class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-600"
                                    @click="deleteImage('our_history_image')">
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
                                    class="flex justify-center items-center w-full h-[87%] bg-gray-200 rounded-md cursor-pointer"
                                    @click="triggerFileInput('OurHistoryImageFileInput')"
                                >
                                    <i class="fa fa-plus text-xl text-gray-600"></i>
                                </button>
                            </div>
                            <div v-if="form.errors.our_history_image" class="mt-2 text-sm text-red-600">
                                {{ form.errors.our_history_image }}
                            </div>
                            <input
                                :id="`OurHistoryImageFileInput`"
                                type="file"
                                class="hidden"
                                @change="(event) => handleImageUpdate(event,'our_history_image')"
                                accept="image/*"
                            />
                        </div>
                    </div>
                    <div style="width: 80%">
                        <div>
                            <Field
                                id="our_history_text"
                                type="textarea"
                                v-model="form.our_history_text"
                                :error="form.errors.our_history_text"
                                label="Наша історія "
                            />
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 grid-cols-5 mt-4">
                    <div>
                        <Field
                            id="our_history_title_mark_1"
                            type="text"
                            v-model="form.our_history_title_mark_1"
                            :error="form.errors.our_history_title_mark_1"
                            label="Факт 1"
                        />
                    </div>
                    <div>
                        <Field
                            id="our_history_title_mark_2"
                            type="text"
                            v-model="form.our_history_title_mark_2"
                            :error="form.errors.our_history_title_mark_2"
                            label="Факт 2"
                        />
                    </div>
                    <div>
                        <Field
                            id="our_history_title_mark_3"
                            type="text"
                            v-model="form.our_history_title_mark_3"
                            :error="form.errors.our_history_title_mark_3"
                            label="Факт 3"
                        />
                    </div>
                    <div>
                        <Field
                            id="our_history_title_mark_4"
                            type="text"
                            v-model="form.our_history_title_mark_4"
                            :error="form.errors.our_history_title_mark_4"
                            label="Факт 4"
                        />
                    </div>
                    <div>
                        <Field
                            id="our_history_title_mark_5"
                            type="text"
                            v-model="form.our_history_title_mark_5"
                            :error="form.errors.our_history_title_mark_5"
                            label="Факт 5"
                        />
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
