<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    categories: {
        type: Object,
    },
});

const createCategory = () => {
    console.log('create')
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div>
            <h1>Categories</h1>
            <div>{{ categories }}</div>
        </div>
    </AuthenticatedLayout>
</template>
