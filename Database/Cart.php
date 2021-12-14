<?php

class Cart
{
    public $db = null;
    public function __construct(DBController $db){
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    //insert into cart table
    public function insertintoCart($params = null,$table = "cart"){
        if($this->db->conn != null){
            if($params!=null){
                //get table columns
                $columns = implode(',',array_keys($params));
                $values = implode(',',array_values($params));

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
                //execute the query
                $result = $this->db->conn->query($query_string);
                return $result;
            }
        }

    }
    //to get userid and imgid and insert into cart table
    public function addToCart($itemid,$userid){
        if(isset($itemid) && isset($userid)){
            $params = array(
                "ImgID"=> $itemid,
                "userID"=> $userid
            );
           $result = $this->insertintoCart($params);
           if($result){
               //reload page
               header("Location:".$_SERVER['PHP_SELF']);
           }
        }
    }

    //delete cart item using cart item id
    public function deleteCart($item_id = null,$table = 'cart'){
        if ($item_id!=null){
            $result = $this->db->conn->query("DELETE FROM {$table} WHERE ImgID={$item_id}");
            if ($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }

    }

    //calculate subtotal
    public function getSum($arr){
        if (isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f',$sum);
        }
    }

    //get ImgID of the shopping cart items
    public function getCartId($cartArray = null,$key = "ImgID"){
        if ($cartArray!=null){
            $cart_id = array_map(function ($value) use ($key){
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }

    //save for later
    public function saveForLater($item_id = null,$saveTable = "wishlist",$fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE ImgID={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE ImgID={$item_id};";

            // execute multiple query
            $result = $this->db->conn->multi_query($query);

            if($result){
                header("Location :".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

}