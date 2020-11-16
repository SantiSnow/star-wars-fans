<?php

class Conexion{

    private $connection;

    public function __construct($host, $db, $usr, $pass)
    {
        $this->connection = new mysqli($host, $usr, $pass, $db);
        if ($this->connection->connect_error){
            die('Connection Error');
        }
        echo "Connection is on!";
    }

    public function selectData($sql){
        return $this->connection->query($sql);
    }

    public function insertData($sql){
        return $this->connection->query($sql);
    }


}


