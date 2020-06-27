<?php  include('db_con.php'); 
$var =  $_SESSION['name'];
$sql = "DELETE FROM signup WHERE username = '$var'";
   if(mysqli_query($conn, $sql)){
       echo "u fshi me sukses";
       //header("Location: http://localhost/ProjektiWeb_ArbeseMusliu/include/show_signup.php");
   }else{
        echo ("Gabim gjate fshirjes" . $conn->connect_error);
   }
?>