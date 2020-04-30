<template>
 <div class="event-card">
    <div class="card">
      <img class="card__img" :src="event.previewImg" :alt="event.name">
      <div class="card-content">
        <h2 class="is-size-4 has-text-weight-bold">{{ event.name }}</h2>
        <small class="event-date">{{ event.date }}</small>
        <span>{{ event.location }}</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: [
    'event'
  ]
}
</script>
<style lang="scss" scoped>
  .card {
    height: 400px;
    background-position: center;
    background-size: cover;
    text-align: center;
    position: relative;
    transition: .3s;
    &:hover {
        opacity: .8;
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
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.35);
    top: 0;
    padding: 10px;
    height: 400px;
    width: 100%;
    span {
      font-size: 18px;
      text-align: center;
      width: 100%;
      position: absolute;
      bottom: 10px;
      right: 0;
    }
    h2 {
      margin-top: 10px;
    }
  }
  .event-date {
    background-color: #151515;
    color: #FFF;
    font-size: .75em;
    padding: 2px 10px;
    position: absolute;
    top: 0;
    right: 0;
  }
</style>