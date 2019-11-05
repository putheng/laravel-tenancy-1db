<template>
  <div>
    <app-header/>

    <app-aside/>

    <main class="app-main">
      <div class="wrapper">
        <slot/>
      </div>
    </main>
  </div>
</template>

<script>
  import AppAside from './partials/AppAside'
  import AppHeader from './partials/AppHeader'

  export default {
    components: {
      AppHeader,
      AppAside,
    }
  }
</script>