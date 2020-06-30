<?php

require 'C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/controllers/postsController.php';



 $posts = new postsController; 

if(isset($_POST['edit']))
{
  $posts->update($_POST['posts_id'], $_POST);
}else if(isset($_POST['delete']))
{
    $posts->destroy($_POST['posts_id']); 
}
?>

