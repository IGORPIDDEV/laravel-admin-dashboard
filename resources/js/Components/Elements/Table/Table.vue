<script setup>
defineProps({
    data: {
        type: Array,
    },
    headers: {
        type: Array
    }
});
</script>

<template>
    <div>
        <table class="min-w-full text-left text-sm font-light text-surface">
          <thead class="border-b border-gray-200 font-medium">
            <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4" v-for="(header, headerIndex) in headers" :key="headerIndex">{{ header.title }}</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-200" v-for="(item, itemIndex) in data">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ itemIndex + 1 }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ item }}</td>
            </tr>
          </tbody>
        </table>
    </div>
</template>
