<!-- Shopping cart section  -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <!-- empty cart-->
                <div class="row border py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./images/empty_cart.png" alt="Empty cart" class="img-fluid" style="height: 200px;">
                        <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                    </div>
                </div>
                <!-- empty cart-->
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-14 font-rale py-3"> Your cart
                        is empty.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0;?> item):&nbsp;&nbsp; <span
                                class="text-danger">$<span class="text-danger" id="deal-price"> <?php echo isset($subTotal) ? $Cart->getSum($subTotal):0; ?></span>
                                    </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->

