<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Services-Konnect Media</title>
        <link rel="stylesheet" type="text/css" href="Style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
        <?php
            include('include/header.php');
        ?>

        <div class="ser">
         
                <h2>Website Design<img src="img/websitesDesign.png" /></h2>
                <p>
                    A website designed uniquely for your company. Web <br />
                    design is one of the most important parts of your <br />
                    business. Our award-winning designers will help <br />
                    you welcome new customers with a clean, <br />
                    professional website.
                </p>
         
        </div>
        <div class="ser">
           
                <h2>Website Design<img src="img/websitesDesign.png" /></h2>
                <p>
                    A website designed uniquely for your company. Web <br />
                    design is one of the most important parts of your <br />
                    business. Our award-winning designers will help <br />
                    you welcome new customers with a clean, <br />
                    professional website.
                </p>
           
        </div>
    </body>
</html>
