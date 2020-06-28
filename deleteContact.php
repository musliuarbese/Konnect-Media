<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/contactController.php';



 $contact = new contactController; 

if(isset($_POST))
{
    $contact->destroy($contact_id);
}

?>