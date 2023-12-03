<template>
  <Link
      :href="href"
      class="font-medium text-indigo-600 hover:text-indigo-500"
  >
    <slot />
  </Link>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
  href: {
    type: String,
    default: '#',
  },
})
</script>
