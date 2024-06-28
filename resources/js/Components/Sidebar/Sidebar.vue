<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/Sidebar/ApplicationLogo.vue';
import Navigation from '@/Components/Sidebar/Navigation.vue';
</script>

<template>
	<div class="flex bg-white border-r border-gray-200 flex-col w-[300px]">
		<div class="flex justify-center items-center gap-2 py-4">
			<ApplicationLogo
				class="block h-9 w-auto fill-current text-gray-800"
			/>
			<h1 class="font-semibold text-xl">Dashboard</h1>
		</div>
		<Navigation />
	</div>
</template>
