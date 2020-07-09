
        <div class = "header" id = "myHeader">
            <img src="img/konnect-media.png"></a>
            <ul id="header-menu">
                <li> <a class = "active" href="index.php"><i class="fa fa-fw fa-home"></i>HOME</a></li>
				<li> <a href="aboutus.php"><i class="fa fa-group"></i>ABOUT US</a></li>
				<li> <a href="services.php"><i class='far fa-clipboard'></i>SERVICES</a></li>
				<li> <a href="posts.php"><i class='far fa-images'></i>POSTS</a></li>
				<li> <a href="contact.php"><i id="c_us" class="fa fa-fw fa-address-book"></i>CONTACT US</a></li>

       
 <?php
				if(isset($_SESSION['logged_in']) )
				{
			      echo "<li><a href = 'logout.php'><i class='fas fa-sign-in-alt' ></i>Log Out</a></li>";
				}else
				{
			      echo " <li><a href ='login.php'><i class='fas fa-sign-in-alt' ></i>Login/Signup</a></li>";
		        }
	  ?>    
           </ul> 
	   </div>