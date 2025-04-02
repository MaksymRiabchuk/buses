<script setup
>
import {Head, Link} from '@inertiajs/vue3';
import {usePage} from '@inertiajs/vue3'
import {useCrudIndex} from "../../../Components/Composables/useCrudIndex.js";
import {useFilterPanel} from "../../../Components/Composables/Panel/useFilterPanel.js";
import FilterPanel from "../../../Components/Panel/FilterPanel.vue";
import '@fortawesome/fontawesome-free/css/all.css';
import Button from "../../../Components/AdminComponents/Button.vue";
import DangerButton from "../../../Components/AdminComponents/DangerButton.vue";
import PrimaryButton from "../../../Components/AdminComponents/PrimaryButton.vue";
import Pagination from "../../../Components/AdminComponents/Pagination.vue";
import {useToast} from "vue-toastification";
import Layout from "../../../Layouts/AdminLayout.vue";

defineOptions({layout: Layout});

import {onMounted, ref, watch} from "vue";

const itemName = 'messages';
const toast = useToast();
const props = defineProps({
    items: {
        type: Object,
        default: () => ({
            data: [],
            links: [],
            meta: {},
        }),
    },
    total: {
        type: Number,
        default: 0,
    },
    filters: {
        type: Array,
        default: () => [],
    },
    filterValues: {
        type: Object,
        default: () => ({}),
    },
    perPage: {
        type: Number,
        default: 10
    }
});
const headers = ["Ім'я", "Ел. пошта", "Телефон", "Повідомлення", "Дії"];

const {deleteItem} = useCrudIndex(itemName);

const {onFilterChangeAndFetch, perPageOptions, perPage, handlePerPageChange} = useFilterPanel(props.filters, itemName);
perPage.value = props.perPage;
</script>
<template>
    <Head :title="'Параметри'"/>
    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <h2 class="text-xl font-semibold leading-tight capitalize">
            Повідомлення
        </h2>
    </div>
    <FilterPanel :filters="filters" :filterValues="filterValues" @filterChange="onFilterChangeAndFetch"/>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex items-center justify-end mb-4">
            <div class="flex items-center">
                <span class="mr-2">Кількість записів: {{ total }}</span>
                <select id="perPageSelect" v-model="perPage" @change="handlePerPageChange" class="p-2 border rounded">
                    <option v-for="option in perPageOptions" :key="option" :value="option">{{ option }}</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <th v-for="header in headers" :key="header"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider font-semibold last:text-right">
                        {{ header }}
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(item,index) in items.data" :key="item.id">

                    <td class="px-6 py-4 whitespace-nowrap">{{ item.name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ item.email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ item.phone }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ item.message }}</td>
                    <td class="text-right">
                        <Link :href="`${itemName}/${item.id}/edit`" class="mr-2">
                            <PrimaryButton><i class="fas fa-eye"></i></PrimaryButton>
                        </Link>
                        <DangerButton @click="deleteItem(item.id)"><i class="fas fa-trash"></i></DangerButton>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <Pagination v-if="items.links.length > 3" :links="items.links"/>
    </div>
</template>
<style>

</style>
