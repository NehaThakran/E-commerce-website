<?php

class DBController
{
    //Database Connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'fashionzilla';

    public $conn = null;

    //call constructor
    public function __construct(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->conn->connect_error){
            echo "Connection failed".$this->conn->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    //closing mysql connection
    protected function closeConnection(){
        if($this->conn!= null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}

