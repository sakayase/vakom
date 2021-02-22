<template>
  <div id="app">
    <Contact />
  </div>
</template>

<script>
import Conseil from './components/Conseil.vue'
import Contact from './components/Contact.vue'

export default {
  name: 'App',
  components: {
    Conseil,
    Contact
  }
}
</script>

<style>
body {
  margin: 0;
}
</style>
