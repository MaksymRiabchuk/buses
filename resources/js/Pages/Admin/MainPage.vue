<script setup>
import {useToast} from 'vue-toastification';
import {Head, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import Button from "../../Components/AdminComponents/Button.vue";
import Field from "../../Components/AdminComponents/Field.vue";
import {useCrudCreate} from '../../Components/Composables/useCrudCreate.js';
import Layout from "../../Layouts/AdminLayout.vue";
import Checkbox from "../../Components/AdminComponents/Checkbox.vue";
import Label from "../../Components/AdminComponents/Label.vue";
import ServicesComponent from "./MainPageSubComponents/ServicesComponent.vue";
import AboutUsComponent from "./MainPageSubComponents/AboutUsComponent.vue";
import FaqsComponent from "./MainPageSubComponents/FaqsComponent.vue";
import TeamsComponent from "./MainPageSubComponents/TeamsComponent.vue";
import MainComponent from "./MainPageSubComponents/MainComponent.vue";
import GalleryComponent from "./MainPageSubComponents/GalleryComponent.vue";

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
let form = useForm({
    sliders: "",
    gallery: "",
    faqs: "",
    employees: "",
    first_main_image: "",
    first_main_image_file: "",
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

const {title, add, update} = useCrudCreate(form, props, itemName);
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
const updateForm = (newForm) => {
    form = newForm;
}

const submit = () => {
    if (props.item) {
        form.post(`/admin/${itemName}/${props.item.id}`);
    }
};

</script>

<template>
    <Head :title="title"/>

    <template>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight capitalize">{{ title }}</h2>
        </div>
    </template>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form @submit.prevent="submit" class="mt-6 space-y-6" enctype="multipart/form-data">
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
                <MainComponent @formChanged="updateForm" :form="form"></MainComponent>
            </div>
            <div v-if="currentMainTab==='services'" style="max-height: 68vh; overflow-y: auto;"
                 class="grid-cols-3 gap-x-8 gap-y-16 grid">
                <ServicesComponent :form="form" @formChanged="updateForm"></ServicesComponent>
            </div>
            <div v-if="currentMainTab==='about_us'" style="max-height: 68vh; overflow-y: auto;">
                <AboutUsComponent :form="form" @formChanged="updateForm"></AboutUsComponent>
            </div>
            <div v-if="currentMainTab==='areas_of_expertise'" style="max-height: 68vh; overflow-y: auto;">
                <GalleryComponent :form="form" @formChanged="updateForm"></GalleryComponent>
            </div>
            <div v-if="currentMainTab==='faqs'" style="">
                <FaqsComponent :form="form" @formChanged="updateForm"></FaqsComponent>
            </div>
            <div v-if="currentMainTab==='teams'" style="max-height: 68vh; overflow-y: auto;">
                <TeamsComponent :form="form" @formChanged="updateForm"></TeamsComponent>
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
