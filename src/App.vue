<template>
  <div id="app">
    <Nav />
    <router-view />
  </div>
</template>
<script>
import Nav from "./components/partials/Nav.vue";
export default {
  name: "app",
  components: {
    Nav,
  },
};
</script>
<style lang="scss">
:root {
  --primary-font-color: #fff;
  --listen-font-color: #e7d0ba;
  --listen-border-color: #e7d0ba;
  --listen-background-color: #e7d0ba;
  --back-link-color: brown;
}
html,
body {
  height: 100%;
}
body::-webkit-scrollbar {
  display: none;
}
#app {
  font-family: "Abel", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  height: 100%;
}
</style>