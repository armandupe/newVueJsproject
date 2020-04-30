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
        <p><router-link :to="'/'">Back</router-link></p>
        <p class="is-size-4 description">{{ event.description }}</p>
        <div class="event-images columns is-multiline has-text-centered">
          <div v-for="image in event.images" :key="image.id" class="event-images__img-container column is-one-third">
            <img class="event-images__img" :src="image" :alt="event.name">
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: 'EventSingle',
  data () {
    return {
      events: [
        {
          id: 1,
          name: 'Moscow',
          description: 'Spend an elegant night of dinner and dancing with us as we raise money for our new rescue farm.',
          images: [
            'https://sun9-23.userapi.com/c858424/v858424182/190070/ABTytClkPg0.jpg',
            'https://sun9-50.userapi.com/c858424/v858424182/190034/z0_Rwy5QqP8.jpg',
            'https://sun9-8.userapi.com/c858424/v858424182/19005c/qK52JrACMMw.jpg',
            'https://sun9-31.userapi.com/c858424/v858424182/1900be/GjtDfNXl084.jpg',
            'https://sun9-57.userapi.com/c858424/v858424182/1900a0/7mJvEs94PrM.jpg',
            'https://sun9-43.userapi.com/c858424/v858424182/1900aa/ZdVWodJKNMs.jpg',
            'https://sun9-61.userapi.com/c858424/v858424182/1900b4/PiYp5pEGSVU.jpg',
            'https://sun9-30.userapi.com/c858424/v858424182/1900c8/6x3QQQWuvVQ.jpg',
          ],
          location: 'Бар "УСПЕХ"',
          date: '07-03-2020',
        },
        {
          id: 2,
          name: 'Samara',
          description: 'Come to our donation drive to help us replenish our stock of pet food, toys, bedding, etc. We will have live bands, games, food trucks, and much more.',
          images: [
            'https://sun9-5.userapi.com/c855128/v855128712/eb401/mzT366woBjU.jpg',
            'https://sun9-54.userapi.com/c855128/v855128712/eb40b/IBTG0qVSXOk.jpg',
            'https://sun9-55.userapi.com/c855128/v855128712/eb4a1/XDjooREiZ0Y.jpg',
            'https://sun9-31.userapi.com/c855128/v855128712/eb451/BbP8_5icXTc.jpg',
            'https://sun9-21.userapi.com/c855128/v855128712/eb497/i3lkOljfiYs.jpg',
            'https://sun9-65.userapi.com/c855128/v855128712/eb4fb/3m3GvGZtJX0.jpg',
            'https://sun9-19.userapi.com/c855128/v855128712/eb555/XGF6GLbEEEM.jpg',
            'https://sun9-72.userapi.com/c855128/v855128712/eb541/o7SkEuCTdQU.jpg',
          ],
          location: 'Bar Houston',
          date: '31-08-2019',
        },
          {
          id: 3,
          name: 'Saratov',
          description: 'Come to our donation drive to help us replenish our stock of pet food, toys, bedding, etc. We will have live bands, games, food trucks, and much more.',
          images: [
            'https://sun9-62.userapi.com/c846419/v846419278/7dbd/qyTUWvmL-jY.jpg',
            'https://sun9-42.userapi.com/c846216/v846216278/81bb/CsEDDwM-70Y.jpg',
            'https://sun9-38.userapi.com/c840625/v840625278/69a37/o1rIEbU50QM.jpg',
            'https://sun9-44.userapi.com/c834302/v834302278/fb114/XM1tbDElAxY.jpg',
            'https://sun9-34.userapi.com/c844724/v844724278/c9f9/CC7RDQ_G7tU.jpg',
            'https://sun9-24.userapi.com/c844616/v844616278/d347/QpOWtouxXlc.jpg',
            'https://sun9-4.userapi.com/c846018/v846018278/82b1/7hBx0mAfRbw.jpg',
            'https://sun9-44.userapi.com/c845124/v845124278/d124/PGYQKitxncU.jpg',
          ],
          location: 'Бар Искра',
          date: '08-03-2018',
        },
          {
          id: 4,
          name: 'Voronezh',
          description: 'Come to our donation drive to help us replenish our stock of pet food, toys, bedding, etc. We will have live bands, games, food trucks, and much more.',
          images: [
            'https://sun9-13.userapi.com/c834202/v834202094/d51c2/u2gWzyqC-oo.jpg',
            'https://sun9-38.userapi.com/c834202/v834202094/d51b8/0pW9R4Jveqg.jpg',
            'https://sun9-22.userapi.com/c834202/v834202094/d51ea/7_RR9At5gvw.jpg',
            'https://sun9-54.userapi.com/c834202/v834202094/d523a/zq_-jew7PYk.jpg',
            'https://sun9-25.userapi.com/c834202/v834202094/d5208/R9mMMDsDtp4.jpg',
            'https://sun9-68.userapi.com/c834202/v834202094/d521c/aF6OIkH8dIU.jpg',
            'https://sun9-16.userapi.com/c834202/v834202094/d5262/by93yJuiqrg.jpg',
            'https://sun9-41.userapi.com/c834202/v834202094/d526c/8d24EAVFz1U.jpg',
          ],
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
  }
}
</script>
<style lang="scss" scoped>
  .event-single {
    margin-top: 30px;
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
    }
    &__img {
        min-height: 340px;
        object-fit: cover;
    }
  }
  .description {
    margin-bottom: 30px;
  }
</style>