<script setup>
import {useToast} from 'vue-toastification';
import {Head, useForm, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref, watch} from "vue";
import Button from "../../Components/AdminComponents/Button.vue";
import Field from "../../Components/AdminComponents/Field.vue";
import LoginLayout from "../../Layouts/LoginLayout.vue";

defineOptions({layout: LoginLayout});
onMounted(() => {
    if (successMessage.value) {
        toast.success(successMessage.value);
        showMessage.value = true;
        setTimeout(() => {
            showMessage.value = false;
        }, 3000);
    }
});
const form = useForm({
    password:"",
    name:"",
});

const props = defineProps({

});

const submit = () => {
    form.post(`/login`);
};

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
        if (newVal && newVal.danger) {
            showMessage.value = true;
            toast.error(newVal.danger);
            setTimeout(() => {
                showMessage.value = false;
            }, 3000);
            form.name='';
            form.password='';
        }
    },
    {deep: true}
)
</script>

<template>
    <Head :title="'Login'"/>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 w-[33%]">
        <form @submit.prevent="submit" class="mt-6 space-y-6">
            <div>
                <Field id="login-name" label="Імʼя користувача" v-model="form.name" :error="form.errors.name"></Field>
            </div>
            <div>
                <Field id="login-password" label="Пароль" type="password" v-model="form.password" :error="form.errors.password"></Field>
            </div>
            <div>
                <Button variant="primary" :type="'submit'">Зберегти</Button>
            </div>
        </form>
    </div>
</template>

<style scoped>
</style>
