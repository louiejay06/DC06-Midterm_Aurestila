<script setup>
import { defineProps, inject } from 'vue';

const { products } = defineProps(['products']);
const darkTheme = inject('darkTheme');
</script>

<template>
    <table :class="darkTheme ? 'bg-gray-700' : 'bg-white'" class="w-full rounded-lg shadow-md">
      <thead>
        <tr :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">
          <th class="p-4">Image</th>
          <th class="p-4">Product Name</th>
          <th class="p-4">Category</th>
          <th class="p-4">Retail Price</th>
        </tr>
      </thead>
      <tbody>
        <tr :class="{ 'border-t border-gray-200 dark:border-gray-700': darkTheme }" v-for="product in products" :key="product.id">
          <td class="p-4">
            <div class="w-16 h-16 mx-auto overflow-hidden rounded-full">
              <img class="object-cover w-full h-full" :src="product.thumbnail" alt="">
            </div>
          </td>
          <td class="p-4 text-center" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ product.name }}</td>
          <td class="p-4 text-center" :class="{ 'text-gray-500': !darkTheme, 'text-white': darkTheme }">{{ product.category }}</td>
          <td class="p-4 text-center" :class="{ 'text-gray-600': !darkTheme, 'text-white': darkTheme }">{{ product.retail_price }}</td>
        </tr>
      </tbody>
    </table>
  </template>
