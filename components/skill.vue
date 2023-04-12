<template>
  <div class="skill">
    <img src="https://unpkg.com/simple-icons@v5/icons/<?= $icon ?>.svg">
    <span>{{ name }}</span>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  icon: string;
  name: string;
}>();
</script>

<style scoped lang="scss">
.skill {
  @apply w-100;
  @apply flex items-center;
  @apply my-2;
  @apply text-base;

  img {
    @apply invert;
    @apply w-40 h-40;
    @apply object-cover;
    @apply mr-2;
  }
}
</style>