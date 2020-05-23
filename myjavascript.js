function validateForm() {
  var valid = 1;
  var email = document.getElementById('email');
  var email_validation = document.getElementById("email_validation");
  var name = document.getElementById('name');
  var name_validation = document.getElementById("name_validation");
  var message_validation = document.getElementById("message_validation");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if (name.value === "") {
    valid = 0;
    name_validation.innerHTML = "Field Required";
    name_validation.style.display = "block";
    name_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    name_validation.style.display = "none";
    name_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (message.value === "") {
    valid = 0;
    message_validation.innerHTML = "Field Required";
    message_validation.style.display = "block";
    message_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    message_validation.style.display = "none";
    message_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (email.value === "") {
    valid = 0;
    email_validation.innerHTML = "Field Required";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else if(!filter.test(email.value)) {
    valid = 0;
    email_validation.innerHTML = "Invalid email address";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    email_validation.style.display = "none";
    email_validation.parentNode.style.backgroundColor = "transparent";
  }
  if (!valid)
    return false;
}

function validoFormen()
{

	var valid=1; 
	var UName=document.getElementById("UName");
	var UName_validation=document.getElementById("UName_validation");
	var emailL=document.getElementById("emailL");
	var emailL_validation=document.getElementById("emailL_validation");
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	var r=document.getElementsByName("gender");
	var gender_validation=document.getElementById("gender_validation");
	
	
	var c=-1;
	for(var i=0;i<r.length;i++){
		if(r[i].checked){
			c=i;
		}
	}
	if(c == -1){
		valid=0;
		gender_validation.innerHTML = "Gender must be filled out";
		gender_validation.style.display ="block";
		gender_validation.parentNode.style.backgroundColor="#FFDFDF";
	}
	else{
		gender_validation.style.display ="none";
		gender_validation.parentNode.style.backgroundColor="transparent";
	}
	
	

	 var minLength = 8;
	 var regexU = /^(?=.*[A-Z]).+$/;
	 var regexL = /^(?=.*[a-z]).+$/; 
	 var regexNS = /^(?=.*[0-9_\W]).+$/;

     var password = document.querySelector('#password1');
	 var password2 = document.querySelector('#password2');
	 var pwd1=document.getElementById("pwd1_validation");
	 var pwd2=document.getElementById("pwd2_validation");
	 
	 if( password.value=="" ) {
	   		valid=0;
   			 pwd1_validation.innerHTML = "Enter Password";
   			 pwd1_validation.style.display = "block";
   			 pwd1_validation.parentNode.style.backgroundColor = "#FFDFDF";
 		 }else if( password.value.length < minLength ) {
				valid=0;
   				 pwd1_validation.innerHTML = "Password must contain " + minLength + " characters";
   				 pwd1_validation.style.display = "block";
   				 pwd1_validation.parentNode.style.backgroundColor = "#FFDFDF";
		 }else if(regexU.test(password.value)==false){
			 valid=0;
   				 pwd1_validation.innerHTML = "Password should contain uppercase letter";
   				 pwd1_validation.style.display = "block";
   				 pwd1_validation.parentNode.style.backgroundColor = "#FFDFDF";
			 }else if(regexL.test(password.value)==false){
			 valid=0;
   				 pwd1_validation.innerHTML = "Password should contain lowercase letter";
   				 pwd1_validation.style.display = "block";
   				 pwd1_validation.parentNode.style.backgroundColor = "#FFDFDF";
			 }else if(regexNS.test(password.value)==false){
			 valid=0;
   				 pwd1_validation.innerHTML = "Password should contain number or special character";
   				 pwd1_validation.style.display = "block";
   				 pwd1_validation.parentNode.style.backgroundColor = "#FFDFDF";
			 }else if( password.value != password2.value ){
				valid=0;
    			pwd2_validation.innerHTML = "Password does not match";
    			pwd2_validation.style.display = "block";
    			pwd2_validation.parentNode.style.backgroundColor = "#FFDFDF";
  			} else {
   				 pwd1_validation.style.display = "none";
  			 	 pwd1_validation.parentNode.style.backgroundColor = "transparent";
	  }
	
	if (UName.value === "") {
    valid = 0;
    UName_validation.innerHTML = "Enter Username";
    UName_validation.style.display = "block";
    UName_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    UName_validation.style.display = "none";
    UName_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (emailL.value === "") {
    valid = 0;
    emailL_validation.innerHTML = "Enter E-mail adress";
    emailL_validation.style.display = "block";
    emailL_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else if(!filter.test(emailL.value)) {
    valid = 0;
    emailL_validation.innerHTML = "Invalid email address";
    emailL_validation.style.display = "block";
    emailL_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    emailL_validation.style.display = "none";
    emailL_validation.parentNode.style.backgroundColor = "transparent";
  }
  if (!valid)
    return false;
}



function validoLogin() 
{
    var email = document.getElementById("email");
	var email_validation=document.getElementById("email_validation");
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 var minLength = 8;
	 var regexU = /^(?=.*[A-Z]).+$/;
	 var regexL = /^(?=.*[a-z]).+$/; 
	 var regexNS = /^(?=.*[0-9_\W]).+$/;

     var password = document.querySelector('#password1');
	 var pwd=document.getElementById("pwd_validation");
	
	 
	 if( password.value=="" ) {
	   		valid=0;
   			 pwd_validation.innerHTML = "Enter Password";
   			 pwd_validation.style.display = "block";
   			 pwd_validation.parentNode.style.backgroundColor = "#FFDFDF";
 		 }else if( password.value.length < minLength ) {
				valid=0;
   				 pwd_validation.innerHTML = "Password must contain " + minLength + " characters";
   				 pwd_validation.style.display = "block";
   				 pwd_validation.parentNode.style.backgroundColor = "#FFDFDF";
		 }else if(regexU.test(password.value)==false){
			 valid=0;
   				 pwd_validation.innerHTML = "Password should contain uppercase letter";
   				 pwd_validation.style.display = "block";
   				 pwd_validation.parentNode.style.backgroundColor = "#FFDFDF";
			 }else if(regexL.test(password.value)==false){
			 valid=0;
   				 pwd_validation.innerHTML = "Password should contain lowercase letter";
   				 pwd_validation.style.display = "block";
   				 pwd_validation.parentNode.style.backgroundColor = "#FFDFDF";
			 }else if(regexNS.test(password.value)==false){
			 valid=0;
   				 pwd_validation.innerHTML = "Password should contain number or special character";
   				 pwd_validation.style.display = "block";
                 pwd_validation.parentNode.style.backgroundColor = "#FFDFDF";
             }

             if (email.value === "") {
                valid = 0;
                email_validation.innerHTML = "Field Required";
                email_validation.style.display = "block";
                email_validation.parentNode.style.backgroundColor = "#FFDFDF";
              } else if(!filter.test(email.value)) {
                valid = 0;
                email_validation.innerHTML = "Invalid email address";
                email_validation.style.display = "block";
                email_validation.parentNode.style.backgroundColor = "#FFDFDF";
              } else {
                email_validation.style.display = "none";
                email_validation.parentNode.style.backgroundColor = "transparent";
              }

    if (!valid)
    return false;
}
	
	