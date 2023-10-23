<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sale from '@/Components/Sale.vue';

const { sales } = defineProps(['sales']);
</script>

<template>
    <Head title="Sales" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Sale :sales="sales" />
        </div>
    </AuthenticatedLayout>
</template>
