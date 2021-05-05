<?php include("header.php") ?>

<section class="entete" id="home">
    <img class="logo" src="./images/logo.png" alt="Logo Liberty">
    <div class="slogan"><p class="sloganP">HELLO WE ARE LIBERTY <br> WE DO AMAZING THINGS EVERYDAY</p></div>
    <div class="btnSlogan"><a href="#contact"><button id="btnSlogan" type="button">CONTACT US</button></a></div>
</section>


<div class="space"></div>

<section class="ourwork" id="ourworks">
    <h1 class="ourWorksH1">OUR WORKS</h1>

    <div class="ourWorksDiv"><p class="ourWorksP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio architecto vitae minus, quo nemo suscipit perferendis neque mollitia inventore?</p></div>
    
    <div class="galerie">
        <div class="galImg1" id="galImg"><img src="./images/img-0.jpg" alt="Julia Cameron"></div>
        <div class="galImg2" id="galImg"><img src="./images/img-1.jpg" alt="Smartphone Apps 1"></div>
        <div class="galImg3" id="galImg"><img src="./images/img-2.jpg" alt="Desk Stuff"></div>
        <div class="galImg4" id="galImg"><img src="./images/img-3.jpg" alt="Smartphone Apps 2"></div>
        <div class="galImg5" id="galImg"><img src="./images/img-4.jpg" alt="Martin Johnson"></div>
        <div class="galImg6" id="galImg"><img src="./images/img-5.jpg" alt="Wooden Boxes"></div>
        <div class="galImg7" id="galImg"><img src="./images/img-6.jpg" alt="CAT&MADISON"></div>
        <div class="galImg8" id="galImg"><img src="./images/img-7.jpg" alt="Vinyl"></div>
    </div>
</section>

<div class="space"></div>

<section class="pricing" id="pricing">
    <h1 class="pricingH1">PRICING TABLE</h1>

    <div class="pricingDiv"><p class="pricingP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio architecto vitae minus.</p></div>
    
    <div class="pricingTab">
        <div class="bronze" id="tabs">
            <div id="pricingTitle">
                <p class="pricingTitle">Bronze</p>
                <p class="month">$5/month</p>
            </div>
            <p class="pricingContent">1 Account</p>
            <p class="pricingContent">1 Project</p>
            <p class="pricingContent">50K API Access</p>
            <p class="pricingContent">50MB Storage</p>
            <p class="pricingContent">Custom Cloud Services</p>
            <p class="pricingContent">Weekly Reports</p>
            <div class="signUpNow">SIGN UP NOW</div>
        </div>

        <div class="silver" id="tabs">
            <section class="test">
            <div id="pricingTitle">
                <p class="pricingTitle">Silver</p>
                <p class="month">$10/month</p>
            </div>
            <p class="pricingContent">1 Account</p>
            <p class="pricingContent">3 Projects</p>
            <p class="pricingContent">100K API Access</p>
            <p class="pricingContent">100MB Storage</p>
            <p class="pricingContent">Custom Cloud Services</p>
            <p class="pricingContent">Weekly Reports</p>
            <div class="signUpNow">SIGN UP NOW</div>
            </section>
        </div>

        <div class="gold" id="tabsG">
            <div id="pricingTitleG">
                <p class="pricingTitleG">Gold</p>
                <p class="month">$20/month</p>
            </div>
            <p class="pricingContentG">2 Account</p>
            <p class="pricingContentG">5 Projects</p>
            <p class="pricingContentG">100K API Access</p>
            <p class="pricingContentG">200MB Storage</p>
            <p class="pricingContentG">Custom Cloud Services</p>
            <p class="pricingContentG">Weekly Reports</p>
            <div class="signUpNowG">SIGN UP NOW</div>
        </div>

        <div class="diamond" id="tabs">
            <div id="pricingTitle">
                <p class="pricingTitle">Diamond</p>
                <p class="month">$35/month</p>
            </div>
            <p class="pricingContent">5 Account</p>
            <p class="pricingContent">20 Projects</p>
            <p class="pricingContent">300K API Access</p>
            <p class="pricingContent">500MB Storage</p>
            <p class="pricingContent">Custom Cloud Services</p>
            <p class="pricingContent">Weekly Reports</p>
            <div class="signUpNow">SIGN UP NOW</div>
        </div>
    </div>
</section>

<div class="space"></div>

<section class="contact" id="contact">
    <h1 class="contactH1">CONTACT US</h1>

    <div class="contactDiv"><p class="contactP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio architecto vitae minus.</p></div>
    
    <div class="contactFormDiv">
        <form action="POST" class="form">

            <div class="msg">
            <textarea name="Message" id="msg" placeholder="Message"></textarea>
            </div>

            <div class="formContact">
            <input type="text" id="name" placeholder="Name"></input>
            <input type="email" id="mail" placeholder="Email"></input>

            <select name="Direction" id="direction" ><option>Direction</option></select>
            <input type="submit" value="SEND" class="envoi">
            
            
            </div>
        </form>
    </div>

    <div class="space"></div>
</section>


<?php include("footer.php") ?>