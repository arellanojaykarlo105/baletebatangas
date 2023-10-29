<template>
  <NavBar />
  <div class="container mx-auto main">
    <div class="bg-gray-100 mx-auto shadow border-b py-4 px-1">
      <div class="container mx-auto">
        <h1 class="text-lg">Welcome to {{ barangay }}</h1>
      </div>
    </div>
    <BaleteMaps :loc="barangay" />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import NavBar from '@/Components/NavBar.vue';
import BaleteMaps from '@/Components/BaleteMaps.vue';

const barangay = ref('')

barangay.value = decodeURIComponent(window.location.search.substr(1).split('=')[1])
</script>

<style scoped>
.main {
  max-width: 100vw;
  overflow-x: hidden;
}
</style>
