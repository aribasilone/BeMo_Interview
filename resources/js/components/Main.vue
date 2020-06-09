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
  
  metaInfo() {
    return { 
      title: "",
      meta: [
        { name: 'description', content: ''},   
        { name: 'robots', content: 'noindex'} 
      ]
    }
  }
  // https://medium.com/js-dojo/how-to-add-dynamic-meta-tags-to-your-vue-js-app-for-google-seo-b827e8c84ee9
}
</script>
