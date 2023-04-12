<template>
  <footer id="main">
    <div class="container">
      &copy; {{ date.getFullYear() }} Robin Portner
    </div>
  </footer>
</template>

<script setup lang="ts">

const date = new Date();

</script>

<style scoped lang="scss">
footer#main {
  display: flex;
  align-items: center;
  height: 10vh;
  padding: 40px 0 20px;
  color: $color-primary;
  font-size: 12px;
  font-family: "Poppins", sans-serif;
  font-weight: bold;
}
</style>