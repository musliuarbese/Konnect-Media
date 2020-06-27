<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
<!DOCTYPE >
<html>

<head>
    <title>Konnect Media - Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>

    <div id="permbajtja">
    <?php
    include('include/header.php');?>
    
    <?php 
            if(isset($_SESSION['logged_in']) ){
            	echo "<div class=\"userwelcome\">"; 
                $name = $_SESSION['name'];
                if($_SESSION['role']==2){ 
                    echo "<p  style = \"font-size:19px; \">Miresevini, " . $name . ". <a href = 'include/edit_signup.php'> Edit your account here</a> </p>";
                }else{
                    echo "<p  style = \"font-size:19px; \">Miresevini, " . $name . ". <a href = 'AdminPage.php'> Go to Admin Dashboard</a> </p>";
                }
               
            	$visit = $_COOKIE['lastVisit']; 
            	echo "<p style = \"font-size: 12px; \">Vizita juaj e fundit ishte me - ". $visit . "</p>";
            	echo "</div>";
            }
            ?>
        
        <div id="content1">
                <div id="slider">
                 <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="data1/images/we_make_websites.jpg" alt="We Make Websites" title="We Make Websites" id="wows1_0"/></li>
                <li><img src="data1/images/we_design_them.jpg" alt="We Design Them" title="We Design Them" id="wows1_1"/></li>
                <li><img src="data1/images/together.jpg" alt="together" title="together" id="wows1_2"/></li>
                <li><img src="data1/images/programming_language_for_websites.jpg" alt="programming language for Websites" title="programming language for Websites" id="wows1_3"/></li>
                <li><img src="data1/images/planing.jpg" alt="planing" title="planing" id="wows1_4"/></li>
                <li><img src="data1/images/work_place.jpg" alt="Work Place" title="Work Place" id="wows1_5"/></li>
                <li><img src="data1/images/website.jpg" alt="website" title="website" id="wows1_6"/></li>
                <li><a href="http://wowslider.net"><img src="data1/images/languages.png" alt="javascript image slider" title="languages" id="wows1_7"/></a></li>
                <li><img src="data1/images/becreative.jpg" alt="becreative" title="becreative" id="wows1_8"/></li>
            </ul></div>
            <div class="ws_bullets"><div>
                <a href="#" title="We Make Websites"><span><img src="data1/tooltips/we_make_websites.jpg" alt="We Make Websites"/>1</span></a>
                <a href="#" title="We Design Them"><span><img src="data1/tooltips/we_design_them.jpg" alt="We Design Them"/>2</span></a>
                <a href="#" title="together"><span><img src="data1/tooltips/together.jpg" alt="together"/>3</span></a>
                <a href="#" title="programming language for Websites"><span><img src="data1/tooltips/programming_language_for_websites.jpg" alt="programming language for Websites"/>4</span></a>
                <a href="#" title="planing"><span><img src="data1/tooltips/planing.jpg" alt="planing"/>5</span></a>
                <a href="#" title="Work Place"><span><img src="data1/tooltips/work_place.jpg" alt="Work Place"/>6</span></a>
                <a href="#" title="website"><span><img src="data1/tooltips/website.jpg" alt="website"/>7</span></a>
                <a href="#" title="languages"><span><img src="data1/tooltips/languages.png" alt="languages"/>8</span></a>
                <a href="#" title="becreative"><span><img src="data1/tooltips/becreative.jpg" alt="becreative"/>9</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
        </div>	
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->
                </div>
            <div id="WeBuild">WE BUILD WEBSITES
                <p id="well">AND WE BUILD THEM WELL</p>
            </div>
        </div>
        
        <div id="content2">
            <h2>OUR SERVICES</h2>
            <img src="img/icon.png">
            <div id="websites">
                <div class="WebsiteMaintenance">
                    <img src="img/websitem.png">
                    <div class="websitem">WEBSITE <b>MAINTENANCE</b>
                    <P>Text Updating
                        <br> Image Updating
                        <br> Wordpress Updates
                        <br> Plugin Updates</P></div>
                    <button class="find find1"><p>FIND OUT MORE<p></button>

                </div>
                <div class="WebsiteDesign">
                    <img src="img/websited.png">
                    <div class="websited">WEBSITE <b>DESIGN</b>
                    <P>Website Re-Designs
                        <br> Responsive Design
                        <br> E-Commerce Design
                        <br> Brochure Style Web Design</P></div>
                    <button class="find find2"><p>FIND OUT MORE</p></button>
                </div>
                <div class="DigitalMarketing">
                    <img src="img/websited.png">
                    <div class="digitalm">DIGITAL <b>MARKETING</b>
                    <P>Search Engine Optimisation
                        <br> Email Marketing
                        <br> Social Media
                        <br> Google Adwords</P></div>
                    <button class="find find3"><p>FIND OUT MORE</p></button>
                </div>
            </div>

        </div>
       
        <div id="content3">
            <p><b>WEB DESIGN, MAINTENANCE</b> AND <b>DIGITAL</b> MARKETING</p>
            <div id="ic">
                    <img src="img/icon.png"/>
            </div>
            
            <div class="konnectmedia">
                <legend>KONNECT MEDIA</legend>
                KONNECT Media manage all of your online requirements
                <br> including custom responsive website design, website
                <br> maintenance, ecommerce design, social media management and SEO.
                <br> Based in Kildare, we provide affordable web solutions for small
                <br> to medium size businesses. If you are on a tight budget then don't worry.
                <br> We can design a website that suits your budget that can be built on
                <br> in the future as your business grows. At KONNECT Media we work
                <br> with you with our creative designs to give you the tools you need
                <br> to help your business grow. All our web design packages come with
                <br> a content management system that easily allows you to update your
                <br> website content, whether it be a brochure website or an e-commerce
                <br> system. We ensure that each web design project we work on gets our
                <br> full attention to detail. Each design we create is entirely be spoke
                <br> which means that your website is completely unique and will stand
                <br> out among your competitors.
            </div>
            <div class="foto"> 
                <img src="img/brands.jpg">
            </div>
        </div>
        
     <?php
	include('include/footer.php');
?>

        <script>
            window.onscroll = function() {myFunction()}; // kur useri ben scroll faqen, ekzekutohet myfunction()
            // merr id hederi e run te header
            var header = document.getElementById("myHeader");
            //e merr pozicionin e kompensuar
            var sticky = header.offsetTop;
            
            function myFunction() { // e te metoda myfunction mundeson qe
              if (window.pageYOffset > sticky) { // nese don me bo scroll //duhet klasen sticky me shtu ne heder kur na bojm scroll 
                header.classList.add("sticky"); 
              } else {
                header.classList.remove("sticky"); // edhe me hjek sticky kur na sbojm scroll me ta kthy nvend prap qysh je kon
              }
            }
            </script>
</div>

</body>

</html>