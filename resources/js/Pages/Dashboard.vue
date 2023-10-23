<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Dashboard from '@/Components/Dashboard.vue';
</script>

<template>
    <Head title="Dashboards" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Dashboard />
        </div>
    </AuthenticatedLayout>
</template>
