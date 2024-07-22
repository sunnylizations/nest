<?php
if (empty($this->session->userdata("nestuser"))) {
    redirect('register', 'refresh');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST:Account</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view("include/header"); ?>



    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url("logout"); ?>"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <?php foreach ($user as $u) : ?>
                                    <div class="tab-content account dashboard-content pl-50">
                                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Hello <?= $u->name; ?>!</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>,<br />
                                                        manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Your Orders</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">



                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>OrderID</th>
                                                                    <th>Product</th>
                                                                    <th>Product Name</th>
                                                                    <th>Total</th>
                                                                    <th>Status</th>
                                                                    <th>Print Invoice</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php

                                                                foreach ($orders as $o) : ?>
                                                                    <tr>
                                                                        <td>#<?= $o->order_no; ?></td>
                                                                        <td><a href="<?=$o->product_url; ?>"><img src="<?= $o->image; ?>" alt="product" height="80" width="80"></a></td>
                                                                        <td><a href="<?=$o->product_url; ?>"><?= $o->product_name; ?></a></td>
                                                                        <td>
                                                                            <?php if ($o->status == 1) {
                                                                                echo ' <button class="btn-primary" >PREPARE TO DISPATCH</button>';
                                                                            } ?>
                                                                            <?php if ($o->status == 2) {
                                                                                echo '<button class="btn-info" >DISPATCHED</button>';
                                                                            } ?>
                                                                            <?php if ($o->status == 3) {
                                                                                echo '<button class="btn-warning" >SHIPPED</button>';
                                                                            } ?>
                                                                            <?php if ($o->status == 4) {
                                                                                echo '<button class="btn-success" >DELIVERED</button>';
                                                                            } ?>
                                                                            <?php if ($o->status == 5) {
                                                                                echo '<button class="btn-secondary" >PROCESSING</button>';
                                                                            } ?>
                                                                        </td>
                                                                        <td>$<?= $o->total; ?> for <?= $o->quantity; ?> item</td>
                                                                        <td><a href="<?=base_url('invoice/').$o->order_no;?>" class="btn-small d-block">View</a></td>
                                                                    </tr>
                                                                <?php endforeach ?>
                                                        </table>








                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Orders tracking</h3>
                                                </div>
                                                <div class="card-body contact-from-area">
                                                    <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                                <div class="input-style mb-20">
                                                                    <label>Order ID</label>
                                                                    <input name="order-id" placeholder="Found in your order confirmation email" type="text" />
                                                                </div>
                                                                <div class="input-style mb-20">
                                                                    <label>Billing email</label>
                                                                    <input name="billing-email" placeholder="Email you used during checkout" type="email" />
                                                                </div>
                                                                <button class="submit submit-auto-width" type="submit">Track</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card mb-3 mb-lg-0">
                                                        <div class="card-header">
                                                            <h3 class="mb-0">Billing Address</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <address>
                                                                <?= substr($u->billing_address, 0, 34); ?> <br>
                                                                <?= substr($u->billing_address, 34); ?> <br>
                                                            </address>
                                                            <!-- <p>delhi</p> -->
                                                            <a href="#" class="btn-small">Edit on account details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Shipping Address</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <address>
                                                                <?= substr($u->shiping_address, 0, 34); ?> <br>
                                                                <?= substr($u->shiping_address, 34); ?> <br>
                                                            </address>
                                                            <!-- <p>delhi</p> -->
                                                            <a href="#" class="btn-small">Edit on account details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Account Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <!-- <p>Already have an account? <a href="page-login.html">Log in instead!</a></p> -->
                                                    <form method="post">
                                                        <div class="row">
                                                            <!-- <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input class="form-control" name="fname" type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input  class="form-control" name="lname" />
                                                        </div> -->
                                                            <div class="form-group col-md-6">
                                                                <label>Display Name <span class="required">*</span></label>
                                                                <input class="form-control" name="name" value="<?= $u->name; ?>" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Email Address <span class="required">*</span></label>
                                                                <input class="form-control" value="<?= $u->email; ?>" name="email" type="email" readonly />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Mobile <span class="required">*</span></label>
                                                                <input class="form-control" name="mobile" value="<?= $u->mobile; ?>" type="number" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Shipping Address <span class="required">*</span></label>
                                                                <input class="form-control" value="<?= $u->shiping_address; ?>" name="sadd" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Billing Address <span class="required">*</span></label>
                                                                <input class="form-control" name="badd" type="text" value="<?= $u->billing_address; ?>" />
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Current Password <span class="required">*</span></label>
                                                                <input class="form-control" name="currpass" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>New Password <span class="required">*</span></label>
                                                                <input class="form-control" name="newpass" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Confirm Password <span class="required">*</span></label>
                                                                <input class="form-control" name="newconfpass" type="password" />
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="1">Save Change</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <?php $this->load->view("include/footer"); ?>
</body>

</html>
