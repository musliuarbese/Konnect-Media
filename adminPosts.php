<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
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
   
  <div id="servicesContent">
	
                        <h1 id="title">Add Post</h1>
                        <div id="myForm">
                            <form method="POST" action="include/insertPost.php">

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
                                </p>
                                <div class="clear1"></div>
                            </form>
                        </div>


                  
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
	




</body>
</html>