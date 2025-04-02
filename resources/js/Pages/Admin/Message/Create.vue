<script setup>
import {useToast} from 'vue-toastification';
import {Head, Link, useForm} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from 'vue';
import Button from "../../../Components/AdminComponents/Button.vue";
import Field from "../../../Components/AdminComponents/Field.vue";
import BackLink from "../../../Components/AdminComponents/BackLink.vue";
import {useCrudCreate} from '../../../Components/Composables/useCrudCreate.js';
import Layout from "../../../Layouts/AdminLayout.vue";
import 'vue-multiselect/dist/vue-multiselect.min.css';

defineOptions({layout: Layout});
const itemName = 'messages';

const toast = useToast();
const props = defineProps({
    errors: {
        type: Object,
    },
    item: {
        type: Object,
        default: null,
    },
    isUpdating: {
        type: Boolean,
        default: false,
    },
});


const form = useForm({
    id: "",
    name: "",
    email: "",
    phone: "",
    message: "",
});

onMounted(() => {
    if (props.item) {
        form.id = props.item.id;
        form.name = props.item.name;
        form.email = props.item.email;
        form.phone = props.item.phone;
        form.message = props.item.message;
    }
});


const {title, submit, add, update} = useCrudCreate(form, props, itemName);

watch(() => form.errors, (newErrors) => {
    if (Object.keys(newErrors).length > 0) {
        toast.error('Виправіть помилки.');
    }
});


</script>


<template>
    <Head :title="title"/>
    <template>
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight capitalize">{{ title }}</h2>
        </div>
    </template>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <Link :href="'/admin/messages'" class="text-indigo-600 hover:text-indigo-900 mb-4 inline-block">
            &lt; Повернутись
        </Link>
        <form @submit.prevent="submit" class="mt-6 space-y-6">
            <div class="space-y-4">
                <div class="flex w-full">
                    <Field id="name" type="text" v-model="form.name" :error="form.errors.name"
                           label="Ім'я" class="w-full" :max="128" :disabled="true"
                           :required="true"/>
                </div>
                <div class="flex">
                    <div class="flex" style="width: 49%; margin-right: 1%">
                        <Field id="value" type="text" v-model="form.email" :error="form.errors.email"
                               label="Ел. пошта" class="w-full" :max="128" :disabled="true"
                               :required="true"/>
                    </div>
                    <div class="flex" style="width: 50%">
                        <Field id="value" type="text" v-model="form.phone" :error="form.errors.phone"
                               label="Мобільний телефон" class="w-full" :max="128" :disabled="true"
                               :required="true"/>
                    </div>
                </div>
                <div class="flex w-full">
                    <Field id="value" type="textarea" v-model="form.message" :error="form.errors.message"
                           label="Повідомлення" class="w-full" :max="128" :disabled="true"
                           :required="true"/>
                </div>
            </div>
        </form>
    </div>
</template>

<style lang="scss" scoped>
.active {
    font-weight: bold;
}
</style>
