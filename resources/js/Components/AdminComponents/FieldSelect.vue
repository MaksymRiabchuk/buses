<script setup>
import { ref, onMounted, watch } from 'vue';

const props = defineProps({
  modelValue: [String, Number],
  error: {
    type: String,
    default: null,
  },
  label: {
    type: String,
    required: true,
  },
  id: {
    type: String,
    required: true,
  },
  options: {
    type: Object,
    required: true,
  },
  type:{
    type: Number,
    default: 1
  },
  required:{
    type: Boolean,
    default: false
  },
  disabled:{
    type: Boolean,
    default: false
  },
  defaultValue:{
    type: String,
    default: ""
  }
});

const emit = defineEmits(['update:modelValue']);

const select = ref(null);

const updateSelectClass = (value) => {
  if (value === '' || value === null || value === undefined) {
    select.value.classList.add('empty-value');
  } else {
    select.value.classList.remove('empty-value');
  }
};

const focus = () => select.value?.focus();

defineExpose({
  select,
  focus,
});

onMounted(() => {
  if (select.value?.hasAttribute('autofocus')) {
    select.value.focus();
  }
  if (!props.modelValue) {
    emit('update:modelValue', props.defaultValue);
  }
  updateSelectClass(props.modelValue);
});

watch(() => props.modelValue, (newValue) => {
  updateSelectClass(newValue);
});
</script>

<template>
  <div>
    <label
        :for="id"
        :class="[
        'block text-gray-700 font-semibold mb-2',
        error ? 'text-red-600' : 'text-gray-700 dark:text-gray-700'
      ]"
    >
      {{ label }}<span class="required" v-if="required">*</span>
    </label>
    <select
        :required="required"
        :disabled="disabled"
        :id="id"
        :class="[
        'py-2 rounded-md px-4 mt-1 block w-full',
        'dark:bg-dark-eval-1 dark:text-gray-700 dark:focus:ring-offset-dark-eval-1',
        error
          ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
          : 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500',
        error
          ? 'focus:ring-red-500'
          : 'focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-300'
      ]"
        :value="modelValue"
        @change="$emit('update:modelValue', $event.target.value)"
        ref="select"
    >
      <option value="">Виберіть</option>
      <option v-if="type == 1"
          v-for="(option, index) in options" :key="index" :value="index">
        {{ option }}
      </option>
      <option v-else
              v-for="(option,) in options" :key="option.value" :value="option.value">
        {{ option.label }}
      </option>
    </select>
    <div v-if="error" class="mt-2 text-sm text-red-600">
      {{ error }}
    </div>
  </div>
</template>
<style scoped>
 .empty-value{
  opacity: 0.5;
 }
 .required{
   color: red;
 }
 select:disabled{
   cursor: not-allowed;
 }
</style>
