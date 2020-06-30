<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About us - Konnect Media</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div id="permbajtja">
    <?php
    include('include/header.php');?>

<div id="aboutus">
     <p>WHY <b>WORK WITH US</b></p>
  <div id = "lists">
     <div class = "check"><i class = "far fa-check-circle">We love to design.</i><br></div>
     <div class = "check"><i class = "far fa-check-circle">We’re experienced & passionate.</i><br></div>
     <div class = "check"><i class = "far fa-check-circle">We deliver on time and on budget.</i><br></div>
     <div class = "check"><i class ="far fa-check-circle">We are creative.</i></div>
     <div class = "check"><i class ="far fa-check-circle">We provide excellent after sales support.</i></div>
 </div>
</div>

 <div id = "projects">
     <h2>SOME OF OUR PREVIOUS CLIENTS</h2>
     <img src="img/icon.png">
  <div class = "images">
     <img src = "img/ultimate.png">
     <img src = "img/nvidia.jpg">
     <img src = "img/docu.png">
     <img src = "img/edward.jpg">
</div>
  </div>
<div id = "more">
        <h2><img src = "img/km.png">THIS IS KONNECT MEDIA</h2>
       <p> Love all things design. Designing beautiful websites<br> that attract customers to your business is our passion.</p>
</div>
<div id = "webmaintenance" style = "margin-top: 100px;">
        <legend>WEBSITE <b>MAINTENANCE</legend>
            <p> Website maintenance can help keep your customers or clients informed<br>
                as well as help minimise the likelihood of a website hack.<br>
                Up to date content on a website can also increase your Google ranking<br>
                which in turn can help drive more traffic to your website and met more business<br>
                from your site. Having content on a website that may be out of date can have<br>
                a negative effect on your visitors impression of your business.<br>
                Keeping your websites code up to date is very important in helping<br>
                to keep your site secure. Content management systems such as WordPress<br>
                and the plugins it can run have core file updates at different times through the<br>
                year. Sometimes these updates are for security reasons and it would<br>
                be vital to keep your site updated to the latest version of WordPress or<br>
                any plugins installed on the system. Regular backups of your<br>
                website files and database would also be essential as a precaution.
</div>

  <div class="team"> 
             <img src="img/teamwork.jpg">
  </div>
        <?php include('include/footer.php');?>

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