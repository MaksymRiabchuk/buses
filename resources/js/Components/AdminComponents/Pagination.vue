<template>
  <div class="mt-4">
    <nav class="flex justify-center">
      <ul class="inline-flex items-center -space-x-px">
        <li v-for="link in links" :key="link.label">
          <Link
              v-if="link.url"
              :href="link.url"
              v-html="link.label"
              :class="[
              'px-3 py-2 text-gray-500 hover:text-indigo-500',
              link.active ? 'text-indigo-500 font-bold cursor-default' : ''
            ]"
              :aria-current="link.active ? 'page' : null"
              :style="link.active ? { pointerEvents: 'none' } : {}">
          </Link>
          <span
              v-else
              v-html="link.label"
              :class="[
              'px-3 py-2 text-gray-300 cursor-default',
              link.active ? 'text-indigo-500 font-bold' : ''
            ]"
              :aria-current="link.active ? 'page' : null">
          </span>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  links: {
    type: Array,
    required: true
  }
});
</script>