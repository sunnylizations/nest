<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST: COMPARE</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view("include/header"); ?>



    <section>
        <div class="row">
            <div class="col-md-6">

                <?php foreach ($product as $p) : ?>
                    <main class="main">
                        <div class="page-header breadcrumb-wrap">
                            <div class="container">
                                <div class="breadcrumb">
                                    <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                    <span></span>
                                    <?php foreach ($category as $pc) :
                                        if ($p->category == $pc->id) {
                                            echo '<a href="' . base_url('category/') . $pc->url . '">' . $pc->category . '</a>';
                                        }
                                    endforeach; ?>
                                    <span></span> <?= $p->heading; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-30">
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 m-auto">
                                    <div class="product-detail accordion-detail">
                                        <div class="row mb-50 mt-30">
                                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                                <div class="detail-gallery">
                                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                    <!-- MAIN SLIDES -->
                                                    <div class="product-image-slider">

                                                        <?php foreach ($product_image as $pi) :
                                                            if ($p->id == $pi->product_id) {
                                                                echo '<figure class="border-radius-10"> <img src="' . base_url('media/images/product/') . $pi->images . '" alt="product image" /> </figure>';
                                                            }
                                                        endforeach; ?>
                                                    </div>
                                                    <!-- THUMBNAILS -->
                                                    <div class="slider-nav-thumbnails">
                                                        <?php foreach ($product_image as $pi) :
                                                            if ($p->id == $pi->product_id) {
                                                                echo '<div><img src="' . base_url("media/images/product/") . $pi->images . '" alt="product image" /></div>';
                                                            }
                                                        endforeach; ?>
                                                    </div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-info pr-30 pl-30">
                                                    <?php
                                                    if ($p->sale == 1) {
                                                        echo '<span class="stock-status out-stock"> Sale on </span>';
                                                    } else {
                                                        echo '<span class="stock-status out-stock">-' . $p->off . '%  off</span>';
                                                    }
                                                    ?>

                                                    <h2 class="title-detail"><a href="<?=base_url('product-detail/').$p->url;?>" ><?= $p->heading; ?></a></h2>
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
                                                            <span class="current-price text-brand">$<?= $p->selling_price; ?></span>
                                                            <span>
                                                                <span class="save-price font-md color3 ml-15">-<?= $p->off; ?>% Off</span>
                                                                <span class="old-price font-md ml-15">$<?= $p->orignal_price; ?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="short-desc mb-30">
                                                        <p class="font-lg"><?= $p->description; ?></p>
                                                    </div>
                                                    <div class="attr-detail attr-size mb-30">
                                                        <strong class="mr-10">Size / Weight: </strong>
                                                        <ul class="list-filter size-filter font-small">
                                                            <li><a href="#">50g</a></li>
                                                            <li class="active"><a href="#">60g</a></li>
                                                            <li><a href="#">80g</a></li>
                                                            <li><a href="#">100g</a></li>
                                                            <li><a href="#">150g</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="detail-extralink mb-50">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                            <span class="qty-val" id="qty">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                        </div>
                                                        <div class="product-extra-link2">
                                                            <button class="button button-add-to-cart add" href="javascript:void(0)" data-url="<?= base_url('product-detail/') . $p->url; ?>" data-id="<?= $p->id; ?>" data-heading="<?= $p->heading; ?>" data-price="<?= $p->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                                                                                                                                                                                                                                                                                                                                    if ($p->id == $pimg->product_id) {
                                                                                                                                                                                                                                                                                                                                        echo  base_url("media/images/product/") . $pimg->images;
                                                                                                                                                                                                                                                                                                                                        break;
                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                endforeach; ?>" onmouseover="findquantity()"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href=""><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="font-xs">
                                                        <ul class="mr-50 float-start">
                                                            <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                                            <li>LIFE: <span class="text-brand">70 days</span></li>
                                                        </ul>
                                                        <ul class="float-start">
                                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                                            <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a href="#" rel="tag">Organic</a>, <a href="#" rel="tag">Brown</a></li>
                                                            <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Detail Info -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="tab-style3">
                                                <ul class="nav nav-tabs text-uppercase">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info">Vendor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content shop_info_tab entry-main-content">
                                                    <div class="tab-pane fade show active" id="Description">
                                                        <?= $p->product_info; ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="Additional-info">
                                                        <?= $p->additional_info; ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="Vendor-info">
                                                        <div class="vendor-logo d-flex mb-30">
                                                            <img src="<?= base_url('media/images/vendor/vendor-18.svg'); ?>" alt="" />
                                                            <div class="vendor-name ml-15">
                                                                <h6>
                                                                    <a href="#">Noodles Co.</a>
                                                                </h6>
                                                                <div class="product-rate-cover text-end">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 90%"></div>
                                                                    </div>
                                                                    <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="contact-infor mb-50">
                                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                                        </ul>
                                                        <div class="d-flex mb-55">
                                                            <div class="mr-30">
                                                                <p class="text-brand font-xs">Rating</p>
                                                                <h4 class="mb-0">92%</h4>
                                                            </div>
                                                            <div class="mr-30">
                                                                <p class="text-brand font-xs">Ship on time</p>
                                                                <h4 class="mb-0">100%</h4>
                                                            </div>
                                                            <div>
                                                                <p class="text-brand font-xs">Chat response</p>
                                                                <h4 class="mb-0">89%</h4>
                                                            </div>
                                                        </div>
                                                        <p>Noodles & Company is an American fast-casual restaurant that offers international and American noodle dishes and pasta in addition to soups and salads. Noodles & Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield, Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In late 2018, there were 460 Noodles & Company locations across 29 states and Washington, D.C.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="Reviews">
                                                        <!--Comments-->
                                                        <div class="comments-area">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                                    <div class="comment-list">




                                                                        <?php
                                                                        foreach ($comments as $c) :
                                                                            if ($c->comment_id == 0) :
                                                                        ?>

                                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                                    <div class="user justify-content-between d-flex">
                                                                                        <div class="thumb text-center">
                                                                                            <img src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png" alt="" />
                                                                                            <a class="font-heading text-brand"><?= $c->name; ?></a>
                                                                                        </div>
                                                                                        <div class="desc">
                                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <span class="font-xs text-muted">
                                                                                                        <?= $c->time; ?> </span>
                                                                                                </div>
                                                                                                <div class="product-rate d-inline-block">
                                                                                                    <div class="product-rating" style="width: 100%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p class="mb-10"><?= $c->comment; ?> </p>
                                                                                            <a onclick="get_comment_id(<?= $c->id; ?>)" class="reply" href="#rep">Reply</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <?php foreach ($comments as $uc) :
                                                                                    if ($c->id == $uc->comment_id) :        ?>

                                                                                        <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                                            <div class="user justify-content-between d-flex">
                                                                                                <div class="thumb text-center">
                                                                                                    <img src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png" alt="" />
                                                                                                    <a href="#" class="font-heading text-brand"><?= $uc->name; ?></a>
                                                                                                </div>
                                                                                                <div class="desc">
                                                                                                    <div class="d-flex justify-content-between mb-10">
                                                                                                        <div class="d-flex align-items-center">
                                                                                                            <span class="font-xs text-muted"><?= $uc->time; ?> </span>
                                                                                                        </div>
                                                                                                        <div class="product-rate d-inline-block">
                                                                                                            <div class="product-rating" style="width: 80%"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="mb-10"><?= $uc->comment; ?> </p>
                                                                                                    <a onclick="get_comment_id(<?= $uc->comment_id; ?>)" class="reply" href="#rep">Reply</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                        <?php endif;
                                                                                endforeach;
                                                                            endif;
                                                                        endforeach; ?>






                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h4 class="mb-30">Customer reviews</h4>
                                                                    <div class="d-flex mb-30">
                                                                        <div class="product-rate d-inline-block mr-15">
                                                                            <div class="product-rating" style="width: 90%"></div>
                                                                        </div>
                                                                        <h6>4.8 out of 5</h6>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>5 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>4 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>3 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>2 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                                    </div>
                                                                    <div class="progress mb-30">
                                                                        <span>1 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                                    </div>
                                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--comment form-->
                                                        <div class="comment-form">
                                                            <h4 class="mb-15">Add a review</h4>
                                                            <div class="product-rate d-inline-block mb-30">
                                                                <div class="product-rating" style="width: 100%"></div>
                                                            </div>
                                                            <div class="row">


                                                                <div class="col-lg-8 col-md-12">
                                                                    <form class="form-contact comment_form" id="rep" method="POST" id="commentForm">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" name="product" value="<?= substr(uri_string(), 15, 500); ?>">
                                                                                    <input type="hidden" name="comment_id" id="comment">
                                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="button button-contactForm" name="submit" value="1">Submit Review</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



















                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>




                <?php endforeach; ?>




            </div>
            <!-- end colmd 6 -->









            <div class="col-md-6">
                <?php foreach ($product1 as $p) : ?>
                    <main class="main">
                        <div class="page-header breadcrumb-wrap">
                            <div class="container">
                                <div class="breadcrumb">
                                    <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                    <span></span>
                                    <?php foreach ($category as $pc) :
                                        if ($p->category == $pc->id) {
                                            echo '<a href="' . base_url('category/') . $pc->url . '">' . $pc->category . '</a>';
                                        }
                                    endforeach; ?>
                                    <span></span> <?= $p->heading; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-30">
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 m-auto">
                                    <div class="product-detail accordion-detail">
                                        <div class="row mb-50 mt-30">
                                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                                <div class="detail-gallery">
                                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                    <!-- MAIN SLIDES -->
                                                    <div class="product-image-slider">

                                                        <?php foreach ($product_image as $pi) :
                                                            if ($p->id == $pi->product_id) {
                                                                echo '<figure class="border-radius-10"> <img src="' . base_url('media/images/product/') . $pi->images . '" alt="product image" /> </figure>';
                                                            }
                                                        endforeach; ?>
                                                    </div>
                                                    <!-- THUMBNAILS -->
                                                    <div class="slider-nav-thumbnails">
                                                        <?php foreach ($product_image as $pi) :
                                                            if ($p->id == $pi->product_id) {
                                                                echo '<div><img src="' . base_url("media/images/product/") . $pi->images . '" alt="product image" /></div>';
                                                            }
                                                        endforeach; ?>
                                                    </div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-info pr-30 pl-30">
                                                    <?php
                                                    if ($p->sale == 1) {
                                                        echo '<span class="stock-status out-stock"> Sale on </span>';
                                                    } else {
                                                        echo '<span class="stock-status out-stock">-' . $p->off . '%  off</span>';
                                                    }
                                                    ?>

                                                  <h2 class="title-detail"><a href="<?=base_url('product-detail/').$p->url;?>">  <?= $p->heading; ?></a></h2>
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
                                                            <span class="current-price text-brand">$<?= $p->selling_price; ?></span>
                                                            <span>
                                                                <span class="save-price font-md color3 ml-15">-<?= $p->off; ?>% Off</span>
                                                                <span class="old-price font-md ml-15">$<?= $p->orignal_price; ?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="short-desc mb-30">
                                                        <p class="font-lg"><?= $p->description; ?></p>
                                                    </div>
                                                    <div class="attr-detail attr-size mb-30">
                                                        <strong class="mr-10">Size / Weight: </strong>
                                                        <ul class="list-filter size-filter font-small">
                                                            <li><a href="#">50g</a></li>
                                                            <li class="active"><a href="#">60g</a></li>
                                                            <li><a href="#">80g</a></li>
                                                            <li><a href="#">100g</a></li>
                                                            <li><a href="#">150g</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="detail-extralink mb-50">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                            <span class="qty-val" id="qty">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                        </div>
                                                        <div class="product-extra-link2">
                                                            <button class="button button-add-to-cart add" href="javascript:void(0)" data-url="<?= base_url('product-detail/') . $p->url; ?>" data-id="<?= $p->id; ?>" data-heading="<?= $p->heading; ?>" data-price="<?= $p->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                                                                                                                                                                                                                                                                                                                                    if ($p->id == $pimg->product_id) {
                                                                                                                                                                                                                                                                                                                                        echo  base_url("media/images/product/") . $pimg->images;
                                                                                                                                                                                                                                                                                                                                        break;
                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                endforeach; ?>" onmouseover="findquantity()"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href=""><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="font-xs">
                                                        <ul class="mr-50 float-start">
                                                            <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                                            <li>LIFE: <span class="text-brand">70 days</span></li>
                                                        </ul>
                                                        <ul class="float-start">
                                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                                            <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a href="#" rel="tag">Organic</a>, <a href="#" rel="tag">Brown</a></li>
                                                            <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Detail Info -->
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="tab-style3">
                                                <ul class="nav nav-tabs text-uppercase">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description1">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info1">Additional info</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info1">Vendor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews1">Reviews (3)</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content shop_info_tab entry-main-content">
                                                    <div class="tab-pane fade show active" id="Description1">
                                                        <?= $p->product_info; ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="Additional-info1">
                                                        <?= $p->additional_info; ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="Vendor-info1">
                                                        <div class="vendor-logo d-flex mb-30">
                                                            <img src="<?= base_url('media/images/vendor/vendor-18.svg'); ?>" alt="" />
                                                            <div class="vendor-name ml-15">
                                                                <h6>
                                                                    <a href="#">Noodles Co.</a>
                                                                </h6>
                                                                <div class="product-rate-cover text-end">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 90%"></div>
                                                                    </div>
                                                                    <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="contact-infor mb-50">
                                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                                        </ul>
                                                        <div class="d-flex mb-55">
                                                            <div class="mr-30">
                                                                <p class="text-brand font-xs">Rating</p>
                                                                <h4 class="mb-0">92%</h4>
                                                            </div>
                                                            <div class="mr-30">
                                                                <p class="text-brand font-xs">Ship on time</p>
                                                                <h4 class="mb-0">100%</h4>
                                                            </div>
                                                            <div>
                                                                <p class="text-brand font-xs">Chat response</p>
                                                                <h4 class="mb-0">89%</h4>
                                                            </div>
                                                        </div>
                                                        <p>Noodles & Company is an American fast-casual restaurant that offers international and American noodle dishes and pasta in addition to soups and salads. Noodles & Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield, Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In late 2018, there were 460 Noodles & Company locations across 29 states and Washington, D.C.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="Reviews1">
                                                        <!--Comments-->
                                                        <div class="comments-area">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                                    <div class="comment-list">




                                                                        <?php
                                                                        foreach ($comments1 as $c) :
                                                                            if ($c->comment_id == 0) :
                                                                        ?>

                                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                                    <div class="user justify-content-between d-flex">
                                                                                        <div class="thumb text-center">
                                                                                            <img src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png" alt="" />
                                                                                            <a class="font-heading text-brand"><?= $c->name; ?></a>
                                                                                        </div>
                                                                                        <div class="desc">
                                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <span class="font-xs text-muted">
                                                                                                        <?= $c->time; ?> </span>
                                                                                                </div>
                                                                                                <div class="product-rate d-inline-block">
                                                                                                    <div class="product-rating" style="width: 100%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p class="mb-10"><?= $c->comment; ?> </p>
                                                                                            <a onclick="get_comment_id(<?= $c->id; ?>)" class="reply" href="#rep">Reply</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <?php foreach ($comments1 as $uc) :
                                                                                    if ($c->id == $uc->comment_id) :        ?>

                                                                                        <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                                            <div class="user justify-content-between d-flex">
                                                                                                <div class="thumb text-center">
                                                                                                    <img src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png" alt="" />
                                                                                                    <a href="#" class="font-heading text-brand"><?= $uc->name; ?></a>
                                                                                                </div>
                                                                                                <div class="desc">
                                                                                                    <div class="d-flex justify-content-between mb-10">
                                                                                                        <div class="d-flex align-items-center">
                                                                                                            <span class="font-xs text-muted"><?= $uc->time; ?> </span>
                                                                                                        </div>
                                                                                                        <div class="product-rate d-inline-block">
                                                                                                            <div class="product-rating" style="width: 80%"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="mb-10"><?= $uc->comment; ?> </p>
                                                                                                    <a onclick="get_comment_id(<?= $uc->comment_id; ?>)" class="reply" href="#rep">Reply</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                        <?php endif;
                                                                                endforeach;
                                                                            endif;
                                                                        endforeach; ?>






                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h4 class="mb-30">Customer reviews</h4>
                                                                    <div class="d-flex mb-30">
                                                                        <div class="product-rate d-inline-block mr-15">
                                                                            <div class="product-rating" style="width: 90%"></div>
                                                                        </div>
                                                                        <h6>4.8 out of 5</h6>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>5 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>4 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>3 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <span>2 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                                    </div>
                                                                    <div class="progress mb-30">
                                                                        <span>1 star</span>
                                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                                    </div>
                                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--comment form-->
                                                        <div class="comment-form">
                                                            <h4 class="mb-15">Add a review</h4>
                                                            <div class="product-rate d-inline-block mb-30">
                                                                <div class="product-rating" style="width: 100%"></div>
                                                            </div>
                                                            <div class="row">


                                                                <div class="col-lg-8 col-md-12">
                                                                    <form class="form-contact comment_form" id="rep" method="POST" id="commentForm">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" name="product" value="<?= substr(uri_string(), 15, 500); ?>">
                                                                                    <input type="hidden" name="comment_id" id="comment">
                                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="button button-contactForm" name="submit" value="1">Submit Review</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



















                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>




                <?php endforeach; ?>



            </div>
        </div>
    </section>










    <?php $this->load->view("include/footer"); ?>



    <script>
        function get_comment_id($id) {
            $("#comment").val($id);
        }
    </script>
</body>

</html>
