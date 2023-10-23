<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Products" />
  <AuthenticatedLayout>
    <template #header>
      <div class="flex items-center">
        <Link :href="route('product')" class="inline-flex items-center px-4 py-2 mr-3 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
               class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
          </svg>
        </Link>
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Add a New Product</h2>
      </div>
    </template>
    <div class="py-6">
      <div class="max-w-2xl mx-auto">
        <div class="p-4 bg-white shadow-md sm:rounded-lg">
          <h2 class="mb-4 text-xl font-semibold text-gray-800">Product Details</h2>
          <div class="space-y-4">
            <div class="space-x-4">
              <div class="w-1/2">
                <InputLabel for="product" value="Product Name"/>
                <TextInput type="text" id="product" class="w-full"/>
              </div>
              <div class="w-1/2">
                <InputLabel for="brand" value="Brand"/>
                <TextInput type="text" id="brand" class="w-full"/>
              </div>
            </div>
            <InputLabel for="description" value="Description"/>
            <textarea id="description" class="w-full p-2 border rounded-md" rows="3"></textarea>
            <div class="space-x-4">
              <div class="w-1/2">
                <InputLabel for="retail_price" value="Retail Price"/>
                <TextInput type="number" id="retail_price" class="w-full"/>
              </div>
            </div>
            <div class="p-4 bg-gray-100 dark:bg-gray-700">
              <p class="text-gray-700">Add Product Images</p>
              <label for="dropzone-file" class="block p-4 border border-dashed rounded-lg cursor-pointer">
                <svg class="w-8 h-8 mx-auto text-gray-500 dark:text-gray-400" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Click to upload or drag and drop</p>
                <p class="text-gray-500 dark:text-gray-400">SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                <input id="dropzone-file" type="file" class="hidden"/>
              </label>
            </div>
          </div>
          <div class="p-4 bg-gray-100 dark:bg-gray-700">
            <button class="w-full px-4 py-2 text-white bg-gray-500 rounded-md">Save</button>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
