<template>
   
    <div id="menuNav">
            <a id="logoLinkBox" href="/">
                <img id="logo" src="../assets/bemo-logo2.png" alt="Site Logo">
            </a>
            
            <nav id="navBar">
                <ul>
                    <li><router-link to="/" class="menuitems" v-bind:id="styleid1">Main</router-link></li>
                    <li><a class="menuitems" href="http://cdainterview.com/how-to-prepare-for-cda-interview.html">How to Prepare</a></li>
                    <li><a class="menuitems" href="http://cdainterview.com/sample-cda-interview-questions.html">CDA Interview Questions</a></li>
                    <li><router-link to="/contact-us" class="menuitems" v-bind:id="styleid2">Contact us</router-link></li>
                </ul>                
            </nav>
    </div>
    
</template>

<style scoped>
#menuNav{    
    position: fixed; 
    top:0;
    z-index: 2;

    display: flex;
    justify-content: space-between;
    width:100%;

    background-color: transparent;
    transition: background-color 0.4s;
}

#logoLinkBox{
    float: left;
    padding-left: 3%;
}
#logo{
    width: 167px;
    height: 100px;    
}

#navBar{
    float:right;
    padding-right:3%;
}

li{
    display: inline-block;
    padding: 30px 27px;
}

.menuitems{
    font-family: Arial;
    font-size: 17px;
    color: #000000;
    letter-spacing: 1px;
}
#currentPage::after, .menuitems:hover::after{
    display:block;
    content: "";
    width: 40%;
    border-bottom-color:  #000000;
    border-bottom: 1px solid;    
    margin: 0px auto;
}
#currentPage{
    color: #000066;
}
</style>

<script>
export default {
    data() {
        return {
            routeName: null,
            styleid1: null,
            styleid2: null,
            pathName: null,
        };
    },

    watch: {
        '$route': 'currentRoute'
    },

    methods: {
        currentRoute() {
            this.$nextTick(() => {
                this.routeName = this.$route.path;
                this.pathName = window.location.pathname;
                console.log(this.$route.path);
                console.log(this.pathName);
                if(this.pathName=="/home"){
                    document.getElementById("menuNav").style.position="static";
                }else{
                   document.getElementById("menuNav").style.position="fixed";
                }

                if(this.routeName=="/contact-us"){
                    this.styleid1="";
                    this.styleid2='currentPage';

                }else{
                    this.styleid1="currentPage";
                    this.styleid2='';
                }
            });
        },

        scrollListener: function(){
            if(window.scrollY > 50){
                document.getElementById("menuNav").style.backgroundColor="#ffffffd2";
            }else{
                document.getElementById("menuNav").style.backgroundColor="transparent";
            }
        }
    },
    
    created(){
        this.currentRoute()
    },

    mounted: function () {
        window.addEventListener('scroll', this.scrollListener)
    },
}
</script>