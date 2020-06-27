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
    <?php
      include('include/header.php');
    ?>

<?php
      if(isset($_SESSION['logged_in']) ){
    
	echo '<h2>Posts in this page</h2>';
	echo '<h3>***************************</h3>';
	$select = 'SELECT title , subtitle , content , photo FROM `posts`';
	$result = mysqli_query($conn,$select) or die ('invalid query:'. mysqli_error());
	
	while($row = mysqli_fetch_row($result))
	{
		
		list( $title, $subtitle , $content , $photo )=$row;
		echo'<h2>'.$title.'</h2>';
		echo'<h5>'.$subtitle.'</h5>';
		echo'<p>'.$content.'</p>';
        ?>
        <img src="<?php echo $photo; ?>" />
                    
        <?php
		echo'<div class="clear"></div>';
		echo'<div class="hr3"></div>';
		echo '====================================================================================================================================';
		
	}
	  }else{
		  echo 'You should be signed in if you want to read post in this page!';
	  }
	?>
	<!-- <div>
   <img src = "img/delevopment.gif";>
	</div> -->
</body>
</html>