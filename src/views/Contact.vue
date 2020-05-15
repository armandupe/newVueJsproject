<template>
<div class="contact">
    <div class="contact__wrap">
        <h1 class="contact__title">CONTACT US</h1>
        <h2 class="contact__email"><a class="contact__email-link" href="mailto:symbolic28@gmail.com">SYMBOLIC28@GMAIL.COM</a></h2> 
    </div> 
    <Footer />
</div>
</template>
<script>
import Footer from '../components/Footer';
export default {
  name: 'contact',
  components: {
    Footer
  }
}
</script>
<style lang="scss">
.contact {
    padding-top: 6rem;
    background-image: url('../assets/tray.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
	flex-direction: column;
	min-height: 100%;
    &__wrap {
        flex: 1 0 auto;
    }
    &__title {
        text-align: center;
        color: #fff;
        font-size: 3rem;
        padding-top: 16rem;
    }
    &__email {
        text-align: center;
        color: #fff;
        font-size: 2rem;
        padding-bottom: 16rem;
    }
    &__email-link {
        @media (max-width: 480px) {
            font-size: 1.7rem;
        }
    } 
}

</style>