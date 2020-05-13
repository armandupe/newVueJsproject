<template>
  <div class="event-single">
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            {{ event.name }}
          </h1>
          <h2 class="subtitle ">
            <p><strong>Date:</strong> {{ event.date }}</p>
            <p><strong>Location:</strong> {{ event.location }}</p>
          </h2>
        </div>
      </div>
    </section>
    <section class="event-content">
      <div class="container">
        <p class="back-link"><router-link :to="'/'">← Home</router-link></p>
        <div class="event-images columns is-multiline has-text-centered">
          <div v-for="image in event.images" :key="image.id" class="event-images__img-container column is-one-third">
            <a data-fancybox="gallery" :href="buildImgSrc(image)"><img class="event-images__img" :src="buildImgSrc(image)" :alt="event.name"></a>
          </div>
        </div>
      </div>
    </section>
    <Footer />
  </div>
</template>
<script>
import Footer from '../components/Footer';
export default {
  name: 'EventSingle',
  components: {
    Footer
  },
  data () {
    return {
      events: [
        {
          id: 1,
          name: 'Moscow',
          images: ['1_moscow', '2_moscow', '3_moscow', '4_moscow', '5_moscow', '6_moscow', '7_moscow', '8_moscow'],
          location: 'Bar "USPEX"',
          date: '07-03-2020',
        },
        {
          id: 2,
          name: 'Samara',
          images: ['1_samara', '2_samara', '3_samara', '4_samara', '5_samara', '6_samara', '7_samara', '8_samara'],          
          location: 'Bar Houston',
          date: '31-08-2019',
        },
          {
          id: 3,
          name: 'Saratov',
          images: ['1_saratov', '2_saratov', '3_saratov', '4_saratov', '5_saratov', '6_saratov', '7_saratov', '8_saratov'],
          location: 'Bar "Iskra"',
          date: '08-03-2018',
        },
          {
          id: 4,
          name: 'Voronezh',
          images: ['1_voronezh', '2_voronezh', '3_voronezh', '4_voronezh', '5_voronezh', '6_voronezh', '7_voronezh', '8_voronezh'],
          location: 'EANA',
          date: '14-04-2018',
        }
      ],
      event: {}
    }  
  },
  created() {
    const ID = Number(this.$route.params.id);
    let event = this.events.find(event => event.id === ID);
    this.event = event;
  },
  methods: {
    buildImgSrc(image) {
      return require(`../assets/events/${image}.jpg`);
    }
  }
}
$.fancybox.defaults.loop = "true";
</script>
<style lang="scss" scoped>
  .event-single {
    padding-top: 6rem;
    background-image: url('../assets/tray.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
  }
  .hero-body {
      background-color: black;
  }
  .hero {
    margin-bottom: 70px;
  }
  .event-images {
    margin-top: 50px;
    margin-bottom: 50px;
     &__img-container {
        max-width: 340px;
        max-height: 340px;
        overflow-y: hidden;
        @media (max-width: 768px) {
          max-width: inherit;
          max-height: inherit;
        }
    }
    &__img {
        min-height: 340px;
        object-fit: cover;
    }
  }
  .description {
    margin-bottom: 30px;
  }
  .back-link {
    font-size: 2rem;
  }
  .back-link a {
    color: brown;
  }
  .back-link a:hover {
    color: #fff;
  }
</style>