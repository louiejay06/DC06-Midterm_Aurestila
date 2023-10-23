<script setup>
import { computed, defineProps } from 'vue';

const props = defineProps({
  client: Object,
  sales: Array,
});

const totalAmount = computed(() => {
  // Check if props.sales is defined and not empty
  if (props.sales && props.sales.length > 0) {
    return props.sales.reduce((sum, obj) => sum + (obj.amount || 0), 0);
  } else {
    return 0; // Default to 0 if props.sales is not defined or empty
  }
});
</script>

<template>
    <div class="w-full">
      <div class="bg-white dark:bg-[#1f1f1f] overflow-hidden shadow-sm sm:rounded-lg p-8">
        <h2 class="mb-4 text-3xl font-semibold text-gray-900 dark:text-white">
          {{ client.first_name }} {{ client.last_name }}
        </h2>
        <h3 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-50">Client Details</h3>
        <div class="mb-4">
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-50">Address:</p>
          <p class="text-sm font-light text-gray-700 dark:text-gray-50">{{ client.address }}</p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-50">Phone:</p>
          <p class="text-sm font-light text-gray-700 dark:text-gray-50">{{ client.phone }}</p>
        </div>
        <div>
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-50">Credit Limit:</p>
          <p class="text-sm font-light text-gray-700 dark:text-gray-50">{{ client.credit_limit }}</p>
        </div>
        <h3 class="mt-6 text-xl font-semibold text-gray-700 dark:text-gray-50">Sales Transactions</h3>
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gray-100 dark:bg-purple-600 dark:text-white">
              <th class="px-4 py-2 text-left">Date</th>
              <th class="px-4 py-2 text-left">Cash/Credit</th>
              <th class="px-4 py-2 text-left">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="sale in sales" :key="sale.id" class="border-b border-gray-200 dark:border-gray-600">
              <td class="px-4 py-2 dark:text-white">{{ sale.date }}</td>
              <td class="px-4 py-2 dark:text-white">{{ sale.is_credit ? 'Credit' : 'Cash' }}</td>
              <td class="px-4 py-2 dark:text-white">{{ sale.amount }}</td>
            </tr>
            <tr>
              <td colspan="2" class="px-4 py-2 font-semibold text-right dark:text-white">Sum:</td>
              <td class="px-4 py-2 text-xl font-semibold text-center dark:text-white">{{ totalAmount }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
