<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import User from '@/Components/User.vue'

const { users } = defineProps(['users']);
</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <div class="flex justify-center mx-auto mt-5">
            <div class="flex space-x-4">
            <User v-for="user in users" :key="user.id" :user="user" />
            </div>
        </div>

    </AuthenticatedLayout>
</template>
