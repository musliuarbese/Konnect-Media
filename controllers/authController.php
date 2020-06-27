<?php

require './config/Database.php';

class authController
{
    protected $db;

    public function __contruct()
    {
        $this->db = new Database;
    }

    
}
?>