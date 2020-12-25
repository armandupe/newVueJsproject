<template>
  <div class="events container">
    <h2 class="events__gallery subtitle is-3">GALLERY</h2>
    <div class="columns is-multiline">
      <div
        v-for="event in events"
        :event="event"
        :key="event.id"
        class="column is-one-quarter"
      >
        <router-link :to="'/event/' + event.id">
          <EventCard :event="event" />
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
import EventCard from "@/components/EventCard";
export default {
  name: "EventsList",
  components: {
    EventCard,
  },
  data() {
    return {
      event: {},
      events: [
        {
          id: 1,
          previewImg: "1_moscow",
          name: "Moscow",
          location: 'Bar "USPEX"',
          date: "07-03-2020",
        },
        {
          id: 2,
          previewImg: "5_samara",
          name: "Samara",
          location: "Houston Bar",
          date: "31-08-2019",
        },
        {
          id: 3,
          previewImg: "1_saratov",
          name: "Saratov",
          location: 'Bar "Iskra"',
          date: "08-03-2018",
        },
        {
          id: 4,
          previewImg: "6_voronezh",
          name: "Voronezh",
          location: "EANA",
          date: "14-04-2018",
        },
      ],
    };
  },
};
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