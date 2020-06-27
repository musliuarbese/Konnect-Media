<?php
		include('db_con.php');

		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$content = $_POST['content'];
		$photo = $_POST['photo'];
		

       if(!empty($_POST['title']))
	   {
		   if(!empty($_POST['content']))
			{
				if(!empty($_POST['photo']))
				{
					$sql_insert = "INSERT INTO posts (title, subtitle, content, photo)
					VALUES ('$title', '$subtitle', '$content', '$photo')";
					$query=mysqli_query($conn,$sql_insert);
		
					if($query)
					{
						//Shfaq nje mesazh qe te dhenat u rujten me sukses dhe ridrejto ne index.php pas 2 sekondave
						echo '<script type="text/javascript">window.alert("Post succesfully added!")</script>';
						header( "refresh:0; url=../AdminPage.php" );
					}	
					else{
						echo"<h1>Post wasn't added succesfully </h1>" or die ('invalid query:'. mysqli_error());
					}
				}else{
					echo '<script type="text/javascript">window.alert("Post Failed! You should enter image address")</script>';
					header( "refresh:0; url=../adminPosts.php" );
				}	
			}else{
				echo '<script type="text/javascript">window.alert("Post Failed! You should enter the content")</script>';
				header( "refresh:0; url=../adminPosts.php" );
			}	
	   }else{
		   echo '<script type="text/javascript">window.alert("Post Failed! You should type TITLE")</script>';
			header( "refresh:0; url=../adminPosts.php" );
	   }	
		?>
	