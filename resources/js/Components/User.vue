<script setup>
import { defineProps, inject } from 'vue';

const { user } = defineProps(['user']);
const darkTheme = inject('darkTheme');
</script>

<template>
    <div :class="darkTheme ? 'bg-gray-700' : 'bg-white'" class="max-w-md p-4 rounded-lg shadow-lg">
      <h3 class="text-xl font-semibold text-center" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">User Information</h3>
      <table class="w-full mt-4">
        <tr v-for="(item, key) in user" :key="key" class="border-t border-gray-200 dark:border-gray-700">
          <td class="py-2 font-medium tracking-wider text-left uppercase" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ key }}:</td>
          <td class="py-2 font-light whitespace-nowrap" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ item }}</td>
        </tr>
      </table>
    </div>
  </template>
