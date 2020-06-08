<template>
    <div class="contactForm">
        <div class="contactMessage">
            <h3>BeMo Academic Consulting Inc.</h3>
            <span class="contactType">Toll Free:</span>
            <span class="contactInfo">1-855-900-BeMo (2366)</span>
            <br/>
            <span class="contactType">Email:</span>
            <span class="contactInfo">info@bemoacademicconsulting.com</span>
        </div>
        
        <form action="" method="post" id="form">
            <label>Name: *</label><br/>
            <input class="inputText" type="text" name="fName" size="40"><br>
            
            <label>Email Address: *</label><br/>
            <input class="inputText" type="text" name="fEmail" size="40"><br>
            
            <label>How can we help you? *</label><br/>
            <textarea class="inputText" name="fText" rows="8" cols="38"></textarea><br>
            <input class="button" type="reset" name="resetButton" value="Reset">
            <input class="button" type="submit" name="submitButton" value="Submit">
        </form>
        <br>
    
    <div class="disclose">
        <p><b><u>Note</u></b>: If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy &amp; paste the email address)</p>
    </div>
    <br>

</div>
</template>

<style scoped>
.contactForm{
    padding-left:3.5%;
    padding-right: 3.5%;
    background-color: #FFFFFF;
    line-height: 2.0;
    letter-spacing: 2px;
}

h3{
    font-size: 17px;
    font-weight:bold;
    margin-bottom:0;
}
.contactType{
    font-size: 13px;
    font-weight:bold;
    text-decoration-line: underline;
}

.contactInfo{
    font-size: 14px;
    padding-left:10px;
}

#form{
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: normal;
}

.inputText{
    color: #333333;
    background-color: #cccccc;
    width: 85%;
    border:none;
    outline:none;
    padding: 1%;
    margin: 1% auto;
}

.button{
    margin:1% 0.5% 0 0.5%;
    padding: 0.5% 2%;
    font-family: Arial;
    font-size: 0.8em;
    text-transform: uppercase;
    color: #000066;
    background-color: #999999;
    border: none;
    cursor: pointer;
    transition: 0.4s;

}

.button:hover{
    background-color: #ffffff;
}

.disclose{
    font-size:15px;
    letter-spacing: normal;
    text-align: center;
}
</style>