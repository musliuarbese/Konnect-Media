<?php

 require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/servicesController.php';



 $services = new servicesController; 

 if(isset($_POST['edit']))
 {
   $services->update($_POST['services_id'], $_POST);
  
 }else if(isset($_POST['delete'])){
  $services->destroy($_POST['services_id']);
 }
?>
