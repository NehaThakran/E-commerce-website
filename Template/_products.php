<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item):
        if($item['ImgID'] == $item_id):

?>
<!--   product  -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['Image'];?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>

                    <form method="post" class="col">
                        <input type="hidden" name="ImgID" value="<?php echo $item['ImgID']?>">
                        <input type="hidden" name="userID" value="<?php echo 51;?>">
                            <?php
                            if (in_array($item['ImgID'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                //if the item is already there in cart
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the cart</button>';
                            }
                            else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-12">Add to cart</button>';
                            }
                            ?>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['Iname'];?></h5>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered
                        questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>$162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span>Rs. <?php echo $item['price'] ?? 0;?></span><small
                                class="text-dark font-size-12">&nbsp;&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">$10.00</span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Free<br>Shipping</a>
                        </div>

                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Dec 29 - Jan 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                        424201</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i
                                        class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                       disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i
                                        class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">XL</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">XXL</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">XXXL</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit,
                    delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium
                    eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
                    accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit,
                    delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium
                    eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
                    accusantium velit numquam a aliquam vitae vel?</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->

            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['product_submit'])){
                    //call method addtocart
                    $Cart->addToCart($_POST['ImgID'],$_POST['userID']);
                }
            }
            ?>

        <?php
    endif;
    endforeach;
?>