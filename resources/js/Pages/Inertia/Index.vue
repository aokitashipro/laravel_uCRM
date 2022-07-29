<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
  blogs: Array
})
</script>
<template>
  <div v-if="$page.props.flash.message" class="bg-blue-300">
  {{ $page.props.flash.message }}
  </div>
  <ul>
    <li v-for="blog in blogs" :key="blog.id">
    件名: <Link class="text-blue-400" :href="route('inertia.show', { id: blog.id })">{{ blog.title }}</Link>, 
    本文: {{ blog.content}}
    </li>
  </ul>
ああああ 
</template>
