<?php

class Conexion{

    private $connection;

    public function __construct($host, $db, $usr, $pass)
    {
        $this->connection = new mysqli($host, $usr, $pass, $db);
        if ($this->connection->connect_error){
            die('Connection Error');
        }

        $this->connection->set_charset("utf8");
    }

    public function selectData($sql){
        return $this->connection->query($sql);
    }


}

$host = 'localhost';
$db = 'id15413540_pelis_info';
$usr = 'root';
$pass = '';
