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
      <p class="about__description is-size-4">Formed in 2014 in city of Penza</p>
      <p class="about__description is-size-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis iusto nesciunt dolores dignissimos delectus cumque. Sit ipsa, eius reiciendis culpa voluptatem dicta eos temporibus ut natus explicabo facilis adipisci fugit!</p>
      <img src="../assets/band.jpg" alt="band">
    </div>
    <Footer />
  </div>
</template>
<script>
import Footer from '../components/Footer';
export default {
  name: 'about',
  components: {
    Footer
  }
}
</script>
<style lang="scss" scoped>
  .about {
    padding-top: 6rem;
    background-image: url('../assets/tray.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    @media (max-width: 1023px) {
      padding-top: 3rem;
    } 
    &__description {
      color: #fff;
      padding: 1rem 0 2rem 0;
      @media (max-width: 1023px) {
        padding: 1rem .5rem 2rem .5rem;
      }
    }
  }
  .hero.is-primary {
    background-color: black;
  }
  .org-description {
    margin-top: 50px;
  }
</style>
