<template>
  <div class="block-work">

    <h3 class="block-work--title">
      {{ title }}
    </h3>

    <div class="block-work--description">
      {{ description }}
    </div>

    <div class="block-work--tags">
      <div v-for="tag in tags" class="block-work--tag">{{ tag }}</div>
    </div>

    <a v-if="github" rel="noreferrer noopener" target="_blank" class="block-work--link" :href="github">
      <i class="fab fa-github"></i> GitHub
    </a>

    <a v-if="link" rel="noreferrer noopener" target="_blank" class="block-work--link" :href="link">
      <i class="fas fa-globe-europe"></i> Web
    </a>

    <a v-if="figma" rel="noreferrer noopener" target="_blank" class="block-work--link" :href="figma">
      <i class="fab fa-figma"></i> Figma
    </a>

  </div>
</template>

<script setup lang="ts">
defineProps<{
  title: string;
  description: string;
  tags: string[];
  figma?: string;
  github?: string;
  link?: string;
}>();
</script>

<style scoped lang="scss">
.block-work {
  @apply w-full;
  @apply py-4 mb-5;
  @apply bg-tertiary;

  iframe {
    @apply w-full;
    height: 600px;
  }

  &--title {
    color: #ffffff !important;
    font-size: 24px;
    margin: 0 0 15px;
  }

  &--tags {
    @apply flex flex-wrap;
    margin: 5px 0;

    &:hover {
      @apply cursor-default;
    }

    > div {
      @apply bg-tertiary;
      @apply text-secondary;
      font-size: 14px;
      padding: 2px 5px;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      border: 1px solid $color-secondary;
      margin: 0 15px 15px 0;
    }
  }

  &--gallery {
    @apply flex flex-wrap;
    @apply w-full;
    margin: 30px 0;

    .img-zoom {
      @apply cursor-pointer;
      width: calc(50% - 10px);
      margin: 5px;

      &::before {
        content: '';
      }

      > img {
        @apply w-full;
        @apply block;
        @apply object-cover;
        border: 1px solid $color-primary;
        max-height: 400px;
      }

      &.open {
        z-index: 1000;
        margin: 0;
        background-color: $color-tertiary;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        padding: 5vh 10vw;
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;
        overflow-y: scroll;

        > img {
          border: none;
          object-fit: contain;
          width: 100%;
          height: 100%;
          max-height: none;
        }
      }
    }

  }

  &--link {
    @apply text-primary;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 1px;
    font-weight: bold;
    border: 1px solid $color-primary;
    padding: 5px 15px;
    margin: 0 15px 0 0;

    &:hover {
      border: 1px solid $color-tertiary;
      @apply text-tertiary;
      @apply bg-primary;
    }
  }

  &--description {
    @apply text-white;
  }

  .figma {
    @apply flex flex-col justify-center items-center;
    @apply cursor-pointer;
    height: 400px;

    &:hover i {
      animation: rotate .5s;
    }

    i {
      @apply text-primary;
      font-size: 60px;
    }

    iframe {
      @apply border-none;
      @apply h-full;
    }
  }

}
</style>