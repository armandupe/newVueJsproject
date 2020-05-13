<template>
<nav class="navbar container" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a target="_blank" class="navbar-item navbar-item__instagram-link" href="https://www.instagram.com/torveband/">
      <img alt="logo" src="data:image/svg+xml;base64,PHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNCAyNCIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwIC0xLjk4MiAtMS44NDQgMCAtMTMyLjUyMiAtNTEuMDc3KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItMzcuMTA2IiB4Mj0iLTI2LjU1NSIgeTE9Ii03Mi43MDUiIHkyPSItODQuMDQ3Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiNmZDUiLz48c3RvcCBvZmZzZXQ9Ii41IiBzdG9wLWNvbG9yPSIjZmY1NDNlIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjYzgzN2FiIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBkPSJtMS41IDEuNjMzYy0xLjg4NiAxLjk1OS0xLjUgNC4wNC0xLjUgMTAuMzYyIDAgNS4yNS0uOTE2IDEwLjUxMyAzLjg3OCAxMS43NTIgMS40OTcuMzg1IDE0Ljc2MS4zODUgMTYuMjU2LS4wMDIgMS45OTYtLjUxNSAzLjYyLTIuMTM0IDMuODQyLTQuOTU3LjAzMS0uMzk0LjAzMS0xMy4xODUtLjAwMS0xMy41ODctLjIzNi0zLjAwNy0yLjA4Ny00Ljc0LTQuNTI2LTUuMDkxLS41NTktLjA4MS0uNjcxLS4xMDUtMy41MzktLjExLTEwLjE3My4wMDUtMTIuNDAzLS40NDgtMTQuNDEgMS42MzN6IiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIvPjxwYXRoIGQ9Im0xMS45OTggMy4xMzljLTMuNjMxIDAtNy4wNzktLjMyMy04LjM5NiAzLjA1Ny0uNTQ0IDEuMzk2LS40NjUgMy4yMDktLjQ2NSA1LjgwNSAwIDIuMjc4LS4wNzMgNC40MTkuNDY1IDUuODA0IDEuMzE0IDMuMzgyIDQuNzkgMy4wNTggOC4zOTQgMy4wNTggMy40NzcgMCA3LjA2Mi4zNjIgOC4zOTUtMy4wNTguNTQ1LTEuNDEuNDY1LTMuMTk2LjQ2NS01LjgwNCAwLTMuNDYyLjE5MS01LjY5Ny0xLjQ4OC03LjM3NS0xLjctMS43LTMuOTk5LTEuNDg3LTcuMzc0LTEuNDg3em0tLjc5NCAxLjU5N2M3LjU3NC0uMDEyIDguNTM4LS44NTQgOC4wMDYgMTAuODQzLS4xODkgNC4xMzctMy4zMzkgMy42ODMtNy4yMTEgMy42ODMtNy4wNiAwLTcuMjYzLS4yMDItNy4yNjMtNy4yNjUgMC03LjE0NS41Ni03LjI1NyA2LjQ2OC03LjI2M3ptNS41MjQgMS40NzFjLS41ODcgMC0xLjA2My40NzYtMS4wNjMgMS4wNjNzLjQ3NiAxLjA2MyAxLjA2MyAxLjA2MyAxLjA2My0uNDc2IDEuMDYzLTEuMDYzLS40NzYtMS4wNjMtMS4wNjMtMS4wNjN6bS00LjczIDEuMjQzYy0yLjUxMyAwLTQuNTUgMi4wMzgtNC41NSA0LjU1MXMyLjAzNyA0LjU1IDQuNTUgNC41NSA0LjU0OS0yLjAzNyA0LjU0OS00LjU1LTIuMDM2LTQuNTUxLTQuNTQ5LTQuNTUxem0wIDEuNTk3YzMuOTA1IDAgMy45MSA1LjkwOCAwIDUuOTA4LTMuOTA0IDAtMy45MS01LjkwOCAwLTUuOTA4eiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==">
      <strong class="navbar-item__instagram is-size-4">torveband</strong>
    </a>
    <a role="button" class="navbar-burger burger" @click="showBurger()" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    <div class="burger-menu hide">
      <div class="burger-menu__links">
        <router-link to="/" class="navbar-item navbar-item_bx-shadow-hide">Home</router-link>
        <router-link to="/listen" class="navbar-item navbar-item_bx-shadow-hide">Listen</router-link>
        <router-link to="/band" class="navbar-item navbar-item_bx-shadow-hide">Band</router-link>
        <router-link to="/contact" class="navbar-item navbar-item_bx-shadow-hide">Contact</router-link>
      </div>
    </div>
  </div>
  <div id="navbar" class="navbar-menu">
    <div class="navbar-start">
      <router-link to="/" class="navbar-item">Home</router-link>
      <router-link to="/listen" class="navbar-item">Listen</router-link>
      <router-link to="/band" class="navbar-item">Band</router-link>
      <router-link to="/contact" class="navbar-item">Contact</router-link>
    </div>
    <svg class="main-logo" viewBox="0 0 8000 8000"  height="100"  width="100">
      <path
      id="path14"
      style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
      d="M 621.461,8090.51 H 311.176 v -0.88 H 0 V 7779.34 H 311.176 V 0 h 310.285 v 7779.34 h 311.172 v 310.29 H 621.461 v 0.88" /><path
      id="path16"
      style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
      d="M 1711.46,311.172 H 1398.51 V 7779.34 h 312.95 z m 0,7778.458 h -312.95 v 0.88 H 1088.22 V 0 h 310.29 v 0.878906 h 312.95 V 0 h 310.28 V 0.878906 311.172 7779.34 v 310.29 0.88 h -310.28 v -0.88" /><path
      id="path18"
      style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
      d="M 3889.67,620.352 3576.72,1089.1 V 8090.51 H 3266.44 V 933.52 L 3889.67,0 h 310.29 V 8090.51 H 3889.67 V 620.352" /><path
      id="path20"
      style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
      d="m 2800.56,6534.64 h -312.94 v 1244.7 h 312.94 z m 0,1554.99 h -312.94 v 0.88 H 2177.33 V 0 h 310.29 v 6174.36 l 312.94,-728.83 V 0 h 310.29 v 5445.53 0.01 0 l -334.42,778.82 h 24.13 v -0.89 h 310.29 v 0.89 310.28 1244.7 310.29 0.88 h -310.29 v -0.88" /><path
      id="path22"
      style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
      d="m 5289.06,7779.34 v 310.29 h -623.23 v 0.88 H 4355.54 V 0 h 310.29 v 0.878906 h 623.23 V 311.172 H 4665.83 V 6224.36 h 623.23 v 310.28 h -623.23 v 1244.7 h 623.23" />
    </svg>
  </div>
</nav>
</template>
<script>
export default {
    name: 'Nav',
    methods: {
      showBurger() {
        document.querySelector('.burger-menu').classList.toggle('show');
      }
    }
}
</script>
<style lang="scss" scoped>
  nav {
    a {
      font-weight: bold;
      color: #fff;
      &:hover {
        color: brown;
      }
      &.router-link-exact-active {
        color: #d88d00;
      }
    }
  }
  .main-logo {
    transform: rotateX(180deg);
  }
  .navbar {
    position: fixed;
    max-width: 100%;
    min-width: 100%;
    background-color: black;
    &-brand {
      background-color: black;
      position: relative;
    }
    &-item__instagram {
      margin-left: .5rem;
    }
    &-item {
      transition: .3s;
    }
    &-item:not(.navbar-item__instagram-link):not(.navbar-item_bx-shadow-hide):hover {
      box-shadow: 0px 10px 1px #ddd, 0 10px 20px #ccc;
    }
  }
  .hide {
    display: none;
  }
  .show {
    display: block;
  }
  .burger-menu {
    background-color: black;
    position: absolute;
    right: 0;
    top: 3rem;
  }
</style>