<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Table from '@/Components/Elements/Table/Table.vue'
import { Head } from '@inertiajs/vue3';

defineProps({
    categories: {
        type: Array,
    },
});

const tableHeaders = ref([
    {
        title: 'Name',
        value: 'name',
        sort: 'desc'
    },
    {
        title: 'Views',
        value: 'views_count',
        sort: 'desc'
    },
    {
        title: 'Depth',
        name: 'depth',
        sort: 'desc'
    }
])

</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <div>
            <div class="border-b border-gray-200">
                <div class="px-6 py-4">
                    <h1 class="text-xl font-bold">Categories</h1>
                </div>
            </div>

            <Table
                :data="categories"
                :headers="tableHeaders"
            />
        </div>
    </AuthenticatedLayout>
</template>
