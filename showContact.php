<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/contactController.php';



 $contact = new contactController; 

if(isset($_POST)){
    $contact->all();
}

?>

<head>
<link rel="stylesheet" type="text/css" href="Style.css" />
</head>
