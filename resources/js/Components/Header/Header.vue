<script setup>
import HeaderSearch from '@/Components/Header/HeaderSearch.vue'
import HeaderNavigation from '@/Components/Header/HeaderNavigation.vue';
</script>
<template>
    <header>
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <HeaderSearch />
                    <HeaderNavigation />
                </div>
            </div>
        </nav>
    </header>
</template>
