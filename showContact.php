<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/contactController.php';

 $contact = new contactController; 
?>


<div class = "header" id = "myHeader">
        <img src="img/konnect-media.png"></a>
          <ul id="header-menu">
             <li><i class='far fa-list-alt'></i><a href="adminPage.php">MY DASHBOARD</a></li>
			       <li><i class='fas fa-user-lock'></i></i><div class="dropdown"><button class="dropbtn"><a href="#">Manage</a></button>
                     <div class="dropdown-content">
                     <a href="include/show_signup.php"><i class='fas fa-users'></i>Show Users</a> 
                     <a href="adminPosts.php"><i class='fas fa-users'></i>Posts</a>
                     <a href="showContact.php"><i class='far fa-address-card'></i></i>User Contacts</a>
                     <a href="adminServices.php"><i class='far fa-clipboard'></i>Services</a></div></div></li>
	              <li><i class="fa fa-sitemap"></i><a href="index.php">LIVE SITE</a></li>
       
              <?php
		        if(isset($_SESSION['logged_in']) )
		        {
			      echo "<li><a href = 'logout.php'><i class='fas fa-sign-in-alt' ></i>Log Out</a></li>";
		        }
	         ?> 
	     </ul> 

    </div>

<?php 
if(isset($_POST)){
    $contact->all();
}

?>

<html>
<title>Contacts - Konnect Media</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
</head>

</html>

 