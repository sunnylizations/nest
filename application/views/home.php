<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST: HOME</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>






    <?php $mod = 0;
    foreach ($allpopular as $app) : ?>
        <div class="modal fade custom-modal" id="quickViewModal<?= $mod; ?>" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <?php foreach ($product_image as $pi) :
                                            if ($pi->product_id == $app->id) { ?>
                                                <figure class="border-radius-10">
                                                    <img src="<?= base_url("media/images/product/" . $pi->images); ?>" alt="product image" />
                                                </figure>

                                        <?php  }
                                        endforeach; ?>

                                        <!-- <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                        </figure> -->
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <?php foreach ($product_image as $pi) :
                                            if ($pi->product_id == $app->id) { ?>
                                                <div><img src="<?= base_url("media/images/product/" . $pi->images); ?>" alt="product image" /></div>
                                        <?php }
                                        endforeach; ?>
                                        <!-- <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div> -->
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <!-- <span class="stock-status out-stock"> Sale Off </span> -->
                                    <?php
                                    if ($app->hot == 1) {
                                        echo '<span class="stock-status out-stock">Hot</span>';
                                    } elseif ($app->sale == 1) {
                                        echo '<span class="stock-status out-stock">sale</span>';
                                    } elseif ($app->new == 1) {
                                        echo '<span class="stock-status out-stock">New</span>';
                                    } else {
                                        echo '<span class="stock-status out-stock">-' . $app->off . '%off</span>';
                                    }
                                    ?>



                                    <h3 class="title-detail"><a href="<?=base_url("product-detail/").$app->url;?>" class="text-heading"><?= $app->heading; ?></a></h3>
                                    <div class="product-detail-rating">
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">$<?=$app->selling_price;?></span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15"><?=$app->off;?>% Off</span>
                                                <span class="old-price font-md ml-15">$<?=$app->orignal_price;?></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="detail-extralink mb-30">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button  class="button button-add-to-cart add"
                                            href="javascript:void(0)" data-url="<?=base_url('product-detail/').$app->url;?>" data-id="<?= $app->id; ?>" data-heading="<?= $app->heading; ?>" data-price="<?= $app->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($app->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                            ><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="font-xs">
                                        <ul>
                                            <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php $mod++;
    endforeach; ?>








    <?php $this->load->view("include/header"); ?>

    <main class="main">

        <!-- start hero slider  -->
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <?php foreach ($slider as $s) : ?>
                            <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?= base_url('media/images/slider/') . $s->image; ?>">
                                <div class="slider-content">
                                    <h1 class="display-2 mb-40">
                                        <?= $s->heading; ?>
                                    </h1>
                                    <p class="mb-65"><?= $s->description; ?></p>
                                    <form class="form-subcriber d-flex">
                                        <input type="email" placeholder="Your emaill address" />
                                        <button class="btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>
        <!--End hero slider-->


        <!-- start category slider  -->
        <section class="popular-categories section-padding">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="title">
                        <h3>Featured Categories</h3>
                        <ul class="list-inline nav nav-tabs links">
                            <?php $cat = 0;
                            foreach ($category as $c) : ?>
                                <li class="list-inline-item nav-item"><a class="nav-link" href="<?= base_url("category/" . $c->url); ?>"> <?= $c->category; ?></a></li>
                            <?php $cat++;
                                if ($cat == 4) {
                                    break;
                                }
                            endforeach; ?>

                        </ul>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
                </div>
                <div class="carausel-10-columns-cover position-relative">
                    <div class="carausel-10-columns" id="carausel-10-columns">

                        <?php $color = 9;
                        $delay = 1;
                        foreach ($category as $c) : ?>
                            <div class="card-2 bg-<?= $color; ?> wow animate__animated animate__fadeInUp" data-wow-delay=".<?= $delay; ?>s">
                                <figure class="img-hover-scale overflow-hidden">
                                    <a href="<?= base_url('category/') . $c->url; ?>"><img src="<?= base_url('media/images/category/') . $c->image; ?>" alt="" /></a>
                                </figure>
                                <h6><a href="<?= base_url('category/') . $c->url; ?>"><?= $c->category; ?></a></h6>
                                <span><?php 
                            

                            //    $item = 0;
                            // $expl = explode(",", $c->category);
                            // foreach ($expl as $exp) {
                            //     foreach ($product as $pro) {
                            //         if ($pro->category == $exp) {
                            //              $item++;
                            //         }
                            //     }
                            // }
                                
                                $items=0;
                                        foreach ($product as $p) :
                                            if(preg_match("[$c->id]", $p->category)){
                                              $items++;
                                              if($c->parent_category==0){
                                               foreach($category as $ca){
                                                if($c->id==$ca->parent_category){
                                                   $items++;
                                                }
                                               }
                                              }
                                            }
                                        endforeach;
                                        echo $items . " Items";

                                        ?></span>
                            </div>

                        <?php $color++;
                            $delay++;
                            if ($color == 15) {
                                $color = 9;
                            }
                            if ($delay == 10) {
                                $delay = 0;
                            }
                        endforeach; ?>

                    </div>
                </div>
            </div>
        </section>
        <!--End category slider-->

        <!-- start banner  -->
        <section class="banners mb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="<?= base_url('media/images/banner/banner-1.png'); ?>" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Everyday Fresh & <br />Clean with Our<br />
                                    Products
                                </h4>
                                <a href="" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <img src="<?= base_url('media/images/banner/banner-2.png'); ?>" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Make your Breakfast<br />
                                    Healthy and Easy
                                </h4>
                                <a href="" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <img src="<?= base_url('media/images/banner/banner-3.png'); ?>" alt="" />
                            <div class="banner-text">
                                <h4>The best Organic <br />Products Online</h4>
                                <a href="" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End banners-->



        <!--start product-->


        <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h3>Popular Products</h3>
                    <ul class="nav nav-tabs links" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Cake &amp; Milks </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Coffes &amp; Teas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Snacks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Custrad Apple</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">Vegetables</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Headphone</button>
                        </li>
                    </ul>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">


                            <?php $quick = 0;
                            foreach ($allpopular as $ap) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url('product-detail/') . $ap->url; ?>">
                                                    <?php $pimgs = 0;
                                                    $first_image = "";
                                                    foreach ($product_image as $pimg) :
                                                        if ($ap->id == $pimg->product_id) {
                                                    ?>

                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                ><i class="fi-rs-heart"></i>
                                            </a>



                                                <a aria-label="Compare" class="action-btn comp"  href="javascript:void(0)"   data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>"
                                                \><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal<?= $quick; ?>"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($ap->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($ap->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($ap->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $ap->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $ap->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                        echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                // foreach ($category as $c) :
                                                //     if ($ap->category == $c->id) {
                                                //         echo '<a href="' . base_url('category/') . $c->url . '">' . $c->category . "</a>";
                                                //     }
                                                // endforeach;
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url('product-detail/') . $ap->url; ?>"> <?= $ap->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $ap->selling_price; ?></span>
                                                    <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                
                                ><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php $quick++;
                            endforeach;  ?>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one-->








                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">



                            <?php foreach ($cakemilk as $cm) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $cm->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($cm->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$cm->url;?>" data-id="<?= $cm->id; ?>" data-heading="<?= $cm->heading; ?>" data-price="<?= $cm->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($cm->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                ><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($cm->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($cm->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($cm->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $cm->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php

                                $expl = explode(",", $cm->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $cm->url; ?>"> <?= $cm->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $cm->selling_price; ?></span>
                                                    <span class="old-price">$<?= $cm->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="javascript:void(0)" data-url="<?=base_url('product-detail/').$cm->url;?>" data-id="<?= $cm->id; ?>" data-heading="<?= $cm->heading; ?>" data-price="<?= $cm->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($cm->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                
                                ><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;  ?>


                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two-->









                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">



                            <?php $i=1; foreach ($coffetea as $ct) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $ct->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($ct->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ct->url;?>" data-id="<?= $ct->id; ?>" data-heading="<?= $ct->heading; ?>" data-price="<?= $ct->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ct->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal<?=$i;?>"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($ct->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($ct->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($ct->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $ct->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $ct->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $ct->url; ?>"> <?= $ct->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $ct->selling_price; ?></span>
                                                    <span class="old-price">$<?= $ct->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" 
                                                   href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ct->url;?>" data-id="<?= $ct->id; ?>" data-heading="<?= $ct->heading; ?>" data-price="<?= $ct->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ct->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                        
                                ><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php $i++; endforeach;  ?>


                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three-->











                    <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                        <div class="row product-grid-4">




                            <?php $i=1; foreach ($snack as $sn) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $sn->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($sn->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$sn->url;?>" data-id="<?= $sn->id; ?>" data-heading="<?= $sn->heading; ?>" data-price="<?= $sn->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($sn->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal<?=$i;?>"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($sn->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($sn->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($sn->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $sn->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $sn->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $sn->url; ?>"> <?= $sn->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $sn->selling_price; ?></span>
                                                    <span class="old-price">$<?= $sn->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" 
                                                    
                         href="javascript:void(0)" data-url="<?=base_url('product-detail/').$sn->url;?>" data-id="<?= $sn->id; ?>" data-heading="<?= $sn->heading; ?>" data-price="<?= $sn->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($sn->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                            > <i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php $i++; endforeach;  ?>

                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->








                    <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                        <div class="row product-grid-4">





                            <?php foreach ($custardapple as $ca) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $ca->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($ca->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" 
                                                href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ca->url;?>" data-id="<?= $ca->id; ?>" data-heading="<?= $ca->heading; ?>" data-price="<?= $ca->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ca->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                ><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($ca->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($ca->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($ca->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $ca->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $ca->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $ca->url; ?>"> <?= $ca->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $ca->selling_price; ?></span>
                                                    <span class="old-price">$<?= $ca->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" 
                 href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                 
                                ><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;  ?>


                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab five-->









                    <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                        <div class="row product-grid-4">




                            <?php foreach ($vegetable as $v) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $v->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($v->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" 
                                               href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$v->url;?>" data-id="<?= $v->id; ?>" data-heading="<?= $v->heading; ?>" data-price="<?= $v->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($v->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                ><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($v->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($v->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($v->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $v->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $v->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $v->url; ?>"> <?= $v->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $v->selling_price; ?></span>
                                                    <span class="old-price">$<?= $v->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" 
                                              href="javascript:void(0)" data-url="<?=base_url('product-detail/').$v->url;?>" data-id="<?= $v->id; ?>" data-heading="<?= $v->heading; ?>" data-price="<?= $v->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($v->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                                                                                                                                                                                                                            
><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;  ?>


                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab six-->












                    <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                        <div class="row product-grid-4">





                            <?php foreach ($headphone as $h) : ?>

                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?= base_url("product-detail/") . $h->url; ?>">
                                                    <?php $pimgs = 0;
                                                    foreach ($product_image as $pimg) :
                                                        if ($h->id == $pimg->product_id) { ?>
                                                            <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                    <?php }
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    endforeach; ?>
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Add To Wishlist" class="action-btn wishlist" 
                                                
                                            href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$h->url;?>" data-id="<?= $h->id; ?>" data-heading="<?= $h->heading; ?>" data-price="<?= $h->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($h->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                ><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <?php
                                                if ($h->hot == 1) {
                                                    echo '<span class="hot">Hot</span>';
                                                } elseif ($h->sale == 1) {
                                                    echo '<span class="sale">sale</span>';
                                                } elseif ($h->new == 1) {
                                                    echo '<span class="new">New</span>';
                                                } else {
                                                    echo '<span class="best">-' . $h->off . '%off</span>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <?php
                                $expl = explode(",", $h->category);
                                foreach ($expl as $exp) {
                                    foreach ($category as $cat) {
                                        if ($cat->id == $exp) {
                                            echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                        }
                                    }
                                }
                                                ?>
                                            </div>
                                            <h2><a href="<?= base_url("product-detail/") . $h->url; ?>"> <?= $h->heading; ?></a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$<?= $h->selling_price; ?></span>
                                                    <span class="old-price">$<?= $h->orignal_price; ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" 
                                                    href="javascript:void(0)" data-url="<?=base_url('product-detail/').$h->url;?>" data-id="<?= $h->id; ?>" data-heading="<?= $h->heading; ?>" data-price="<?= $h->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($h->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;  ?>

                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab seven-->
                </div>
                <!--End tab-content-->
            </div>
        </section>













        <!-- start daily best sale  -->


        <section class="section-padding pb-5">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn">
                    <h3 class="">Daily Best Sells</h3>
                    <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                        <div class="banner-img style-2">
                            <div class="banner-text">
                                <h2 class="mb-100">Bring nature into your home</h2>
                                <a href="#" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">

                        <div class="tab-content" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">



                                        <?php $i=0; foreach ($allpopular as $ap) : ?>
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="<?= base_url("product-detail/") . $ap->url; ?>">
                                                            <?php $pimgs = 0;
                                                            foreach ($product_image as $pimg) :
                                                                if ($ap->id == $pimg->product_id) { ?>
                                                                    <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                                    <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <?php }
                                                                if ($pimgs == 2) {
                                                                    break;
                                                                }
                                                            endforeach; ?>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal<?=$i;?>"> <i class="fi-rs-eye"></i></a>

                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up wishlist" 
                                                        
                                                    href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                        
                                                        ><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <?php
                                                        if ($ap->hot == 1) {
                                                            echo '<span class="best">Hot</span>';
                                                        } elseif ($ap->sale == 1) {
                                                            echo '<span class="sale">sale</span>';
                                                        } elseif ($ap->new == 1) {
                                                            echo '<span class="new">New</span>';
                                                        } else {
                                                            echo '<span class="hot">-' . $ap->off . '%off</span>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <?php

                                            $expl = explode(",", $ap->category);
                                            foreach ($expl as $exp) {
                                                foreach ($category as $cat) {
                                                    if ($cat->id == $exp) {
                                                        echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                                    }
                                                }
                                            }
                                                        ?>
                                                    </div>
                                                    <h2><a href="<?= base_url("product-detail/") . $ap->url; ?>"><?= $ap->heading; ?></a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$<?= $ap->selling_price; ?> </span>
                                                        <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="font-xs text-heading"> Sold: 90/120</span>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn w-100 hover-up add" 
                                                    href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                                                                                                                                                                                                                                            ><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                                </div>
                                            </div>

                                        <?php $i++; endforeach; ?>

                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->










                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">




                                        <?php $i=1; foreach ($allpopular as $ap) : ?>
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="<?= base_url("product-detail/") . $ap->url; ?>">
                                                            <?php $pimgs = 0;
                                                            foreach ($product_image as $pimg) :
                                                                if ($ap->id == $pimg->product_id) { ?>
                                                                    <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                                    <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <?php }
                                                                if ($pimgs == 2) {
                                                                    break;
                                                                }
                                                            endforeach; ?>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal<?=$i;?>"> <i class="fi-rs-eye"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up wishlist" 
                                                        
                                                     href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                        
                                                        ><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <?php
                                                        if ($ap->hot == 1) {
                                                            echo '<span class="best">Hot</span>';
                                                        } elseif ($ap->sale == 1) {
                                                            echo '<span class="sale">sale</span>';
                                                        } elseif ($ap->new == 1) {
                                                            echo '<span class="new">New</span>';
                                                        } else {
                                                            echo '<span class="hot">-' . $ap->off . '%off</span>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <?php
                                            $expl = explode(",", $ap->category);
                                            foreach ($expl as $exp) {
                                                foreach ($category as $cat) {
                                                    if ($cat->id == $exp) {
                                                        echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                                    }
                                                }
                                            }
                                                        ?>
                                                    </div>
                                                    <h2><a href="<?= base_url("product-detail/") . $ap->url; ?>"><?= $ap->heading; ?></a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$<?= $ap->selling_price; ?> </span>
                                                        <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="font-xs text-heading"> Sold: 90/120</span>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn w-100 hover-up add" href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                                                                                                                     > <i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                                </div>
                                            </div>

                                        <?php $i++; endforeach; ?>

                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>










                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">





                                        <?php foreach ($newitem as $ap) : ?>
                                            <div class="product-cart-wrap">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="<?= base_url("product-detail/") . $ap->url; ?>">
                                                            <?php $pimgs = 0;
                                                            foreach ($product_image as $pimg) :
                                                                if ($ap->id == $pimg->product_id) { ?>
                                                                    <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                                    <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                            <?php }
                                                                if ($pimgs == 2) {
                                                                    break;
                                                                }
                                                            endforeach; ?>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up wishlist" 
                                                 href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                        
                                                        ><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <?php
                                                        if ($ap->hot == 1) {
                                                            echo '<span class="best">Hot</span>';
                                                        } elseif ($ap->sale == 1) {
                                                            echo '<span class="sale">sale</span>';
                                                        } elseif ($ap->new == 1) {
                                                            echo '<span class="new">New</span>';
                                                        } else {
                                                            echo '<span class="hot">-' . $ap->off . '%off</span>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <?php
                                            $expl = explode(",", $ap->category);
                                            foreach ($expl as $exp) {
                                                foreach ($category as $cat) {
                                                    if ($cat->id == $exp) {
                                                        echo '<a href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                                    }
                                                }
                                            }
                                                        ?>
                                                    </div>
                                                    <h2><a href="<?= base_url("product-detail/") . $ap->url; ?>"><?= $ap->heading; ?></a></h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <div class="product-price mt-10">
                                                        <span>$<?= $ap->selling_price; ?> </span>
                                                        <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                                    </div>
                                                    <div class="sold mt-15 mb-15">
                                                        <div class="progress mb-5">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="font-xs text-heading"> Sold: 90/120</span>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn w-100 hover-up add" href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                ><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>

                                        <!--End product Wrap-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
        <!-- end featured  -->









        <!-- start deals  -->

        <section class="section-padding pb-5">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3 class="">Deals Of The Day</h3>
                    <a class="show-all" href="shop-grid-right.html">
                        All Deals
                        <i class="fi-rs-angle-right"></i>
                    </a>
                </div>
                <div class="row">


                    <?php foreach ($deals as $d) : ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="product-img-action-wrap">
                                    <div class="product-img">

                                        <?php foreach ($product_image as $pi) :
                                            if ($d->product_id == $pi->product_id) {
                                                echo '<a href=""><img src="' . base_url('media/images/product/') . $pi->images . '" alt="" /> </a>';
                                                break;
                                            }
                                        endforeach;
                                        ?>


                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="deals-countdown-wrap">
                                        <div class="deals-countdown" data-countdown="<?= substr($d->time, 0, 8) . (substr($d->time, 8, 2) + 1) . substr($d->time, 10, 9); ?>"></div>
                                    </div>
                                    <div class="deals-content">
                                        <?php foreach ($product as $p) :
                                            if ($d->product_id == $p->id) {
                                        ?>
                                                <h2><a href="<?= base_url("product-detail/") . $p->url; ?>"><?= $p->heading; ?> </a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$<?= $p->selling_price; ?></span>
                                                        <span class="old-price">$<?= $p->orignal_price; ?></span>
                                                    </div>

                                                    <div class="add-cart">
                                                        <a class="add" 
                                                        href="javascript:void(0)" data-url="<?=base_url('product-detail/').$p->url;?>" data-id="<?= $p->id; ?>" data-heading="<?= $p->heading; ?>" data-price="<?= $p->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($p->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                                        ><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>

                                        <?php }
                                        endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </section>
        <!--End Deals-->


        <section class="section-padding mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                        <div class="product-list-small animated animated">





                            <?php $three = 0;
                            foreach ($topselling as $tp) : ?>

                                <article class="row align-items-center hover-up">
                                    <figure class="col-md-4 mb-0">

                                        <?php foreach ($product_image as $pi) :
                                            if ($tp->product_id == $pi->product_id) {
                                                echo '<a href=""><img src="' . base_url('media/images/product/') . $pi->images . '" alt="" /></a>';
                                                break;
                                            }
                                        endforeach;
                                        ?>
                                    </figure>
                                    <div class="col-md-8 mb-0"> <?php
                                                                foreach ($product as $p) :  if ($tp->product_id == $p->id) {
                                                                        echo '<h6><a href="' . base_url('product-detail/') . $p->url . '">' . $p->heading . '</a></h6>';  ?>

                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$<?= $p->selling_price; ?></span>
                                                    <span class="old-price">$<?= $p->orignal_price; ?></span>
                                                </div>
                                        <?php       }
                                                                endforeach; ?>
                                    </div>
                                </article>


                            <?php $three++;
                                if ($three == 3) {
                                    break;
                                }
                            endforeach; ?>
                        </div>
                    </div>














                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="section-title style-1 mb-30 animated animated">Trending product</h4>
                        <div class="product-list-small animated animated">


                            <?php $three = 0;
                            foreach ($trending as $td) : ?>

                                <article class="row align-items-center hover-up">
                                    <figure class="col-md-4 mb-0">

                                        <?php foreach ($product_image as $pi) :
                                            if ($td->product_id == $pi->product_id) {
                                                echo '<a href="shop-product-right"><img src="' . base_url('media/images/product/') . $pi->images . '" alt="" /></a>';
                                                break;
                                            }
                                        endforeach;
                                        ?>
                                    </figure>
                                    <div class="col-md-8 mb-0">
                                        <?php foreach ($product as $p) :
                                            if ($td->product_id == $p->id) {
                                                echo '<h6><a href="' . base_url("product-detail/") . $p->url . '"> ' . $p->heading . '</a></h6>'; ?>

                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$<?= $p->selling_price; ?></span>
                                                    <span class="old-price">$<?= $p->orignal_price; ?></span>
                                                </div>
                                        <?php        }
                                        endforeach; ?>
                                    </div>
                                </article>
                            <?php $three++;
                                if ($three == 3) {
                                    break;
                                }
                            endforeach; ?>
                        </div>
                    </div>







                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                        <div class="product-list-small animated animated">


                            <?php $three = 0;
                            foreach ($newitem2 as $nw) : ?>

                                <article class="row align-items-center hover-up">
                                    <figure class="col-md-4 mb-0">

                                        <?php foreach ($product_image as $pi) :
                                            if ($nw->id == $pi->product_id) {
                                                echo '<a href="' . base_url("product-detail/") . $nw->url . '"><img src="' . base_url('media/images/product/') . $pi->images . '" alt="" /></a>';
                                                break;
                                            }
                                        endforeach;
                                        ?>
                                    </figure>
                                    <div class="col-md-8 mb-0">
                                        <h6>
                                            <a href="<?= base_url("product-detail/") . $nw->url; ?>"> <?php
                                                                                                        echo $nw->heading;

                                                                                                        ?></a>
                                        </h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div class="product-price">
                                            <span>$<?= $nw->selling_price; ?></span>
                                            <span class="old-price">$<?= $nw->orignal_price; ?></span>
                                        </div>

                                    </div>
                                </article>
                            <?php $three++;
                                if ($three == 3) {
                                    break;
                                }
                            endforeach; ?>
                        </div>
                    </div>











                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                        <div class="product-list-small animated animated">



                            <?php $three = 0;
                            foreach ($top_rated as $tr) : ?>

                                <article class="row align-items-center hover-up">
                                    <figure class="col-md-4 mb-0">

                                        <?php foreach ($product_image as $pi) :
                                            if ($tr->product_id == $pi->product_id) {
                                                echo '<a href=""><img src="' . base_url('media/images/product/') . $pi->images . '" alt="" /></a>';
                                                break;
                                            }
                                        endforeach;
                                        ?>
                                    </figure>
                                    <div class="col-md-8 mb-0">
                                        <?php
                                        foreach ($product as $p) :
                                            if ($tr->product_id == $p->id) {
                                                echo '<h6><a href="' . base_url('product-detail/') . $p->url . '">' . $p->heading . '</a></h6>';
                                        ?>

                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$<?= $p->selling_price; ?></span>
                                                    <span class="old-price">$<?= $p->orignal_price; ?></span>
                                                </div>
                                        <?php        }
                                        endforeach; ?>
                                    </div>
                                </article>
                            <?php $three++;
                                if ($three == 3) {
                                    break;
                                }
                            endforeach; ?>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End 4 columns-->






    </main>





    <?php $this->load->view("include/footer");
    ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script>
        $(document).ready(function() {
            $(".add").on("click", function() {
                let pid = $(this).data("id");
                let prourl = $(this).data("url");
                let nam = $(this).data("heading");
                let pri = $(this).data("price");
                let img = $(this).data("image");
                let quant = $(this).data("quantity");

                $.ajax({
                    url: "<?= base_url('Welcome/add_to_cart'); ?>",
                    method: "POST",
                    data: {
                        id: pid,
                        name: nam,
                        price: pri,
                        quantity: quant,
                        image: img,
                        producturl:prourl
                    },
                    success: function(data) {
                        // alert(data);
                        window.location.reload();
                    }

                });
            });
        });
    </script> -->




</body>

</html>
