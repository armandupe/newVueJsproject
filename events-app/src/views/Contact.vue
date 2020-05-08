<template>
<div class="contact">
    <form class="contact-form">
    <ul class="contact-form__form-style">
        <li><label>Full Name <span class="contact-form__required">*</span></label><input type="text" name="field1" class="contact-form__field-divided" placeholder="First" required/> <input type="text" name="field2" class="contact-form__field-divided" placeholder="Last" required/></li>
        <li>
            <label>Email <span class="contact-form__required">*</span></label>
            <input type="email" name="field3" class="contact-form__field-long" required/>
        </li>
        <li>
            <label>Subject <span class="contact-form__required">*</span></label>
            <select name="field4" class="contact-form__field-select">
            <option value="Advertise">Advertise</option>
            <option value="Partnership">Partnership</option>
            <option value="General Question">General</option>
            </select>
        </li>
        <li>
            <label>Your Message <span class="contact-form__required">*</span></label>
            <textarea name="field5" id="field5" class="contact-form__field-long contact-form__field-textarea" required></textarea>
        </li>
        <li>
            <input class="contact-form__submit" type="submit" value="Submit" />
        </li>
    </ul>
    </form>
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
}

.contact-form {
    padding: 10rem 0 10rem 0;
}

.contact-form__form-style {
	margin:10px auto;
	max-width: 800px;
    min-width: 320px;
	padding: 20px 12px 10px 20px;

    &__li {
        padding: 0;
        display: block;
        list-style: none;
        margin: 10px 0 0 0;
    }
    & label {
        color: #fff;
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    & input:focus, textarea:focus, select:focus {
        box-shadow: 0 0 8px #88D5E9;
	    border: 1px solid #88D5E9;
    }
}

.contact-form__field-divided,
.contact-form__field-long,
.contact-form__field-select,
.contact-form__field-textarea {
    width: 100%;
    box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 1rem 2rem 1rem .5rem;
    margin:0px;
    transition: all 0.30s ease-in-out;
    outline: none;	
}
.contact-form__field-divided {
	width: 49.7%;
}

.contact-form__submit {
    width: 100%;
	background: #4B99AD;
    margin-top: 1rem;
	padding: 1rem 2rem;
	border: none;
	color: #fff;
}
.contact-form__submit:hover {
	background: #4691A4;
    cursor: pointer;
	box-shadow:none;
}
.contact-form__required {
	color:red;
}
</style>