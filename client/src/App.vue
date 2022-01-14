<template>
  <div id="app">
    <div class="flex-col w-full">
      <Navigation></Navigation>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Navigation from './components/Navigation.vue'
export default {
  name: 'App',
  components: {
    Navigation
  }
}
</script>


