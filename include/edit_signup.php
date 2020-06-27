<?php
include('db_con.php');
$var =  $_SESSION['name'];
  $query = " SELECT * FROM signup WHERE username ='$var'";
  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);
   
   $username = $row['username'];
   $name = $row['name'];                                                                                                                                                         
   $email = $row['email'];
   $password = $row['password'];
?>

<form action = "update_signup.php" method="POST">
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

     <br> <input type="submit" name="submit"  value="Update" class="formButoni" onclick=""/>
     <input type="submit" name="delete"  value="Delete" class="formButoni"  onclick=""/>
    </form>

    