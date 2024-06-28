<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3'
const navItems = ref([
  {
    title: 'Dashboard',
    icon: 'pi pi-home',
    route: 'dashboard'
  },
  {
    title: 'Profile',
    icon: 'pi pi-user',
    route: 'profile'
  },
  {
    title: 'Users',
    icon: 'pi pi-user',
    route: 'users'
  },
  {
    title: 'Payments',
    icon: 'pi pi-user',
    route: 'payments'
  },
])

const isCurrentRouteActive = (routeName) => {
  const currentRoute = route().current().split('.')[0]
  return currentRoute === routeName
}

</script>

<template>
  <nav class="flex-1 px-4 py-4 space-y-2">
    <Link
        v-for="(navItem, navItemIndex) in navItems"
        :key="navItemIndex"
        :href="navItem.route"
        class="flex items-center gap-[10px] py-2 px-4 font-bold rounded transition duration-200 hover:bg-blue-800 hover:text-whit"
        :class="{'bg-blue-800': isCurrentRouteActive(navItem.route)}"
      >
        {{ navItem.title }}
  </Link>
  </nav>
</template>
