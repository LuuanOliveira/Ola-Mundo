<?php

class Connection 
{
    var $servidor = "localhost";
    var $usuario = "root";
    var $senha = "password";
    var $dbname = "projeto";
    var $conn;
    public function getConnection()
    {
        $this->conn = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);  
        return $this->conn;
    }
}


