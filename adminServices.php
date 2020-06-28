<?php include ('include/db_con.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Posts</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
<div class = "header" id = "myHeader">
        <a href="Home.html"> <img src="img/konnect-media.png"></a>
          <ul id="header-menu">
             <li><i class='far fa-user'></i><a href="include/show_signup.php">Users</a></li>
             <li><i class='far fa-images'></i><a href="adminPosts.php">Posts</a></li>
             <li><i class='far fa-images'></i><a href="adminServices.php">Services</a></li>
	         <li><i class="fa fa-sitemap"></i><a href="Home.php">Live Site</a></li>
       
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
 </div>
 
 <input type="submit" class="button" value="Post" />
      </form>
      <?php }?>
      </body>
      </html>