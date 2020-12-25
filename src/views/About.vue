<template>
  <div class="about">
    <div class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title is-size-1">History of Torve</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <p class="about__description is-size-4">
        Since 2014. From Penza, Russia
      </p>
      <p class="about__description is-size-4">
        Dark / metallic / chaotic hardcore band.
      </p>
      <ul class="about__lineup is-size-4">
        <li>Anton - Throat</li>
        <li>Dmitrii - Guitar</li>
        <li>Vladimir - Bass</li>
        <li>Stas - Drums</li>
      </ul>
      <img src="../assets/band.jpg" alt="band" />
    </div>
    <Footer />
  </div>
</template>
<script>
import Footer from "../components/Footer";
export default {
  name: "about",
  components: {
    Footer,
  },
};
</script>
<style lang="scss" scoped>
.about {
  padding-top: 6rem;
  background-image: url("../assets/tray.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  @media (max-width: 1023px) {
    padding-top: 3rem;
  }
  &__description {
    color: #fff;
    padding: 1rem 0 1rem 0;
    @media (max-width: 1023px) {
      padding: 1rem 0.5rem 2rem 0.5rem;
    }
  }
  &__lineup {
    color: #fff;
    margin-bottom: 2rem;
  }
}
.hero.is-primary {
  background-color: #000;
}
.org-description {
  margin-top: 50px;
}
</style>
