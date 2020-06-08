<template>
    <div>
        <!-- <a href="#">Scroll</a> -->
        <transition name="fade">
        <a href="#" class="scroll" v-show="showArrow">Scroll</a>
        <!-- could use v-if statement that checks scrolling funct -->
        </transition>
        
    </div>
</template>

<style scoped>
.scroll{
    width: 80px;
    height: 80px;
    position:fixed;
    z-index: 2;
    
    bottom:50px;
    right: 10px;
    text-indent:-9999px;
    width: 70px;
    right: 0;
    background: url('../assets/up1.png') no-repeat;
}

.fade-enter-active, .fade-leave-active{
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to{
    opacity: 0
}
</style>

<script>
export default {
    data(){
        return{
            showArrow: false
        }
        
    },
    methods: {
        scrollListener: function() {
            this.showArrow = window.scrollY > 120
        }
    },

    mounted: function () {
        window.addEventListener('scroll', this.scrollListener)
    },
}
</script>
