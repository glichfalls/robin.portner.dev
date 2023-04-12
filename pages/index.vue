<template>
  <div>
    <Skill v-for="skill in skills" :icon="skill.icon" :name="skill.name" />
  </div>
</template>

<script setup lang="ts">

const skills = [
  { icon: '', name: '' },
];

</script>