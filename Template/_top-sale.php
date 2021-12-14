<!-- top sale section  -->
<?php
    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['top_sale_submit'])){
            //call method addtocart
            $Cart->addToCart($_POST['ImgID'],$_POST['userID']);
        }
    }
?>

<section id="top-sale">
    <div class="container py-5">
        <h3 font-rubik>Top Sale</h3>
        <hr>
        <!-- owl carousel  -->
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['ImgID']); ?>"><img src="<?php echo $item['Image'] ?>" alt="" class="img-fluid"></a>

                    <div class="text-center">
                        <h6><?php echo $item['Iname'] ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>Rs.<?php echo $item['price'] ?></span>
                        </div>

                        <form method="post">
                            <input type="hidden" name="ImgID" value="<?php echo $item['ImgID']?>">
                            <input type="hidden" name="userID" value="<?php echo 51;?>">
                            <?php
                                if (in_array($item['ImgID'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    //if the item is already there in cart
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart</button>';
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php } //closing foreach function?>
            <!-- owl carousel ends -->
        </div>
    </div>
</section>
<!-- top sale section ends -->
