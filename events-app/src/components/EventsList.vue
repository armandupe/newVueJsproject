<template>
 <div class="events container">
    <h2 class="events__gallery subtitle is-3">GALLERY</h2>
    <div class="columns is-multiline">
      <div v-for="event in events" :event="event" :key="event.id" class="column is-one-quarter">
        <router-link :to="'/event/' + event.id">
          <EventCard :event="event" />
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
import EventCard from '@/components/EventCard';
export default {
  name: 'EventsList',
  components : {
    EventCard
  },
  data () {
    return {
      event: {},
      events: [
        {
          id: 1,
          previewImg: 'https://sun9-50.userapi.com/c858424/v858424182/190034/z0_Rwy5QqP8.jpg',
          name: 'Moscow',
          location: 'Bar "USPEX"',
          date: '07-03-2020',
        },
        {
          id: 2,
          previewImg: 'https://sun9-72.userapi.com/c855128/v855128712/eb541/o7SkEuCTdQU.jpg',
          name: 'Samara',
          location: 'Houston Bar',
          date: '31-08-2019',
        },
        {
          id: 3,
          previewImg: 'https://sun9-62.userapi.com/c846419/v846419278/7dbd/qyTUWvmL-jY.jpg',
          name: 'Saratov',
          location: 'Bar "Iskra"',
          date: '08-03-2018',
        },
        {
          id: 4,
          previewImg: 'https://sun9-16.userapi.com/c834202/v834202094/d5262/by93yJuiqrg.jpg',
          name: 'Voronezh',
          location: 'EANA',
          date: '14-04-2018',
        }
      ]
    }  
  }
}
</script>
<style lang="scss" scoped>
  .events {
    margin-top: 100px;
    text-align: center;
    &__gallery {
      color: #fff;
    }
  }
</style>