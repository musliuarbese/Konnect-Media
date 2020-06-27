<?php 
include('db_con.php'); ?>
<?php
        
        //Marrja e te dhenave nga kontakt forma
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$employeed = implode(',',$_POST['employeed']);
		$country = $_POST['country'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO contact (name, email, gender, employeed, country, subject, message) 
		VALUES ('$name', '$email', '$gender', '$employeed', '$country', '$subject', '$message')";
		$query=mysqli_query($conn, $sql);
		
		if($query)
		{
			echo "<h1>Te dhenat u ruajten me sukses</h1>";
			header( "refresh:2; url=../Home.php" );
			
			
		}
		else{
			
				echo "<h1>Te dhenat nuk ruajten" .$conn->connect_error; 
			
		}
		?>