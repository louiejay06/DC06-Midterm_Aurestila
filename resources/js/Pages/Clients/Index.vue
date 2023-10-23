<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const { clients } = defineProps(['clients']);
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="grid grid-cols-2 gap-4">
            <ClientCard
              v-for="client in clients"
              :key="client.id"
              :client="client"
              class="cursor-pointer"
            />
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
</template>
