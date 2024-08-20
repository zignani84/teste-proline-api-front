<template>
  <PhotoList />
</template>

<script>
import PhotoList from './components/PhotoList.vue'

export default {
  name: 'App',
  components: {
    PhotoList
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
