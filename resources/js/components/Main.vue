<template>
  <!-- <head>
    <meta name="robots" content="noindex">
  <head> -->

  <div id="main">
    <Banner/>
    <GuideOverview/>
    <GuidePurpose/>
  </div>
</template>

<script>
import Banner from './Banner.vue'
import GuideOverview from './GuideOverview'
import GuidePurpose from './GuidePurpose'

export default {
  name: 'Main',
  components: {
    Banner,
    GuideOverview,
    GuidePurpose
  },

  data(){
    return{
      title:"",
      desc:"",
      indexable: 'noindex',
      
    }
  },
  
  metaInfo() {
    return { 
      title: this.title,
      meta: [
        { name: 'description', content: this.desc},   
        { name: 'robots', content: this.indexable} 
      ]
    }
  },
  // https://medium.com/js-dojo/how-to-add-dynamic-meta-tags-to-your-vue-js-app-for-google-seo-b827e8c84ee9

  created(){
    this.updateMeta();
  },

  methods:{
    updateMeta(){
      fetch('api/pages').then(res=>res.json()).then(res =>{
        console.log(res[0]);
        if(res[0].indexable==1 ||res[0].indexable==true ){
          this.indexable="all";
        }else{
          this.indexable="noindex";
        }
        console.log(this.indexable);

        this.title = res[0].meta_title;
        this.desc = res[0].meta_desc;

      });
    }
  }
}
</script>
