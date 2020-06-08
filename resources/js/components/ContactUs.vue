<template>
  <div id="contactUs">
    <ContactBanner/>
    <ContactForm/>
    
  </div>
</template>

<script>
import ContactBanner from './ContactBanner.vue'
import ContactForm from './ContactForm.vue'


export default {
  name: 'ContactUs',
  components: {
    ContactBanner,
    ContactForm
  }
}
</script>

<style>
body{
  margin:0;
}
#contactUs {
  font-family: Arial, Verdana, Helvetica, sans-serif;
  font-size: 16px;
  text-align: justify;
  color: #373737;
  margin:auto;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /* color: #2c3e50; */
  /* margin-top: 60px; */
}
</style>