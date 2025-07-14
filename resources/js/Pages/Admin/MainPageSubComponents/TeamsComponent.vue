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

const handleEmployeeImageUpdate = (event, index) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        props.form.employees[index].image = e.target.result;
    };
    reader.readAsDataURL(file);
    props.form.employees[index].imageFile = file;
};

const triggerEmployeeFileInput = (index) => {
    document.getElementById(`EmployeeImageFileInput${index}`).click();
};

const deleteEmployeeImage = (index) => {
    props.form.employees[index].image = '';
};


const addEmployee = () => {
    props.form.employees.push({
        id: '',
        full_name: '',
        position: '',
        image: '',
    })
}

const removeEmployee = (index) => {
    props.form.employees.splice(index, 1);
}

</script>

<template>
    <div class="grid-cols-3 gap-x-8 gap-y-14 grid">
        <div class="flex justify-center flex-col items-center relative"
             v-for="(employee,index) in props.form.employees">
            <div class="w-full">
                <div>
                    <Field
                        :id="'employee_full_name_'+index"
                        type="text"
                        v-model="props.form.employees[index].full_name"
                        :error="props.form.errors['employees.' + index + '.full_name']"
                        label="Повне імʼя працівника"
                    />
                </div>
                <div>
                    <Field
                        :id="'employee_position_'+index"
                        type="text"
                        v-model="props.form.employees[index].position"
                        :error="props.form.errors['employees.' + index + '.position']"
                        label="Фах працівника"
                    />
                </div>
            </div>
            <div class="relative w-full h-[200px]">
                <label
                    :class="['block text-gray-700 font-semibold mb-2', props.form.errors['employees.' + index + '.image'] ? 'text-red-600' : 'text-gray-700 dark:text-gray-700']">
                    Фото працівника
                </label>
                <div class="w-full overflow-hidden rounded-md border border-gray-300"
                     v-if="props.form.employees[index].image">
                    <img
                        :src="props.form.employees[index].image.length<=100 && props.form.employees[index].image!=='/storage/no_image.webp'?'/storage/main/'+props.form.employees[index].image:props.form.employees[index].image"
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
                <div v-if="props.form.errors['employees.' + index + '.image']" class="mt-2 text-sm text-red-600">
                    {{ props.form.errors['employees.' + index + '.image'] }}
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
</template>

<style scoped>

</style>
