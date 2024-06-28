<script setup>
import { ref } from 'vue';
import Sidebar from '@/Components/Sidebar/Sidebar.vue'
import Header from '@/Components/Header/Header.vue'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 flex">
            <Sidebar />
            <div class="flex w-full flex-col">
                <Header />
                <main>
                    <div class="py-10">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <slot />
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
