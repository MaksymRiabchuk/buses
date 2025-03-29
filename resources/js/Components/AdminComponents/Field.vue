<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  modelValue: String,
  error: {
    type: String,
    default: null,
  },
  label: {
    type: String,
    required: true,
  },
  placeholder: {
    type: String,
    default: "",
  },
  id: {
    type: String,
    required: true,
  },
  type: {
    type: String,
    default: "text",
  },

  step: {
    type: String,
    default: "text",
  },

  min:{
    type: String,
    default: "text",
  },

  required:{
    type: Boolean,
    default: false
  },
  max:{
    type: Number,
    default: 255
  },
  rows:{
    type:Number,
    default:6,
  },
  disabled:{
    type:Boolean,
    default: false,
  }
});

const emit = defineEmits(['update:modelValue']);

const input = ref(null);

const focus = () => input.value?.focus();

defineExpose({
  input,
  focus,
});

onMounted(() => {
  if (input.value?.hasAttribute('autofocus')) {
    input.value.focus();
  }
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
    <textarea
        v-if="type==='textarea'"
        :placeholder="placeholder"
        :id="id"
        :rows="rows"
        :maxlength="max"
        :disabled="disabled"
        :class="[
        'py-2 rounded-md px-4 mt-1 block w-full',
        'dark:bg-dark-eval-1 dark:text-gray-700 dark:focus:ring-offset-dark-eval-1',
        'shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500',
        error
          ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
          : 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500',
        error
          ? 'focus:ring-red-500'
          : 'focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-300'
      ]"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
    <input
        v-else
        :disabled="disabled"
        :placeholder="placeholder"
        :type="type"
        :id="id"
        :step="step"
        :min="min"
        :maxlength="max"
        :class="[
        'py-2 rounded-md px-4 mt-1 block w-full',
        'dark:bg-dark-eval-1 dark:text-gray-700 dark:focus:ring-offset-dark-eval-1',
        'shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500',
        error
          ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
          : 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500',
        error
          ? 'focus:ring-red-500'
          : 'focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-300'
      ]"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
    <div v-if="error" class="mt-2 text-sm text-red-600">
      {{ error }}
    </div>
  </div>
</template>
<style scoped>
input::placeholder {
  opacity: 0.5;
}
.required{
  color: red;
}
</style>
