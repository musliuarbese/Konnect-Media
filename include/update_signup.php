<?php
include('db_con.php');
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password=sha1('password'); 

if((isset($_POST["update"]))) {
   
    $query = "UPDATE signup SET username = '".$username."', name = '".$name."', email = '".$email."', password = '".$password."' WHERE username = '".$username."'";
    $result = mysqli_query($conn, $query);
  
    echo "Data has been updated";
    echo "Refreshing the page";
   
    if($_SESSION['role']==2)
    {
         header("refresh: 2; http://localhost/ProjektiWeb_ArbeseMusliu/include/edit_signup.php");
    }else{
         header("refresh: 2; http://localhost/ProjektiWeb_ArbeseMusliu/include/show_signup.php");
    }
}

  if((isset($_POST["delete"])))
  {//e kqyr a egziston qaj mision
    $sql = "DELETE FROM signup WHERE username = '$username'";
     if(mysqli_query($conn, $sql))
     {
       echo "u fshi me sukses";
       if($_SESSION['role']==2)
       {
         header("refresh: 2; http://localhost/ProjektiWeb_ArbeseMusliu/logout.php");
       }else
       {
        header("refresh: 2; http://localhost/ProjektiWeb_ArbeseMusliu/include/show_signup.php");
       }
       
     }else{
        echo ("Gabim gjate fshirjes" . $conn->connect_error);
    }

 }
?>