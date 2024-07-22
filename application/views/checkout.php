<?php 
if(empty($this->session->userdata("nestuser"))){
redirect("register","refresh");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST : CHECKOUT</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view("include/header"); ?>



    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Checkout</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are <span class="text-brand"><?php $c = 0;
                                                                                    foreach ($items as $i) {
                                                                                        $c++;
                                                                                    }
                                                                                    echo $c; ?></span> products in your cart</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row mb-50">
                    <!--    <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                             <div class="toggle_info">
                                <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed font-lg" aria-expanded="false">Click here to login</a></span>
                            </div>
                            <div class="panel-collapse collapse login_form" id="loginform">
                                <div class="panel-body">
                                    <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Username Or Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                    <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-md" name="login">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <form method="post" class="apply-coupon">
                                <input type="text" placeholder="Enter Coupon Code...">
                                <button class="btn  btn-md" name="login">Apply Coupon</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="mb-30">User Details</h4>
                        <?php foreach($user as $u):  ?>
                        <form method="post">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" value="<?=$u->name;?>" placeholder="First name *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" name="email" placeholder="EMAIL *" value="<?=$u->email;?>" readonly />
                                </div>
                            </div>




                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" name="mobile" value="<?=$u->mobile;?>"  placeholder="Mobile *">
                                </div>
                                <!-- <div class="form-group col-lg-6">
                                    <input type="text" name="shipping"  placeholder="Billing Address *">
                                </div> -->
                            </div>




                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" name="badd" value="<?=$u->shiping_address;?>"  placeholder="Shipping Address *">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" name="sadd" value="<?=$u->billing_address;?>"  placeholder="Billing Address *">
                                </div>
                            </div>
                      
                            <button type="submit" class="btn btn-fill-out btn-block mt-30" name="save" value="1">Save Details</button>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h4>Your Order</h4>
                            <h6 class="text-muted">Subtotal</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            <table class="table no-border">
                                <tbody>
                                    <?php foreach ($items as $i) : ?>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="<?= $i['options']['image']; ?>" alt="#"></td>
                                            <td>
                                                <h6 class="w-160 mb-5"><a href="" class="text-heading"><?= $i['name']; ?></a></h6></span>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="text-muted pl-20 pr-20">x <?= $i['qty']; ?></h6>
                                            </td>
                                            <td>
                                                <h4 class="text-brand">$<?= $i['price']; ?></h4>
                                            </td>
                                        </tr>


                                    <?php endforeach; ?>



                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td>
                                            <h3 class="text-muted">total</h3>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h3 class="text-brand">$<?= $this->cart->total(); ?></h3>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>   <form method="POST">
                    <div class="payment ml-30">
                        <h4 class="mb-30">Payment</h4>
                        <div class="payment_option">
                         
                            <div class="custome-radio">
                                <input class="form-check-input"  value="" type="radio" name="payment" id="exampleRadios3">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" value="COD" type="radio" name="payment" id="exampleRadios4" checked="">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input"  value="" type="radio" name="payment" id="exampleRadios5">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Getway</label>
                            </div>
                               
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="<?=base_url('media/images/site/icons/payment-paypal.svg');?>" alt="">
                            <img class="mr-15" src="<?=base_url('media/images/site/icons/payment-visa.svg');?>" alt="">
                            <img class="mr-15" src="<?=base_url('media/images/site/icons/payment-master.svg');?>" alt="">
                            <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                        </div>
                        <button type="submit"  class="btn btn-fill-out btn-block mt-30" name="paywith"  value="1">Place an Order<i class="fi-rs-sign-out ml-15"></i></button>
                    </div>     </form>
                </div>
            </div>
        </div>
    </main>


    <?php $this->load->view("include/footer"); ?>
</body>

</html>
