<template>
    <div v-if="currentUser.id" class="min-h-full flex">
      <!-- Sidebar -->
      <Sidebar  :class="{'-ml-[200px]': !sidebarOpened}"/>   
      <!-- Sidebar -->  
      <div class="flex-1">
        <Navbar @toggle-sidebar="toggleSidebar"></Navbar>
        <!-- Content -->  

        <main class="p-6">
          <router-view></router-view>
        </main>
        <!-- Content -->  

      </div>
      </div>
      <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">
        <Spinner />
      </div>
  </template>
  
<script setup>
import {ref, computed, onMounted, onUnmounted} from 'vue'
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";
import store from "../store";
import Spinner from "./core/Spinner.vue";
const {title} = defineProps({
title: String
})

const currentUser = computed(() => store.state.user.data);

const sidebarOpened = ref(true);
store.dispatch('getUser')
function toggleSidebar() {
  sidebarOpened.value = !sidebarOpened.value  
}


</script>

  <style scoped>


</style>