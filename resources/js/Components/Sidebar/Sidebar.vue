<script setup>
import SidebarLogo from '@/Components/Sidebar/SidebarLogo.vue';
import SidebarNavigation from '@/Components/Sidebar/SidebarNavigation.vue';
</script>

<template>
	<div class="flex bg-blue-600 text-blue-100 border-r border-gray-200 flex-col w-[300px]">
		<div class="flex items-center gap-2 py-4 pl-[30px]">
			<SidebarLogo
				class="block h-9 w-auto fill-current text-gray-800"
			/>
			<h1 class="font-semibold text-xl">Dashboard</h1>
		</div>
		<SidebarNavigation />
	</div>
</template>
