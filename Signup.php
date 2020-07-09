<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up - Konnect Media</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="myjavascript.js" type="text/javascript"></script>
<style> .error {color: #FF0000;} </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
 <?php
	include('include/header.php');
?>  
<div style = "height: 800px;
		width: 1300px;
		margin:0 auto;
		background-color:white;
		background-repeat: no-repeat;" >
    <div id = "SignupForm">
     <h1>Not a member ? Sign Up Here</h1>
    <form action="include/inc_signup.php" class="form-contact" method="POST" onsubmit="">
       <div class="usernameForm">
         <label for="username">Username:<span class="green">*</span> </label>
         <input type="text" name="username" value="" id="username"/>
      </div>
      <div class="holder">
        <br><label for="name">Name:<span class="green">*</span> </label>
        <input type="text" name="name" value="" id="name"/>
      </div>
      <div class="holder">
        <br><label for="email">Email:<span class="green">*</span> </label>
        <input type="text" name="email" value="" id="email"/>
      </div>
	    <div class="holder">
        <br><label for="password">Password:<span class="green">*</span> </label>
        <input type="password" name="password" value="" id="password"/>
      </div>
      <div class="clear"></div>
        <input type="submit" name="submit"  value="SIGN UP" class="formButoni" style = "margin-left:170px;" onclick=""/>
    </form>
      </div>
</div>

    <?php
	    include('include/footer.php');
    ?>

</body>
</html>