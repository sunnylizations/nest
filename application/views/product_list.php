<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST : PRODUCT-LIST</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view('include/header'); ?>


    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Product-List</h1>
                            <div class="breadcrumb">
                                <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Shop <span></span> Product-List
                            </div>
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">
                            <ul class="tags-list">
                                <li class="hover-up">
                                    <a href=""><i class="fi-rs-cross mr-10"></i>Cabbage</a>
                                </li>
                                <li class="hover-up active">
                                    <a href=""><i class="fi-rs-cross mr-10"></i>Broccoli</a>
                                </li>
                                <li class="hover-up">
                                    <a href=""><i class="fi-rs-cross mr-10"></i>Artichoke</a>
                                </li>
                                <li class="hover-up">
                                    <a href=""><i class="fi-rs-cross mr-10"></i>Celery</a>
                                </li>
                                <li class="hover-up mr-0">
                                    <a href=""><i class="fi-rs-cross mr-10"></i>Spinach</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-4-5">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>We found <strong class="text-brand"><?php $count = 0;
                                                                    foreach ($allproduct as $p) : $count++;
                                                                    endforeach;
                                                                    echo $count; ?></strong> items for you!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list mb-50">




                        <?php foreach ($allproduct as $ap) : ?>





                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <div class="product-img-inner">
                                            <a href="<?= base_url('product-detail/') . $ap->url; ?>">
                                                <?php $pimgs = 0;
                                                foreach ($product_image as $pimg) :
                                                    if ($ap->id == $pimg->product_id) {
                                                ?>

                                                        <img class="default-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                        <img class="hover-img" src="<?= base_url('media/images/product/') . $pimg->images; ?>" alt="">
                                                <?php $pimgs++;
                                                        if ($pimgs == 2) {
                                                            break;
                                                        }
                                                    }


                                                endforeach; ?>
                                            </a>
                                        </div>
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
                                        echo '<a style="display:inline" href="' . base_url('category/') . $cat->url . '">' . $cat->category . "</a> | ";
                                    }
                                }
                            }
                                        ?>
                                    </div>
                                    <h2><a href="<?= base_url('product-detail/') . $ap->url; ?>"><?= $ap->heading; ?></a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        <span class="ml-30">500g</span>
                                    </div>
                                    <p class="mt-15 mb-15"><?= $ap->description; ?></p>

                                    <div class="product-price">
                                        <span>$<?= $ap->selling_price; ?> </span>
                                        <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                    </div>

                                    <div class="mt-30 d-flex align-items-center">
                                        <a aria-label="Buy now" class="btn add" 
href="javascript:void(0)" data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"                                                                                                                       ><i class="fi-rs-shopping-cart mr-5"></i>Add to Cart</a>
                                        <a href="#" class="add-wishlish ml-30 text-body font-sm font-heading font-weight-bold"><i class="fi-rs-shuffle mr-5"></i>Add Compare</a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;  ?>
                        <!--end product card-->

                    </div>
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <?= $links; ?>
                        </nav>
                    </div>






                    <section class="section-padding pb-5">
                        <div class="section-title">
                            <h3 class="">Deals Of The Day</h3>
                            <a class="show-all" href="">
                                All Deals
                                <i class="fi-rs-angle-right"></i>
                            </a>
                        </div>
                        <div class="row">





                            <?php foreach ($deal as $d) : ?>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img">
                                                <a href="">
                                                    <?php foreach ($product_image as $pi) :
                                                        if ($d->product_id == $pi->product_id) {
                                                            echo '<img src="' . base_url('media/images/product/') . $pi->images . '" alt="" />';
                                                            break;
                                                        }
                                                    endforeach;
                                                    ?>

                                                </a>
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
                                                        <h2><a href="<?= base_url('product-detail/') . $p->url; ?>"><?= $p->heading; ?> </a></h2>
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
                                break;} endforeach; ?>"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                    </section>
                    <!--End Deals-->
                </div>











                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            <?php foreach ($category as $c) : ?>
                                <li>
                                    <a href="<?= base_url('category/') . $c->url; ?>"> <img src="<?= base_url('media/images/category/') . $c->image; ?>" alt="" /><?= $c->category; ?></a><span class="count"><?php


                                $items = 0;
                                foreach ($product as $p) :
                                    if (preg_match("[$c->id]", $p->category)) {
                                        $items++;
                                        if ($c->parent_category == 0) {
                                            foreach ($category as $ca) {
                                                if ($c->id == $ca->parent_category) {
                                                    $items++;
                                                }
                                            }
                                        }
                                    }
                                endforeach;
                                echo $items;
                                ?></span>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <!-- <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Fill by price</h5>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range" class="mb-20"></div>
                                <div class="d-flex justify-content-between">
                                    <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong></div>
                                    <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Color</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                                    <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                </div>
                                <label class="fw-900 mt-15">Item Condition</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                                    <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                                    <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                                    <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                </div>
                            </div>
                        </div>
                        <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div> -->
                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                        <h5 class="section-title style-1 mb-30">New products</h5>



                        <?php $three = 0;
                        foreach ($newitem as $n) : ?>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <?php foreach ($product_image as $pi) :
                                        if ($n->id == $pi->product_id) {
                                            echo '<img src="' . base_url('media/images/product/') . $pi->images . '" alt="" />';
                                            break;
                                        }
                                    endforeach;
                                    ?>

                                </div>
                                <div class="content pt-10">
                                    <h6><a href="shop-product-detail.html"><?= $n->heading; ?></a></h6>
                                    <p class="price mb-0 mt-5">$<?= $n->selling_price; ?></p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>

                        <?php $three++;
                            if ($three == 3) {
                                break;
                            }
                        endforeach; ?>




                    </div>
                    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="<?= base_url('media/images//banner/banner-11.png'); ?>" alt="" />
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Oganic</span><br />
                                Juice
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <?php $this->load->view('include/footer'); ?>




</body>

</html>
