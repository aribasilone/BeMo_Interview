<template>
    <div class="container">
        <h1>Editing: {{ currentEditPage }}</h1>
        <p><b>**to change page: scroll to bottom to "Live view" and hit the desired page link in the navigation bar</b></p><br/>
        <h2>Page Banner</h2>
        <div class="flex">
        <label class="labelLeft">Change Image</label>
        <select class="flexIn1">
            <option value="">A</option>
            <option value="">B</option>
            <option value="">C</option>
            <option value="">D</option>
        </select>
        </div>

        <br/>
        <br/>
        <h2>SEO - Meta Tags</h2>

        <div class="flex">
        <label class="labelLeft">Make Page Indexable</label>
        <label class="switch">
        <input type="checkbox" v-model="indexable" @change="check($event)">
        <span class="slider round"></span>
        </label>
        </div>
        <br/>

        <div class="flex">
        <label class="labelLeft">Title</label>
        <input class="flexIn1" type="text" v-model="meta_title">  
        </div>
        <br/>  

        <div class="flex">
        <label class="labelLeft">Description</label>
        <textarea class="flexIn1" row="5" col="38" v-model="meta_descr"></textarea>
        </div>
        <button @click="buttonUp">Update Meta Title/Description</button>

        <br/>
        <br/>
        <h2>Marketing and Analytics</h2>
        <div class= "flex">
        <label>Facebook Pixel Code</label>
        <textarea class="flexIn2" v-model="fb_pixel"></textarea>
        <label>Google</label>
        <textarea class="flexIn2" v-model="google"></textarea>
        </div>
        <button @click="buttonUp">Update Pixel/Analytics</button>
        
        <br/>
        <h2>Contact Email</h2>
        <input type="text">
        <button>Update Email</button>
    </div>
    
</template>

<style>
.flex{
  display:flex;
  /* justify-content: space-between; */
  color:rgb(20, 94, 155);
}
.labelLeft{
  float:left;
  min-width:20%;
}

.flexIn1{
  float: right;
  margin-left: 20%;
  width:100%;
}

.flexIn2{
  margin-left: 5%;
  margin-right:5%;
}

button{
  margin: 3% 0 5% 0;
  border-color:#cccccc; 
  transition: 0.3s; 
}

button:hover{
  background:#145e9b;
  border-color: #000000;
  color:#FFFFFF;
  font-weight:bold;
}

.switch {
  position: relative;
  /* display: inline-block; */
  width: 60px;
  height: 34px;
  float:right;
  margin-left: 20%;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 34px;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  border-radius: 50%;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #145e9b;
}

input:focus + .slider {
  box-shadow: 0 0 1px #145e9b;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

</style>

<script>
export default {
  name: "Dash",
  data(){
    return{
      currentEditPage:'',
      page_name: '',
      indexable: false,
      meta_title:'',
      meta_descr:'',
      fb_pixel:'',
      google:'',

      pageObj:{
        page_name: '',
        indexable: false,
        image_name:'',
        meta_title:'',
        meta_descr:'',
        fb_pixel:'',
        google:'',
        contact_email:''
      }
    }
  },
  
  created(){
    this.checkRouter();
  },

  watch: {
        '$route': 'checkRouter'
  },
  
  methods:{

    checkRouter(){
        //do for change in route
         this.$nextTick(() => {
           if(this.$route.path=="/"){
          this.currentEditPage = "main"

        }else{
          this.currentEditPage = "contact-us";
        }
        //refresh dash for selected page
        this.fetchPages();
        });
    },

    fetchPages(){
       console.log(this.currentEditPage);
      fetch(`/api/page/${this.currentEditPage}`).then(res=>res.json()).then(res =>{
        console.log(res);

        this.page_name=res.page_name;
        if(res.indexable==1||res.indexable==true){
          this.indexable=true;
        }
        else{
          this.indexable=false;
        }

        this.meta_title=res.meta_title;
        this.meta_descr=res.meta_descr;

      })
    },

    check(e) {
      console.log(this.indexable,e);
      this.compilePageObj();
      this.putFunct();
    },

    compilePageObj(){
      this.pageObj.page_name=this.page_name;
      this.pageObj.indexable=this.indexable;
      this.pageObj.meta_title=this.meta_title;
      this.pageObj.meta_descr=this.meta_descr;
    },

    putFunct(){
      console.log(JSON.stringify(this.pageObj));

      fetch('/api/page', {
        method: 'put',
        body: JSON.stringify(this.pageObj),
        headers: {
          'content-type': 'application/json'
        }
      }).then(res => res.json()).then(res => {console.log(res)}).catch(err => console.log(err));

    },

    reload4LiveView(){
      window.location.reload(true);
      //true arg to force it to go to server to get new stuff and not cache
    },

    buttonUp(){
      this.compilePageObj();
      this.putFunct();
      this.reload4LiveView();
    },

    updatePixels(){
      let appPageObj ={
        page_name:"app",
        fb_pixel:this.fb_pixel,
        google:this.google
      }
    }
  }
}
</script>