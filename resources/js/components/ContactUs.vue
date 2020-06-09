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
  },

  data(){
    return{
      title:"",
      descr:"",
      indexable: 'noindex',
      
    }
  },
  
  metaInfo() {
    return { 
      title: this.title,
      meta: [
        { name: 'description', content: this.descr},   
        { name: 'robots', content: this.indexable} 
      ]
    }
  },

  created(){
    this.updateMeta();
  },

  methods:{
    updateMeta(){
      fetch('api/page/contact-us').then(res=>res.json()).then(res =>{
        console.log(res);
        if(res.indexable==1 ||res.indexable==true ){
          this.indexable="all";
        }else{
          this.indexable="noindex";
        }
        console.log(this.indexable);

        this.title = res.meta_title;
        this.descr = res.meta_descr;

      });
    }
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