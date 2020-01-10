<template>
  <div id="app">
    <trial />
  </div>
</template>

<script>
import trial from './components/trial.vue'

export default {
  name: 'app',
  components: {
    trial
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
