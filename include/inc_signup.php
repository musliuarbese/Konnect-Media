<?php
	
		include('db_con.php');
	
		$username =$_POST['username']; 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = sha1('password');
		//$role = $_POST['role'];
		
		if(!empty($_POST['username']))
		{	if(!empty($_POST['name']))
			{
				if(!empty($_POST['email'])){
					if(!empty($_POST['password'])){
						$query = mysqli_query($conn,"SELECT * FROM signup WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error()); 
						if(!$row = mysqli_fetch_array($query) or die(mysqli_error()))
						{
							$sql_insert = "INSERT INTO signup (username, name, email, password) VALUES ('$username', '$name', '$email ', '$password')";
							$query=mysqli_query($conn, $sql_insert);
		
							if($query)
							{
								echo '<script type="text/javascript">window.alert("You are succesfully registred now!")</script>';
								header( "refresh:0; url=../Login.php" );
							}else{
								echo '<script type="text/javascript">window.alert("You are NOT succesfully registred!")</script>';
								header( "refresh:10; url=../Signup.php" );
							}
						}else{
							echo '<script type="text/javascript">window.alert("You are NOT succesfully registred User exists!")</script>';
							header( "refresh:0; url=../Signup.php" );
						}
				
					}else{
						echo '<script type="text/javascript">window.alert("You are NOT succesfully registred! ENTER THE PASSWORD")</script>';
						header( "refresh:0; url=../Signup.php" );
					}
				}else{
					echo '<script type="text/javascript">window.alert("You are NOT succesfully registred! ENTER THE E-MAIL ADDRESS")</script>';
					header( "refresh:0; url=../Signup.php" );
				}
			}else{
				echo '<script type="text/javascript">window.alert("You are NOT succesfully registred! ENTER YOUR NAME")</script>';
				header( "refresh:0; url=../Signup.php" );
			}
		}else{
			echo '<script type="text/javascript">window.alert("You are NOT succesfully registred! ENTER USERNAME")</script>';
			header( "refresh:0; url=../Signup.php" );
		}
?>