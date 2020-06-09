<template>
    <div class="container">
        <label>Make Page Indexable</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>

        <br/>
        <label>Change Image</label>
        <select name="cars" id="cars">
            <option value="volvo">A</option>
            <option value="saab">B</option>
            <option value="mercedes">C</option>
            <option value="audi">D</option>
        </select>

        <br/>
        <h2>SEO - Meta Tags</h2>
        <label>Title</label>
        <input type="text">  
        <br/>      
        <label>Description</label>
        <textarea row="5" col="38"></textarea>
        <br/>
        <button>Update Meta</button>

        <br/>
        <h2>Marketing and Analytics</h2>
        <label>Facebook Pixel Code</label>
        <textarea></textarea>
        <label>Google</label>
        
        <br/>
        <h2>Contact Email</h2>
        <input type="text">
        <button>Update Email</button>
    </div>
    
</template>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
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
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

</style>

<script>
export default {
    name: "Dash"
}
</script>