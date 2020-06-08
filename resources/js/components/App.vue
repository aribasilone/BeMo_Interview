<template>
  <div id="appall">
    <Nav/>
    <router-view/>
    <!-- <h1>Test something</h1> -->
    <Footer/>
    <Scroll/>
  </div>
</template>

<script>
import Footer from './Footer.vue'
import Scroll from './Scroll'
import Nav from './Nav'

export default {
  name: 'App',
  components: {
    Nav,
    Footer,
    Scroll
  },

  mounted(){
    console.log('here');    
  }
}
</script>


<style>
body{
  margin:0;
}
#appall {
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
