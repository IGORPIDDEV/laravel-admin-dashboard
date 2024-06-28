<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <div class="p-6 text-gray-900">users</div>
    </AuthenticatedLayout>
</template>
