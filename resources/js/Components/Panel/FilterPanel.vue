<script setup>
import { ref, watch, onMounted, computed } from 'vue';
import { useCookies } from '@vueuse/integrations/useCookies';
import { router } from '@inertiajs/vue3';

const props = defineProps({
  filters: {
    type: Array,
    default: () => [],
  },
  filterValues: {
    type: Object,
    default: () => ({}),
  },
  onFilterChange: {
    type: Function,
    required: true,
  },
});

const filterValues = ref({ ...props.filterValues });
const isPanelVisible = ref(false);
const isInitialized = ref(false);
const cookies = useCookies(['filterPanelState']);

const checkFilterPanelState = () => {
  Object.keys(filterValues.value).forEach(key => {
    if(filterValues.value[key] == null){
      filterValues.value[key] = '';
    }
  });

  isPanelVisible.value = cookies.get('filterPanelState') == true;

  setTimeout(() => {
    isInitialized.value = true;
  }, 1000);

};

watch(isPanelVisible, (newValue) => {
  cookies.set('filterPanelState', newValue, { path: '/' });
});


const clearFilters = () => {
  Object.keys(filterValues.value).forEach(key => {
    filterValues.value[key] = '';
  });
  props.onFilterChange(filterValues.value);
  router.get(window.location.pathname, {}, { preserveState: true, preserveScroll: true });
};


const activeFilterCount = computed(() => {
  return Object.values(filterValues.value).filter(value => value !== '' && value !== null && value !== undefined).length;
});

onMounted(() => {
  checkFilterPanelState();
});

watch(filterValues, (newValues) => {
  if(isInitialized.value === true){
    props.onFilterChange(newValues);
  }
}, { deep: true });
</script>

<template>
  <div class="mb-5">
    <div v-if="filters.length > 0" class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
      <div class="flex justify-between items-center mb-2">
        <div class="relative flex items-center">
          <h3 class="text-lg font-semibold"><code>Фільтра</code></h3>
          <span v-if="activeFilterCount > 0" style="right: -15px" class="absolute top-0 right-0 text-xs text-white bg-red-600 rounded-full px-0 py-0 -mt-0 -mr-0">{{ activeFilterCount }}</span>
        </div>
        <div class="flex items-center">
          <button v-if="activeFilterCount > 0" @click="clearFilters" title="Clear filters" class="ml-4 text-red-600">
            Clear <i class="fas fa-times"></i>
          </button>
          <label v-if="isInitialized" for="togglePanel" class="ml-4 flex items-center cursor-pointer">
            <input type="checkbox" id="togglePanel" v-model="isPanelVisible" class="hidden">
            <span class="relative inline-block w-10 ml-2 align-middle select-none transition duration-200 ease-in">
              <span :class="{'translate-x-5': isPanelVisible, 'translate-x-0': !isPanelVisible}" class="absolute block w-6 h-6 transform bg-white border-2 border-gray-300 rounded-full shadow inset-y-0 left-0 transition-transform duration-200 ease-in-out"></span>
              <span :class="{'bg-green-500': isPanelVisible, 'bg-gray-300': !isPanelVisible}" class="block w-full h-6 rounded-full shadow-inner transition-colors duration-200 ease-in-out"></span>
              <i class="absolute top-1/2 transform -translate-y-1/2 right-1 text-sm text-white"></i>
            </span>
          </label>
        </div>
      </div>
      <div v-if="isPanelVisible" class="flex flex-wrap gap-4">
        <div v-for="filter in filters" :key="filter.name" class="flex flex-col">
          <label :for="filter.name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ filter.label }}</label>
          <input
              v-if="filter.type === 'text'"
              :id="filter.name"
              v-model="filterValues[filter.name]"
              type="text"
              :placeholder="filter.placeholder || 'Enter text'"
              class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
          />
          <select
              v-else-if="filter.type === 'select'"
              :id="filter.name"
              v-model="filterValues[filter.name]"
              class="py-2 rounded-md px-4 mt-1 block w-full dark:bg-dark-eval-1 dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 focus:ring-offset-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-lg focus:ring-5 focus:ring-indigo-400 focus:outline-none"
          >
            <option value="">Виберіть</option>
            <option v-for="(option, index) in filter.options" :key="index" :value="index">
              {{ option }}
            </option>
          </select>

          <input
              v-else-if="filter.type === 'date'"
              :id="filter.name"
              v-model="filterValues[filter.name]"
              type="date"
              :placeholder="filter.placeholder || 'Enter text'"
              class="py-2 rounded-md px-4 mt-1 block w-full dark:bg-dark-eval-1 dark:text-gray-300 dark:focus:ring-offset-dark-eval-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
input, select {
  width: 200px;
}

.relative.flex.items-center > span {
  position: absolute;
  top: 0;
  right: 0;
  transform: translate(50%, -50%);
  display: inline-block;
  background-color: #e53e3e; /* красный цвет */
  color: #fff;
  border-radius: 9999px;
  padding: 0.25rem 0.5rem;
  font-size: 0.75rem;
  font-weight: bold;
}

.switch-label {
  display: flex;
  align-items: center;
}

.switch-label span {
  margin-left: 0.5rem;
}
</style>
