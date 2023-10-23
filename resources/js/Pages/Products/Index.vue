<script setup>
  import { defineProps, inject } from 'vue';
  import { Head, Link, usePage } from '@inertiajs/vue3';
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import Product from '@/Components/Product.vue';

  const page = usePage();
  const { products } = defineProps(['products']);
  const darkTheme = inject('darkTheme');
</script>

<template>
    <Head title="Products" />
    <AuthenticatedLayout>
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="flex justify-center">
            <Link :href="route('product.create')" class="px-4 py-3 mb-4 text-sm text-white bg-blue-500 rounded-md">
              Add Product
            </Link>
          </div>
          <Product :products="products" :darkTheme="darkTheme" />
        </div>
      </div>
    </AuthenticatedLayout>
  </template>

