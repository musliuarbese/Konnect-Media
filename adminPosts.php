<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Posts - Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
<div id = "show">
<div class = "header" id = "myHeader">
        <a href="Home.html"> <img src="img/konnect-media.png"></a>
          <ul id="header-menu">
             <li><i class='far fa-list-alt'></i><a href="adminPage.php">MY DASHBOARD</a></li>
			       <li><i class='far fa-images'></i><div class="dropdown"><button class="dropbtn"><a href="#">USER</a></button>
                     <div class="dropdown-content">
                     <a href="include/show_signup.php"><i class='fas fa-users'></i>Show Users</a> 
                     <a href="adminPosts.php"><i class='fas fa-users'></i>Posts</a>
                     <a href="showContact.php"><i class='far fa-address-card'></i></i>User Contacts</a>
                     <a href="adminServices.php"><i class='far fa-clipboard'></i>Services</a></div></div></li>
	           <li><i class="fa fa-sitemap"></i><a href="home.php">LIVE SITE</a></li>
       
              <?php
		        if(isset($_SESSION['logged_in']) )
		        {
			      echo "<li><a href = 'logout.php'><i class='fas fa-sign-in-alt' ></i>Log Out</a></li>";
		        }
	         ?> 
	     </ul> 

    </div>

<?php 
      if(isset($_SESSION['logged_in']) ){ 
    ?>
   
  <div id="servicesContent">
	
                        <h1 id="Title1">Add Post</h1>
                        <div id="myForm">
                            <form method="POST" action="createPosts.php">

                                <div class="clear1"></div>

                                <p>
                                    <label>Title*:
                                        <input class="text-input" id="title" type="text" name="title" />
                                    </label><span id="title_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Subtitle:
                                        <input class="text-input" id="subtitle" type="text" name="subtitle" />
                                    </label><span id="subtitle_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Content*:
                                        <textarea id="message" name="content"></textarea>
                                    </label><span id="content_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Photo*:
                                        <input class="text-input" id="photo" type="text" name="photo" />
                                    </label><span id="photo_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <input type="submit" class="button" value="Post" />
                                    <input type="reset" class="button" />
                                    <a href = "showPosts.php">Show Posts</a>
                                </p>
                                <div class="clear1"></div>
                            </form>
                        </div>
		<?php
	  }
	   else{
		
		echo '<div id="container">
                    <div id="workingPlace">';
		echo '<div class="clear1"></div>';
		echo 'You should be signed in to add posts to the page!';
		echo '<div class="clear1"></div>';
		echo '</div>
                </div>';
		
	  }
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