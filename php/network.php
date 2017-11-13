<?php
class Network{
    public $connection;
    public $security;

    public static function createConnection($servername, $username, $password){
        $this->connection = new mysqli($servername, $username, $password);
        if ($this->connection->connect_error) {
          die("Connection failed: " . $this->connection->connect_error);
        }
        echo "Connected successfully.";
    }

    public static function chooseSecurity(){

    }

    public static function setStatements(){

    }

}



?>
