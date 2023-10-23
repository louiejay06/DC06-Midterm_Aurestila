<script setup>
import { defineProps, inject } from 'vue';

const props = defineProps({
    sales: Array,
});

const darkTheme = inject('darkTheme');
</script>

<template>
    <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div :class="darkTheme ? 'bg-gray-800' : 'bg-white'" class="overflow-hidden shadow-lg sm:rounded-lg">
        <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="p-6 text-gray-900">

          <table class="min-w-full border divide-y divide-gray-300 dark:border-gray-600">
            <thead>
              <tr>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-200 dark:bg-gray-500 dark:text-gray-300">
                  Date
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-200 dark:bg-gray-500 dark:text-gray-300">
                  Client ID
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-200 dark:bg-gray-500 dark:text-gray-300">
                  Is Credit
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="sale in sales" :key="sale.id" :class="darkTheme ? 'bg-gray-700' : ''">
                <td class="px-6 py-4 whitespace-no-wrap">
                  {{ sale.date }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                  {{ sale.client_id }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                  <span :class="sale.is_credit ? 'text-green-500' : 'text-red-500'">
                    {{ sale.is_credit ? 'Yes' : 'No' }}
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</template>
