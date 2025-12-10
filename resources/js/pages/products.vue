<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

// This accepts data sent from Laravel
defineProps({
    products: Array
});
</script>

<template>
    <div class="p-12 font-sans">
        <h1 class="text-3xl font-bold mb-8">Our Products</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div v-for="item in products" :key="item.id" class="border p-6 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-bold">{{ item.name }}</h2>
                <p class="text-gray-600 mt-2">{{ item.description }}</p>
                <p class="text-green-600 font-bold mt-4">${{ item.price }}</p>
            </div>
        </div>

        <Link href="/" class="mt-8 inline-block text-blue-500 hover:underline">← Back to Home</Link>
    </div>
</template>