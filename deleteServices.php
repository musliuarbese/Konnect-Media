<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/servicesController.php';

$services = new servicesController; 
echo $contact_id; 

if(isset($_POST))
{
    $contact->destroy($_POST['services_id']); 
}

?>