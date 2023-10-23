<template>
    <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div :class="darkTheme ? 'bg-gray-700' : 'bg-white'" class="overflow-hidden shadow-sm sm:rounded-lg">
        <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="p-6 text-gray-900">You've been logged in.</div>
      </div>
    </div>
  </template>

<script setup>
import { inject } from 'vue';

const darkTheme = inject('darkTheme');
</script>
