<template>
<div class="home">
  <section class="hero is-dark">
    <div class="hero-body"></div>
  </section>
  <section class="home-video">
    <iframe class="home-video__iframe" width="960" height="640" src="https://www.youtube.com/embed/FMENKm11RTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="home-video__iframe" width="960" height="640" src="https://www.youtube.com/embed/NW7VP79KBQw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
  <EventsList />
  <Footer />
</div>
</template>
<script>
import EventsList from '../components/EventsList';
import Footer from '../components/Footer';
export default {
  name: 'home',
  components: {
    EventsList,
    Footer
  }
}
</script>
<style lang="scss" scoped>
  .home {
    background-image: url('../assets/tray.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
  }
  .hero {  
    text-align: center;
    background-image: url('../assets/background.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 650px;
  }
  .hero-body .title {
    text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.6);
    padding: 40px 0 20px 0;
    font-size: 60px;
  }
  .subtitle {
    text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.7);
    font-size: 30px;
  }
  .button-block {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    position: absolute;
    bottom: -150px;
    .button {
      margin-right: 50px;
      padding-left: 50px;
      padding-right: 50px;
    }
    .welcome {
      width: 400px;
      padding: 10px;
      margin-left: auto;
      margin-right: auto;
    }
  }
  .is-xl {
    font-size: 1.7rem;
  }
  .home-video {
    padding: 3rem 0 3rem 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    &__iframe {
      padding: 1rem 0 1rem 0;
    }
  }
</style>