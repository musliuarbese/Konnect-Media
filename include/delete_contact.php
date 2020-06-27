<?php 
include('db_con.php'); 

$sql = "DELETE FROM contact WHERE contact_id = '" . $_GET["contact_id"] . "'";
   if(mysqli_query($conn, $sql)){
       header("Location: http://localhost/ProjektiWeb_ArbeseMusliu/include/show_contact.php");
   }else{
        echo ("Gabim gjate fshirjes" . $conn->connect_error);
   }
?>