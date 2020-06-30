<?php include ('include/db_con.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services - Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
<div class = "header" id = "myHeader">
        <a href="Home.html"> <img src="img/konnect-media.png"></a>
          <ul id="header-menu">
             <li><i class='far fa-list-alt'></i><a href="adminPage.php">MY DASHBOARD</a></li>
			       <li><i class='far fa-images'></i><div class="dropdown"><button class="dropbtn"><a href="#">USER</a></button>
                     <div class="dropdown-content">
                     <a href="include/show_signup.php"><i class='fas fa-users'></i>Show Users</a> 
                     <a href="adminPosts.php"><i class='fas fa-users'></i>Posts</a>
                     <a href="showContact.php"><i class='far fa-address-card'></i>User Contacts</a>
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
<div id = "service">
<h1>ADD SERVICES</h1>
<form action="createServices.php" class="form-contact" method="post" onsubmit = "">

<div class="holder"> 
   <br><br><label for="title">Title: <span class="green"></span></label> 
   <input name="title" id="title" value=""></input>
 </div>
 <div class="holder"> 
   <br><br><label for="icon">Icon: <span class="green"></span></label> 
   <input name="icon" id="icon" value=""></input>
 </div>
 <div class="holder"> 
   <br><br><label for="content">Message: <span class="green"></span></label>
   <textarea rows="10" cols="10" name="content" id="content" value = ""></textarea>
 </div><br>
 <div id = "butonat">
 <input type="submit"  value="SEND" class="formButoni"/>
  <a href = "showServices.php">Show Services</a>
  </div>  
  </form>
</div>
      <?php }?>
      </body>
      </html>
 