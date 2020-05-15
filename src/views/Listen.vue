<template>
  <div class="listen">
    <div class="listen__wrap">
      <div class="hero is-primary">
        <div class="hero-body">
          <div class="container">
            <h1 class="listen__title is-size-1">TORVE MUSIC</h1>        
          </div>
        </div>
      </div>
      <p class="listen__torve">LISTEN TO TORVE</p>
      <div class="listen__container">
        <div class="listen__link-container">
          <a target="_blank" href="https://music.apple.com/us/album/from-the-land-of-the-barbarians/1325611993" class="listen__link">APPLE MUSIC</a>
        </div>
        <div class="listen__link-container">
          <a target="_blank" href="https://play.google.com/store/music/artist/Torve?id=A7clz3d7y73247zhukp4yppfmui&hl=ru" class="listen__link">GOOGLE MUSIC</a>
        </div>
        <div class="listen__link-container">
          <a target="_blank" href="https://music.yandex.ru/artist/5527534" class="listen__link">YANDEX MUSIC</a>
        </div>
        <div class="listen__link-container">
          <a target="_blank" href="https://open.spotify.com/artist/5AraryBEotOjDX7sQTRQ3z" class="listen__link">SPOTIFY</a>
        </div>
        <div class="listen__link-container">
          <a target="_blank" href="https://www.deezer.com/en/artist/87255592" class="listen__link">DEEZER</a>
        </div>
      </div>
    </div>
    <Footer />
  </div>
  
</template>
<script>
import Footer from '../components/Footer';
export default {
  name: 'listen',
  components: {
    Footer
  }
}
</script>
<style lang="scss">
  .hero.is-primary {
    background-color: black;
  }
  .org-description {
    margin-top: 50px;
  }
  .listen {
    padding-top: 6rem;
    background-image: url('../assets/tray.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
	  flex-direction: column;
	  min-height: 100%; 
    @media (max-width: 1023px) {
      padding-top: 3rem;
    }
    &__wrap {
        flex: 1 0 auto;
    }
    &__title {
      text-align: center;
      font-weight: bold;
    }
    &__torve {
      text-align: center;
      padding: 3rem 0 3rem 0;
      font-weight: bold;
      font-size: 3rem;
      color: #fff;
    }
    &__container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    &__link-container {
      margin-bottom: 1rem;
    }
    &__link {
      display: block;
      color: #e7d0ba;
      font-weight: bold;
      letter-spacing: .1rem;
      border: 2px solid #e7d0ba;
      padding: 2rem 4rem;
      transition: .3s;
      &:hover {
        background-color: #e7d0ba;
        color: black;
      }
    } 
  }
  
</style>
    
