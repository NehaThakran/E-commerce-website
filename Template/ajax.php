<?php
    //require database connection
    require('../Database/DBController.php');

    //require Product class
    require('../Database/Product.php');

    //DBController object
    $db = new DBController();

    //Product object
    $product = new Product($db);

    if (isset($_POST['itemid'])){
        $result = $product->getProduct($_POST['itemid']);
        echo json_encode($result);
    }
?>