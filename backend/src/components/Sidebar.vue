<template>
  <div class="w-[200px] transition-all bg-green-700 text-white py-4 px-2">
    <router-link :to="{name: 'app.dashboard'}" class="flex items-center rounded transition-colors p-2 hover:bg-black/30 font">
      <span class="mr-2 text-gray-300">
        <HomeIcon class="w-5"/>
      </span>
      <span class="text-xs">
        Dashboard
      </span>
    </router-link>
    <router-link :to="{name: 'app.products'}" class="flex items-center rounded transition-colors p-2 hover:bg-black/30 font">
      <span class="mr-2 text-gray-300">
        <LinkIcon class="w-5"/>
      </span>
      <span class="text-xs">
        Producten
      </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}" class="flex items-center rounded transition-colors p-2 hover:bg-black/30 font">
      <span class="mr-2 text-gray-300">
        <UsersIcon class="w-5"/>
      </span>
      <span class="text-xs">
        Gebruikers
      </span>
    </router-link>
   
   
  </div> 
  </template>
  
<script setup>
import { HomeIcon, UsersIcon, ChartBarIcon, LinkIcon } from '@heroicons/vue/24/outline'
</script>

  <style scoped>


</style>