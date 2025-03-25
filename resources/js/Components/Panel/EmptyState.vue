<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import Button from "@/Components/Button.vue";

const props = defineProps({
  itemName: {
    type: String,
    required: true
  }
});
</script>

<template>
  <div>
    <div class="flex flex-col items-center justify-center p-6 bg-white rounded-md shadow-md dark:bg-dark-eval-1">
      <span class="text-5xl mb-4">📦</span>
      <p class="text-lg text-gray-600 mb-4">No items available yet.</p>
      <Link :href="route(itemName + '.create')">
        <Button size="sm" variant="primary" :type="'submit'">+Create first item</Button>
      </Link>
    </div>
  </div>
</template>