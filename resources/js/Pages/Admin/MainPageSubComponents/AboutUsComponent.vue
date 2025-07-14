<script setup lang="ts">

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


</script>

<template>
    <div class="grid-cols-4 gap-4 grid">
        <div class="space-y-4">
            <Field
                id="about_us_text"
                type="textarea"
                :rows="10"
                v-model="props.form.about_us_text"
                :error="props.form.errors.about_us_text"
                label="Головний текст"
            />
        </div>
        <div class="space-y-4">
            <Field
                id="about_us_item_title_1"
                type="text"
                v-model="props.form.about_us_item_title_1"
                :error="props.form.errors.about_us_item_title_1"
                label="Заголовок 1 елементу"
            />
            <Field
                id="about_us_item_text_1"
                type="textarea"
                v-model="props.form.about_us_item_text_1"
                :error="props.form.errors.about_us_item_text_1"
                label="Текст 1 елементу"
            />
        </div>
        <div class="space-y-4">
            <Field
                id="about_us_item_title_2"
                type="text"
                v-model="props.form.about_us_item_title_2"
                :error="props.form.errors.about_us_item_title_2"
                label="Заголовок 2 елементу"
            />
            <Field
                id="about_us_item_text_2"
                type="textarea"
                v-model="props.form.about_us_item_text_2"
                :error="props.form.errors.about_us_item_text_2"
                label="Текст 2 елементу"
            />
        </div>
        <div class="space-y-4">
            <Field
                id="about_us_item_title_3"
                type="text"
                v-model="props.form.about_us_item_title_3"
                :error="props.form.errors.about_us_item_title_3"
                label="Заголовок 3 елементу"
            />
            <Field
                id="about_us_item_text_3"
                type="textarea"
                v-model="props.form.about_us_item_text_3"
                :error="props.form.errors.about_us_item_text_3"
                label="Текст 3 елементу"
            />
        </div>
    </div>
</template>

<style scoped>

</style>
