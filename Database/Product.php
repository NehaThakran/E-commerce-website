<?php
//use to fetch product table data
class Product
{
    public $db = null;
    public function __construct(DBController $db){
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    //fetch product data using getData method
    public function getData($table = 'products'){
       $result = $this->db->conn->query("SELECT * FROM {$table}");

       $resultArray = array();

       //fetching rows as associative arrays one by one
       while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }
       return $resultArray;
    }

    //get product using ImgID
    public function getProduct($item_id=null,$table='products'){
        if (isset($item_id)){
            $result = $this->db->conn->query("SELECT * FROM {$table} WHERE ImgID = {$item_id}");

            $resultArray = array();
            //fetching rows as associative arrays one by one
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[]=$item;
            }
            return $resultArray;
        }
    }
}