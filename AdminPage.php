<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
?>

<?php
   $query = "SELECT role, count(*) FROM signup GROUP BY role";
   $result = mysqli_query($conn, $query);
   $adminCount=$row = mysqli_fetch_array($result)[0];
   $simpleCount=$row = mysqli_fetch_array($result)[1];

   $var="SELECT count(*) FROM posts";
   $result = mysqli_query($conn, $var);
   $postCount=$row = mysqli_fetch_array($result)[0];

   $var="SELECT count(*) FROM services";
   $result = mysqli_query($conn, $var);
   $serviceCount=$row = mysqli_fetch_array($result)[0];

   $var="SELECT count(*) FROM contact";
   $result = mysqli_query($conn, $var);
   $contactCount=$row = mysqli_fetch_array($result)[0];

   $dataPoints = array( 
	 array("label"=>"Admin", "y"=>$adminCount),
	 array("label"=>"Simple User", "y"=>$simpleCount),
   array("label"=>"Posts", "y"=>$postCount),
   array("label"=>"Services", "y"=>$serviceCount),
   array("label"=>"Contact Users", "y"=>$contactCount),
	)
 
?>



<!DOCTYPE >
<html>

<head>
    <title>Admin Dashboard - Konnect Media</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>

<script>
 window.onload = function() {
 
  var chart = new CanvasJS.Chart("chartContainer", {
	 animationEnabled: true,
	 title: {
		text: "Usage of Database"
	 },
	 subtitles: [{
		text: "July 2020"
	 }],
	 data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	 }]
 });
   chart.render();
 
}
</script>
</head>

<body>
    <div class = "header" id = "myHeader">
        <img src="img/konnect-media.png"></a>
          <ul id="header-menu">
             <li><i class='far fa-list-alt'></i><a href="adminPage.php">MY DASHBOARD</a></li>
			       <li><i class='fas fa-user-lock'></i><div class="dropdown"><button class="dropbtn"><a href="#">Manage</a></button>
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

	<?php $_SESSION['logged_in'];
	$name = $_SESSION['name']; ?>
<div id = "welcomeAdmin">
	<img src = "img/hellogif.gif">
	  <div id = "welcomeuser">
      <legend>Welcome Back! &nbsp;<?php echo $name; ?></legend>
	    <p>You have completed 40% of your goal this week</p>
	    <p>Start a new goal & improve your result</p>
    </div>  
</div>
	 

	<div id="chartContainer">
    </div>
     <script src="canvasjs.min.js"></script>
<?php
include('include/footer.php');
?>
	  <!-- <script>
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
            </script> -->


  </body>

  </html>