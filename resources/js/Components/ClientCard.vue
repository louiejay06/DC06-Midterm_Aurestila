<script setup>
import { defineProps, inject } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    client: Object,
});

const darkTheme = inject('darkTheme');

const viewClient = () => {
    router.get('/client/view/' + props.client.id);
};
</script>

<template>
    <div class="min-w-[350px] mb-4 mx-2 p-4 rounded shadow border flex-1 cursor-pointer" @click="viewClient" :class="darkTheme ? 'bg-gray-700' : 'bg-white'">
        <h5 class="flex items-center mb-2 text-2xl font-bold tracking-tight" :class="darkTheme ? 'text-white' : 'text-gray-700'">
            {{ client.first_name }} {{ client.last_name }}
        </h5>
        <div class="mb-2">
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">Address</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">{{ client.address }}</p>
        </div>
        <div class="mb-2">
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">Phone</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">{{ client.phone }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">Credit Limit</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-gray-400' : 'text-gray-700'">{{ client.credit_limit }}</p>
        </div>
    </div>
</template>
