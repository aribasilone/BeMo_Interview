<template>
    <div class="banner">
        <img id="banner" src="../assets/cda-interview-guide.jpg">
        <h1>CDA Interview Guide</h1>
    </div>
</template>

<style scoped>
.banner{
    position: relative;
    z-index: 1;
}
#banner{
    width: 100%;
    height: auto;
}
h1{
    font-weight: normal;
    font-size: 46px;
    color: #FFFFFF;
    font-family: Arial;
    width: 100%;
    margin: 0 auto;
    position: absolute;
    top: 45%;
    text-align: center;
    line-height: 1.5;
    letter-spacing: 0.22em;
    
}

h1::after{
    display:block;
    content: "";
    width: 60%;
    border-bottom-color: #FFFFFF;
    border-bottom: 2px solid;
    padding-bottom: 12px;
    height: 1px;    
    margin: 0px auto;
}
</style>