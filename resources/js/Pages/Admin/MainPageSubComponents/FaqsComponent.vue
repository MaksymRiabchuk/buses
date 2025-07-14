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

const addFaqItem = () => {
    props.form.faqs.push({
        id: '',
        question: '',
        answer: '',
    })
}

const removeFaqItem = (index) => {
    props.form.faqs.splice(index, 1);
}
</script>

<template>
    <div class="flex-col">
        <div>
            <Field
                id="faqs_text"
                type="textarea"
                :rows="4"
                v-model="props.form.faqs_text"
                :error="props.form.errors.faqs_text"
                label="Верхній текст блоку"
            />
        </div>
        <div class="grid-cols-3 gap-3 grid mt-4">
            <div class="flex relative" v-for="(item,index) in props.form.faqs">
                <div class="flex-col w-full">
                    <Field
                        :id="'faqs_item_question_'+index"
                        type="textarea"
                        :rows="3"
                        class="w-full"
                        v-model="props.form.faqs[index].question"
                        :error="props.form.errors['faqs.' + index + '.question']"
                        :label="'Запитання №'+(index+1)"
                    />
                    <Field
                        :id="'faqs_item_answer_'+index"
                        type="textarea"
                        :rows="4"
                        v-model="props.form.faqs[index].answer"
                        :error="props.form.errors['faqs.' + index + '.answer']"
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
</template>

<style scoped>

</style>
