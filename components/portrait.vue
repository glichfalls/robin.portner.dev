<template>
  <div class="block-portrait">
    <img src="<?= $image ?>" alt="Robin Portner" />
  </div>
</template>

<style scoped lang="scss">
.block-portrait {
  @apply w-full;
  @apply relative;
  @apply flex justify-center;
  margin: 50px 0 10px;

  &::before {
    @apply absolute left-1/2 top-1/10;
    @apply z-10;
    @apply bg-primary;
    @apply border border-solid border-tertiary;
    content: '';
    width: 40%;
    height: 30%;
  }

  &::after {
    @apply absolute left-1/2 top-1/3;
    @apply z-10;
    @apply bg-secondary;
    @apply border border-solid border-tertiary;
    content: '';
    width: 35%;
    height: 40%;
  }

  img {
    @apply relative;
    @apply grayscale;
    @apply z-20;
    @apply h-auto;
    @apply rounded-full;
    @apply border-2 border-solid border-secondary;
    width: 250px;
  }
}
</style>