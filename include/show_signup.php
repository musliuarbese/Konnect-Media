<?php
include('db_con.php'); 
?>
<!DOCTYPE >
<html>
<head>
    <title>Users - Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>

<body>
<div id = "show">
  <div class = "header" id = "myHeader">
      <a href = "home.php"><img src="../img/konnect-media.png"/></a>
          <ul id="header-menu">
             <li><i class='far fa-list-alt'></i><a href="../adminPage.php">MY DASHBOARD</a></li>
			       <li><i class='far fa-images'></i><div class="dropdown"><button class="dropbtn"><a href="#">USER</a></button>
                     <div class="dropdown-content">
                     <a href="show_signup.php"><i class='fas fa-users'></i>Show Users</a> 
                     <a href="../adminPosts.php"><i class='fas fa-users'></i>Posts</a>
                     <a href="../showContact.php"><i class='far fa-address-card'></i></i>User Contacts</a>
                     <a href="../adminServices.php"><i class='far fa-clipboard'></i>Services</a></div></div></li>
	           <li><i class="fa fa-sitemap"></i><a href="home.php">LIVE SITE</a></li>
       
              <?php
		        if(isset($_SESSION['logged_in']) )
		        {
			      echo "<li><a href = 'logout.php'><i class='fas fa-sign-in-alt' ></i>Log Out</a></li>";
		        }
	         ?> 
	     </ul> 

  </div>
<h1> All Registered Users</h1>

<?php
$query = "Select * from signup";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);
//echo("Reshtat ne DB = $count"); 
if($_SESSION['role']==1){
while($row = mysqli_fetch_array($result)){ 
    $username = $row['username'];
    $name = $row['name'];                                                                                                                                                         
    $email = $row['email'];
    $password = $row['password'];
    $role=$row['role'];
    ?>

    <div id = "showsignup">
    <form action="update_signup.php" method="POST">
    <div class="holder">
        <label for="username">Username:<span class="green">*</span> </label>
        <input type="text" name="username" value="<?php echo $username; ?>" id="username"/>
      </div>
      <div class="holder">
       <br> <label for="name">Name:<span class="green">*</span> </label>
        <input type="text" name="name" value="<?php echo $name; ?>" id="name"/>
      </div>
      <div class="holder">
       <br> <label for="email">Email:<span class="green">*</span> </label>
        <input type="text" name="email" value="<?php echo $email; ?>" id="email"/>
      </div>
	  <div class="holder">
        <br><label for="email">Password:<span class="green">*</span> </label>
        <input type="password" name="password" value="<?php echo $password; ?>" id="password"/>
      </div>
      <div class="clear"></div>

     <br> <input type="submit" name="update"  value="Update" class="formButoni"  onclick=""/>
     <input type="submit" name="delete"  value="Delete" class="formButoni"  onclick=""/>
     <hr>
    </form>
</div>
<?php 
}
}else{
    echo "You need to log in as Admin to view this page";
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
