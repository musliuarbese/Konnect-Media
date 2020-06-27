<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="myjavascript.js" type="text/javascript"></script>
<style> .error {color: #FF0000;} </style>
</head>

<body>
<div style = "height: 1000px;">
<?php
	include('include/header.php');
?>
    <div id = "map"><h1>We take care of you business! Contact us</h1>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="1300" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=UBT%20&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">view more about divi</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1300px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1300px;}</style></div>

        </div>
  <div class="mainC">
    <h1>Contact us</h1>
    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</strong> </p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</em></p>
    <form action="../createContact.php" class="form-contact" method="post" onsubmit="validateForm();">
      <div class="holder">
        <label for="name">Name:<span class="green">*</span> </label>
        <input type="text" name="name" value="" id="name"/>
        <span id="name_validation" class="error"></span>
      </div>
      <div class="holder">
       <br> <label for="email">Email:<span class="green">*</span> </label>
        <input type="text" name="email" value="" id="email"/>
        <span id="email_validation" class="error"></span>
      </div>
      
	  <div class="clear1"></div>
	    <div class="holder">
      <br><br><h4>Gender: </h4>
      <fieldset>
      <input type="radio" name="gender" value="male" class="radioB" checked= "checked" /> Male<br/>
      <input type="radio" name="gender" value="female" class="radioB"/> Female<br/>
      <span id="gender_validation" class="error"></span>
      </fieldset></div>
	  <div class="clear1"></div>
	   <div class="holder">
      <br><h4>Profesioni: </h4>
      <fieldset>
      <input type="checkbox" name="employeed[]"  class="radioB" value="Profesor"/>Profesor<br/>
  	  <input type="checkbox" name="employeed[]" class="radioB" value="Student"/>Student<br/>
  	  <input type="checkbox" name="employeed[]" class="radioB" value="I papune"/>I papune<br/>
     </fieldset></div>
     <div class="clear1"></div>
	  <div class="holder">
    <br><h4>Your Country</h4>
      <fieldset>
      <select name="country">
        <option value="Kosova">Kosova</option>
        <option value="Shqiperia">Shqiperia</option>
        <option value="USA">USA</option>
        <option value="Germany">Germany</option>
        </select>
      </fieldset></div>
	  <div class="clear1"></div>
	  <div class="holder">
     <br><br><label for="subject" id="subject">Subject:<span class ="green">*</span></label>
        <input type="text" name="subject"  value=""/>
      </div>
      <div class="holder">
        <br><br><label for="message">Message: <span class="green">*</span></label>
        <textarea rows="10" cols="10" name="message" id="message"></textarea>
         <span id="message_validation" class="error"></span>
      </div>
      <div class="clear"></div>
      <fieldset>
      <input type="submit"  value="SEND" class="formButoni" onclick="validateForm();"/>
       <input type="reset"  value="CANCEL" class="formButoni" onclick=""/></fieldset>
    </form>
    
  </div>
  <div id="KontaktFundi">
    <input class="butoni1" name="buton1" type="button" />
    <input class="butoni1" name="buton1" type="button" />
  </div>
  </div>
  <?php
	include('include/footer.php');
?>
</body>
</html>