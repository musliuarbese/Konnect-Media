<?php

 require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/contactController.php';

 $contact = new contactController; 
 echo $contact_id; 

 if(isset($_POST))
 {
    $contact->destroy($_POST['contact_id']); 
 }

?>