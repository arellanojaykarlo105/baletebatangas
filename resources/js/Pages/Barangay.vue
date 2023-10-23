<template>
  <NavBar />
  <div class="">
    <div class="bg-gray-100 mx-auto shadow border-b py-4 px-1">
      <div class="container mx-auto"><h1 class="text-lg">Welcome to {{ barangay }}</h1></div>
      
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import NavBar from '@/Components/NavBar.vue';
const barangay = ref('')

barangay.value = window.location.search.substr(1).split('=')[1]
</script>

<style>
</style>
