<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/postsController.php';



 $posts = new postsController; 

if(isset($_POST))
{
    $posts->store($_POST);
}

?>