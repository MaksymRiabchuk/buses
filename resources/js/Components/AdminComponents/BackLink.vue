<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  routeName: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <Link :href="route(routeName)" class="text-indigo-600 hover:text-indigo-900 mb-4 inline-block">
    &lt; Повернутись
  </Link>
</template>

<style scoped></style>
