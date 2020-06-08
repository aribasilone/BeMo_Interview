<template>
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
  }
}
</script>
