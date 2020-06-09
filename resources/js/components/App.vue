<template>
  <div id="appall">
    <Nav/>
    <router-view/>
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

  data(){
    return{
      pixel:"//some script"
    }
  },

  mounted(){
    // console.log('here');   
    this.addPixel(); 
  },

  // created(){
  //   this.addPixel();
  // },

  methods:{
    addPixel(){
    let script = document.createElement('script');
    script.innerHTML=this.pixel;
    // Append script
    
    document.getElementsByTagName('head')[0].appendChild(script);
    }
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
