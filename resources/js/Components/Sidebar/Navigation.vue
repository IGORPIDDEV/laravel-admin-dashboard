<script setup>
import { ref } from 'vue';
const navigation = ref([
	{
		title: 'Dashboard',
		icon: 'pi pi-home'
	},
	{
		title: 'Profile',
		icon: 'pi pi-user'
	},
	{
		title: 'Settings',
		icon: 'pi pi-cog'
	},
	{
		title: 'Logout',
		icon: 'pi pi-sign-out'
	}
])
</script>

<template>
	<nav class="flex-1 px-4 py-4 space-y-2">
		<a
			href="#"
			class="flex items-center gap-[5px] py-2 px-4 font-bold rounded transition duration-200 hover:bg-blue-800 hover:text-white"
			v-for="(item, index) in navigation"
			:key="index"
		>
			<i :class="item.icon"></i>
			<span class="ml-2">{{ item.title }}</span>
		</a>
	</nav>
</template>
