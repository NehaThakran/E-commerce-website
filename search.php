<!DOCTYPE html>
<html>
<head>
    <title>Search page</title>
</head>
<body>

<?php
$button = $_GET ['submit'];
$search = $_GET ['search'];

// connect to database
$con=mysqli_connect("localhost","root","","fashionzilla");

$Query = "SELECT * FROM products WHERE Iname LIKE '%$search%'";

$run = mysqli_query($con,$Query);
$foundnum = mysqli_num_rows($run);

if ($foundnum == 0)
{
    echo "We were unable to find a product with a search term of '<b>$search</b>'.";
}
else{
    echo "<h1><strong>  $foundnum Results Found for \"" .$search."\" </strong></h1>";

    // get num of results stored in database
    $Query = "SELECT * FROM products WHERE Iname LIKE '%$search%'";
    $getquery = mysqli_query($con,$Query);


    while($runrows = mysqli_fetch_array($getquery,MYSQLI_ASSOC))
    {
        ?>
        <a href="<?php printf('%s?item_id=%s','product.php',$runrows['ImgID']); ?>"><img src="<?php echo $runrows['Image'] ?>" alt="" class="img-fluid" width="350"></a>
<?php
        echo"<h3>". $runrows["Iname"] ."</h3>";
        echo"<h3>". "Rs.". $runrows["price"] ."</h3>";

    }}

mysqli_close($con);
?>

</body>
</html>
