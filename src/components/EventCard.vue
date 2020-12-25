<template>
  <div class="event-card">
    <div class="card">
      <img
        class="card__img"
        :src="buildImgSrc(event.previewImg)"
        :alt="event.name"
      />
      <div class="card-content">
        <h2 class="card-content__name is-size-4 has-text-weight-bold">
          {{ event.name }}
        </h2>
        <small class="event-date">{{ event.date }}</small>
        <span class="card-content__location">{{ event.location }}</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["event"],
  methods: {
    buildImgSrc(previewImg) {
      return require(`../assets/events/${previewImg}.jpg`);
    },
  },
};
</script>
<style lang="scss" scoped>
.card {
  height: 400px;
  background-position: center;
  background-size: cover;
  text-align: center;
  position: relative;
  transition: 0.3s;
  &:hover {
    opacity: 0.8;
  }
  &__img {
    position: absolute;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    max-height: 400px;
  }
}
.card-content {
  padding-top: 50px;
  position: absolute;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.35);
  top: 0;
  padding: 10px;
  height: 400px;
  width: 100%;
  &__name {
    font-size: 18px;
    text-align: center;
    width: 100%;
    position: absolute;
    bottom: 10px;
    right: 0;
  }
  &__location {
    margin-top: 10px;
  }
}
.event-date {
  background-color: #151515;
  color: #fff;
  font-size: 0.75em;
  padding: 2px 10px;
  position: absolute;
  top: 0;
  right: 0;
}
</style>