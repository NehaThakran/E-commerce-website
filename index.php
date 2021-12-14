<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<?php

    //include top-sale.php
    include('Template/_banner_area.php');

    //include top-sale.php
    include('Template/_top-sale.php');

    //include special-price.php
    include('Template/_special-price.php');

    //include ads.php
    include('Template/_ads.php');
    
?>

<?php
//include footer.php file
include('footer.php');
?>