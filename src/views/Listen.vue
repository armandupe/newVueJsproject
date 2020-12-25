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
        <div
          class="listen__link-container"
          v-for="link in links"
          :key="link.id"
        >
          <a class="listen__link" :href="link.link" target="_blank">{{
            link.title
          }}</a>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>
<script>
import Footer from "../components/Footer";
export default {
  name: "listen",
  components: {
    Footer,
  },
  data() {
    return {
      links: [
        {
          id: 1,
          title: "SPOTIFY",
          link: "https://open.spotify.com/artist/5AraryBEotOjDX7sQTRQ3z",
        },
        {
          id: 2,
          title: "APPLE MUSIC",
          link:
            "https://music.apple.com/us/album/from-the-land-of-the-barbarians/1325611993",
        },
        {
          id: 3,
          title: "YANDEX MUSIC",
          link: "https://music.yandex.ru/artist/5527534",
        },
        {
          id: 4,
          title: "DEEZER",
          link: "https://www.deezer.com/en/artist/87255592",
        },
      ],
    };
  },
};
</script>
<style lang="scss">
.hero.is-primary {
  background-color: #000;
}
.org-description {
  margin-top: 50px;
}
.listen {
  padding-top: 6rem;
  background-image: url("../assets/tray.jpg");
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
    color: var(--primary-font-color);
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
    color: var(--listen-font-color);
    font-weight: bold;
    letter-spacing: 0.1rem;
    border: 2px solid var(--listen-border-color);
    padding: 2rem 4rem;
    transition: 0.3s;
    &:hover {
      background-color: var(--listen-background-color);
      color: #000;
    }
  }
}
</style>
    
