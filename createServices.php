<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/servicesController.php';



 $services = new servicesController; 

 if(isset($_POST))
 {
    $services->store($_POST);
 }

?>

