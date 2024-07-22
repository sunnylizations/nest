<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST:PRODUCT INVOICE</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php foreach($site as $s): ?>
    <div class="invoice invoice-content invoice-1">
        <div class="back-top-home hover-up mt-30 ml-30">
            <a class="hover-up" href="<?=base_url();?>"><i class="fi-rs-home mr-5"></i> Homepage</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner">
                        <div class="invoice-info" id="invoice_wrapper">
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-name">
                                            <div class="logo">
                                                <a href="index.html"><img src="<?=base_url('media/images/site/logo-light.svg');?>" alt="logo" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-numb">
                                            <h6 class="text-end mb-10 mt-20">Date: <?php 
                                            echo date("Y")." ";
                                            echo date("F",mktime(0, 0,0, date("m"), 10))." ";
                                            echo date("d");
                                        
                                            ?></h6>
                                            <h6 class="text-end invoice-header-1">Invoice No: #<?php foreach($myproducts as $p){
                                                echo $p->order_no;break;
                                            } ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-lg-9 col-md-6">
                                        <div class="invoice-number">
                                            <h4 class="invoice-title-1 mb-10">Invoice To</h4>
                                            <p class="invoice-addr-1">
                                                <?php foreach($user as $u): ?>
                                                <strong><?=$u->name;?></strong> <br />
                                                 <?=$u->email;?> <br />
                                                 <?=$u->billing_address;?>, <br />India

                                                <?php endforeach;?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="invoice-number">
                                            <h4 class="invoice-title-1 mb-10">Invoice From</h4>
                                            <p class="invoice-addr-1">
                                                <strong>NestMart Inc</strong> <br />
                                                <a href="#" class="__cf_email__" >Nestmall.com</a> <br />
                                                205 North Michigan Avenue, <br />Suite 810 Chicago, 60601, USA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-9 col-md-6">
                                        <h4 class="invoice-title-1 mb-10">Due Date:<?php 
                                            echo date("d")." ";
                                            echo date("F",mktime(0, 0,0, date("m"), 10))." ";
                                            echo date("Y");
                                            
                                           
                                        
                                            ?></h4>
                                        <p class="invoice-from-1"> </p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h4 class="invoice-title-1 mb-10">Payment Method</h4>
                                        <p class="invoice-from-1">Via COD</p>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table table-striped invoice-table">
                                        <thead class="bg-active">

                                            <tr>
                                                <th>Item name</th>
                                                <th class="text-center">Unit Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>


                                        <tbody>


                                            <?php $arr = array();
                                            $sub = 0;
                                            foreach ($myproducts as $mp) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span><?= $mp->product_name; ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">$<?= $mp->price; ?></td>
                                                    <td class="text-center"><?= $mp->quantity; ?></td>
                                                    <td class="text-right">$<?= $mp->price * $mp->quantity; ?></td>
                                                </tr>
                                            <?php
                                                $arr[$sub] = ($mp->price * $mp->quantity);
                                                $sub++;
                                            endforeach;
                                            array_sum($arr)
                                            ?>






                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">SubTotal</td>
                                                <td class="text-right"> $<?= array_sum($arr);?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">Tax</td>
                                                <td class="text-right">$<?=(array_sum($arr)*12.5)/100;?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">Grand Total</td>
                                                <td class="text-right f-w-600">$<?=number_format(array_sum(($arr))+((array_sum($arr) * 12.5) / 100),2) ;?></td>
                                            </tr>





                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h3 class="invoice-title-1">Important Note</h3>
                                            <ul class="important-notes-list-1">
                                                <li>All amounts shown on this invoice are in US dollars</li>
                                                <li>finance charge of 1.5% will be made on unpaid balances after 30 days.</li>
                                                <li>Once order done, money can't refund</li>
                                                <li>Delivery might delay due to some external dependency</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-offsite">
                                        <div class="text-end">
                                            <p class="mb-0 text-13">Thank you for your business</p>
                                            <p><strong>NEST </strong></p>
                                            <div class="mobile-social-icon mt-50 print-hide">
                                                <h6>Follow Us</h6>
                                                <a href="<?=$s->facebook;?>"><img src="<?= base_url('media/images/site/icons/icon-facebook-white.svg'); ?>" alt="" /></a>
                                                <a href="<?=$s->twitter;?>"><img src="<?= base_url('media/images/site/icons/icon-twitter-white.svg'); ?>" alt="" /></a>
                                                <a href="<?=$s->instagram;?>"><img src="<?= base_url('media/images/site/icons/icon-instagram-white.svg'); ?>" alt="" /></a>
                                                <a href="<?=$s->pinterest;?>"><img src="<?= base_url('media/images/site/icons/icon-pinterest-white.svg'); ?>" alt="" /></a>
                                                <a href="<?=$s->youtube;?>"><img src="<?= base_url('media/images/site/icons/icon-youtube-white.svg'); ?>" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="javascript:window.print()" class="btn btn-lg btn-custom btn-print hover-up"> <img src="<?= base_url('media/images/site/icons/icon-print.svg'); ?>" alt="" /> Print </a>
                            <a id="invoice_download_btn" class="btn btn-lg btn-custom btn-download hover-up"> <img src="<?= base_url('media/images/site/icons/icon-download.svg'); ?>" alt="" /> Download </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <script src="<?= base_url('media/js/vendor/modernizr-3.6.0.min.js'); ?>"></script>
    <script src="<?= base_url('media/js/vendor/jquery-3.6.0.min.js'); ?>"></script>
    <?= base_url('media
    <!-- Invoice JS -->
    <script src="<?=base_url'); ?>('media/js/invoice/jspdf.min.js');?>"></script>
    <script src="<?= base_url('media/js/invoice/invoice.js'); ?>"></script>
</body>

</html>
