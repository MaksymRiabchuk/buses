<template>
  <div
      v-if="successMessage"
      :class="[
      'mb-4 p-2 bg-green-100 text-green-700 rounded success-message',
      { 'success-message-hidden': !showMessage }
    ]"
  >
    {{ successMessage }}
  </div>
</template>

<script setup>
const props = defineProps({
  successMessage: {
    type: String,
    default: '',
  },
  showMessage: {
    type: Boolean,
    default: false,
  },
});
</script>

<style scoped>
.success-message-hidden {
  display: none;
}
</style>
