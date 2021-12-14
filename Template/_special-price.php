<!-- special price  -->

<?php
$category= array_map(function ($pro){return $pro['category'];},$product_shuffle);
$unique = array_unique($category);
sort($unique);

 //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['special_price_submit'])){
            //call method addtocart
            $Cart->addToCart($_POST['ImgID'],$_POST['userID']);
        }
    }
    $in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="special-price">
    <div class="container">
        <h3 class="font-rubik ">Special Price</h3>
        <div id="filters" class="button-group text-right">
            <button class="btn is-checked" data-filter="*">All </button>
            <?php
            array_map(function ($category){
                printf('<button class="btn" data-filter=".%s">%s</button>',$category,$category);
            },$unique);
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item) use ($in_cart){ ?>
                <div class="grid-item  <?php echo $item['category']; ?>">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s','product.php',$item['ImgID']); ?>"><img src="<?php echo $item['Image']; ?>" alt="" class="img-fluid"></a>

                            <div class="text-center">
                                <h6><?php echo $item['Iname']; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>Rs. <?php echo $item['price']; ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="ImgID" value="<?php echo $item['ImgID']?>">
                                    <input type="hidden" name="userID" value="<?php echo 51;?>">
                                    <?php
                                        if (in_array($item['ImgID'], $in_cart ?? [])){
                                            //if the item is already there in cart
                                            echo '<button type="submit" disabled class="btn btn-success font-size-12">In the cart</button>';
                                        } else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart</button>';
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php },$product_shuffle) ?>
        </div>
    </div>
</section>
<!-- special price ends -->
