<?php

	ob_start();
	include('db_con.php');

	// Define $email and $password 
	$email=$_POST['email'];
	$password=$_POST['password']; 
	$password=sha1('password'); 
	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
    $password = stripslashes($password); 
    $email = mysqli_real_escape_string($conn,$email);
	$password = mysqli_real_escape_string($conn,$password);
    $sql="SELECT * FROM signup WHERE email='$email' and password='$password'";
	$result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	// If result matched $email and $password, table row must be 1 row
	if($count==1){

	session_start();
        $_SESSION['logged_in'] = TRUE;//po po mire osht
        $_SESSION['username'] 	= $row['email'];
		$_SESSION['name'] 	= $row['username'];
		$_SESSION['role']=$row['role'];

		if($_SESSION['role']==2){
		header( 'Location: ../home.php' );
		}else{
			header('Location:../adminPage.php');
			
		}
	}
 else {
	 echo "<script type='text/javascript'> window.alert('Invalid username or password!');</script>";
        header('refresh: 0; url= ../login.php');
	}
	
	ob_end_flush();
?>
