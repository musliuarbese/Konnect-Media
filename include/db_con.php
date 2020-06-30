<?php 


 ob_start();
session_start();
//databaza.php
$server	  = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'k_mdatabase';

$conn = new mysqli($server, $username, $password, $database);

  if($conn->connect_error)
  {
	  die("Ka problem ne qasje ne DB" .$conn->connect_error);
  }
?>