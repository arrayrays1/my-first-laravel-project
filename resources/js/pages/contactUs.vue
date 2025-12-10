<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="p-12 font-sans">
        <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1>
        
        <div class="mt-6 max-w-md space-y-4">
            <input type="text" placeholder="Your Name" class="w-full border p-2 rounded" />
            <input type="email" placeholder="Your Email" class="w-full border p-2 rounded" />
            <button class="w-full bg-blue-600 text-white py-2 rounded">Send Message</button>
        </div>

        <Link href="/" class="mt-6 inline-block text-blue-500 hover:underline">← Back to Home</Link>
    </div>
</template>