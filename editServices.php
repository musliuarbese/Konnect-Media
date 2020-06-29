<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/servicesController.php';



 $services = new servicesController; 

if(isset($_POST))
{
  $services->update($_POST['services_id'], $_POST);
}
?>
