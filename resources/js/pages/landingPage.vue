<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">Welcome to My Website</h1>
        <p class="text-xl text-gray-600 mb-8">This is my custom Laravel + Vue project.</p>
        
        <div class="space-x-4">
            <Link href="/products" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Our Products</Link>
            <Link href="/about" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">About Us</Link>
            <Link href="/contact" class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">Contact Us</Link>
        </div>
    </div>
</template>