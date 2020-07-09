<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konnect Mediat - Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="myjavascript.js" type="text/javascript"></script> -->
</head>

<body style = "margin: 0 auto; 
background-color:rgb(0, 51, 77);">
		<div style = "height: 800px;
		width: 1300px;
		margin:0 auto;
		background-color:white;
		background-repeat: no-repeat;" >
 <div id="login">
			<h1>Login on KonnektMedia</h1>
		 <img src = "img/securityuser.jpg">
     <form action="include/checklogin.php" method="POST" onsubmit="">
        <h3>E-mail address:</h3>
        <fieldset>
	 	  <input type="text" name="email" value="" id="email"/>
	 	  <span id="email_validation" class="error"></span>
		</fieldset>
	 	  <h3>Password:</h3> 
	 	<fieldset>
    	  <input type="password" id="password" name="password" value=""/>
     	  <span id="pwd_validation" class="error"></span><br><br>
	 	</fieldset>
		<fieldset>
		  <input type="submit" class="loginButtoni" value="LOGIN" onclick=""/>
		</fieldset>
	</form>
 </div>
		<div id="notRegistered">
		  <h1>Not a member ? Sign Up Here</h1>
	      <a href = "Signup.php"><input type="submit" class="loginButtoni" value="SIGN UP" onclick=""> </a>
		</div>
</div> 

</body>
</html>