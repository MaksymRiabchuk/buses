import { ref } from 'vue';
import { router } from "@inertiajs/vue3";

export function useFilterPanel(initialFilters, itemName) {
    const filterValues = ref({});

    initialFilters.forEach(filter => {
        filterValues.value[filter.name] = '';
    });

    const perPageOptions = [10,20, 30, 40, 50, 100, 200];
    const perPage = ref(perPageOptions[0]);  // Default to 10

    const onFilterChange = (newValues) => {
        filterValues.value = newValues;
    };

    const onFilterChangeAndFetch = (newValues = {}) => {
        filterValues.value = { ...filterValues.value, ...newValues, per_page: perPage.value };
        router.get(route(itemName + '.index'), filterValues.value, { preserveState: true, preserveScroll: true });
    };
    return {
        onFilterChangeAndFetch,
        perPageOptions,
        perPage,
        handlePerPageChange: () => onFilterChangeAndFetch()
    };
}
