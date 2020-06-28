<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/servicesController.php';



 $services = new servicesController; 

if(isset($_POST)){
    $services->all();
}

?>

<head>
<link rel="stylesheet" type="text/css" href="Style.css" />
</head>
