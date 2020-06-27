<?php
include('db_con.php'); 
?>
<!DOCTYPE >
<html>
<head>
    <title>Konnect Media - Home</title>
    <link rel="stylesheet" type="text/css" href="../Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>

<body>

<div class = "header" id = "myHeader">
            <a href="Home.html"> <img src="../img/konnect-media.png"></a>
            <ul id="header-menu">
                <li><i class='far fa-user'></i><a href="show_signup.php">Users</a></li>
                <li><i class='far fa-images'></i><a href="../adminPosts.php">Posts</a></li>
				        <li><i class="fa fa-sitemap"></i><a href="../Home.php">Live Site</a></li>
       
 <?php
		if(isset($_SESSION['logged_in']) ){
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
    <form action="update_signup.php" method="POST">
    <div class="usernameForm">
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
<?php 
}
}else{
    echo "You need to log in as Admin to view this page";
}
?>
</body>

</html>
