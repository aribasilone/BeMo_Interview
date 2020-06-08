<template>
    <div >
        <footer class="footer">
			<div id="footer">©2013-2016 BeMo Academic Consulting Inc. All rights reserved. 
                <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank">
                    <span style="text-decoration:underline;">Disclaimer &amp; Privacy Policy </span></a>
                <a href="mailto:info@bemoacademicconsulting.com" id="rw_email_contact">
                    <span style="text-decoration:underline;">Contact Us</span></a>
                
            </div>
            <div id="socialicons">
                <a class="social" href="https://www.facebook.com/bemoacademicconsulting">F  </a>
                <a class="social" href="https://twitter.com/BeMo_AC">L</a>
            </div>
		</footer>
    </div>
</template>

<style scoped>
    .footer{
        display: flex;
        justify-content: space-between;

        font-size: 13px;
        color: #ffffff;
        padding: 2% 5% 2% 5%;
        background-color: #000066;
    }
    #footer{
        float:left;
    }
    #socialicons{
        float:right;
    }
    .social{
        color:#ffffff;
        font-weight: bold;
    }
    
</style>

<script>
    export default {

        name:'Footer'
    
}
</script>