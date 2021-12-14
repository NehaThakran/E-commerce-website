<?php
    //require database connection
    require('Database/DBController.php');

    //require Product class
    require('Database/Product.php');

    //require cart class
    require('Database/Cart.php');

    //DBController object
    $db = new DBController();

    //Product object
    $product = new Product($db);
    $product_shuffle = $product->getData();
//    print_r($product);

    //cart object
    $Cart = new Cart($db);

?>
