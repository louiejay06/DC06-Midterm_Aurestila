<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import ClientDetails from '@/Components/ClientDetails.vue'; // Import the ClientDetails component
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  client: Object,
  sales: Array,
});
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center">
                <Link :href="route('client')" class="inline-flex items-center px-4 py-2 mr-3 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                  </svg>
                  </Link>
                  <h2 class="text-xl font-semibold leading-tight text-gray-800">Client Information</h2>
            </div>
        </template>

      <div class="flex items-center justify-center py-8 mx-auto max-w-7xl sm:px-6 lg:px-4">
        <ClientDetails :client="client" :sales="sales"/>
      </div>
    </AuthenticatedLayout>
  </template>
