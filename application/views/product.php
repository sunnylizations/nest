<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST : PRODUCTS</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>

    <?php $mod = 0;
    foreach ($allproduct as $app) : ?>
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



                                    <h3 class="title-detail"><a href="<?= base_url("product-detail/") . $app->url; ?>" class="text-heading"><?= $app->heading; ?></a></h3>
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
                                            <span class="current-price text-brand">$<?= $app->selling_price; ?></span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15"><?= $app->off; ?>% Off</span>
                                                <span class="old-price font-md ml-15">$<?= $app->orignal_price; ?></span>
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
                                            <button type="submit" class="button button-add-to-cart add" href="javascript:void(0)" data-url="<?= base_url('product-detail/') . $app->url; ?>" data-id="<?= $app->id; ?>" data-heading="<?= $app->heading; ?>" data-price="<?= $app->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                                                                                                                                                                                                                                                                                                                                        if ($app->id == $pimg->product_id) {
                                                                                                                                                                                                                                                                                                                                            echo  base_url("media/images/product/") . $pimg->images;
                                                                                                                                                                                                                                                                                                                                            break;
                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                    endforeach; ?>"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
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





    <?php $this->load->view('include/header'); ?>


    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Products</h1>
                            <div class="breadcrumb">
                                <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Shop <span></span> Products
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
                    <div class="row product-grid">




                        <?php $i = 0;
                        foreach ($allproduct as $ap) : ?>

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
                                            <a aria-label="Add To Wishlist" class="action-btn wishlist" 
                                            
                                      href="javascript:void(0)"  
                                                data-url="<?=base_url('product-detail/').$ap->url;?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>"  data-image="<?php foreach ($product_image as $pimg) :
                               if ($ap->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"
                                            
                                            ><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal<?= $i; ?>"><i class="fi-rs-eye"></i></a>
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
                                            ?></a>
                                        </div>
                                        <h2><a href="<?= base_url('product-detail/') . $ap->url; ?>"> <?= $ap->heading; ?></a></h2>
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
                                                <span>$<?= $ap->selling_price; ?></span>
                                                <span class="old-price">$<?= $ap->orignal_price; ?></span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="javascript:void(0)" data-url="<?= base_url('product-detail/') . $ap->url; ?>" data-id="<?= $ap->id; ?>" data-heading="<?= $ap->heading; ?>" data-price="<?= $ap->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                                                                                                                                                                                                                                                                                            if ($ap->id == $pimg->product_id) {
                                                                                                                                                                                                                                                                                                echo  base_url("media/images/product/") . $pimg->images;
                                                                                                                                                                                                                                                                                                break;
                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                        endforeach; ?>"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php $i++;
                        endforeach;  ?>
                        <!--end product card-->
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
                            <a class="show-all" href="shop-grid-right.html">
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
                                                            <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                        </div>
                                                        <div class="product-card-bottom">
                                                            <div class="product-price">
                                                                <span>$<?= $p->selling_price; ?></span>
                                                                <span class="old-price">$<?= $p->orignal_price; ?></span>
                                                            </div>

                                                            <div class="add-cart">
                                                                <a class="add" href="javascript:void(0)" data-url="<?= base_url('product-detail/') . $p->url; ?>" data-id="<?= $p->id; ?>" data-heading="<?= $p->heading; ?>" data-price="<?= $p->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                                                                                                                                                                                                                                                                                                        if ($p->id == $pimg->product_id) {
                                                                                                                                                                                                                                                                                                            echo  base_url("media/images/product/") . $pimg->images;
                                                                                                                                                                                                                                                                                                            break;
                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                    endforeach; ?>"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="<?=base_url("category/").$c->url;?>"> <img src="<?= base_url('media/images/category/') . $c->image; ?>" alt="" /><?= $c->category; ?></a><span class="count"><?php  $items = 0;
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
                                echo $items; ?></span>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Fill by price</h5>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range" class="mb-20">2000</div>
                                <input type="range" class="form-range" min="0" max="10000" step="100" onmousemove="document.getElementById('slider-range').innerHTML=this.value" value="2000" id="price">
                                <div class="d-flex justify-content-between">
                                    <div class="caption">From:0 <strong id="slider-range-value1" class="text-brand"></strong></div>
                                    <div class="caption">To:10,000 <strong id="slider-range-value2" class="text-brand"></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">offers</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="sale" <?php if (str_contains(uri_string(), "sale") == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        }; ?> />
                                    <label class="form-check-label" for="exampleCheckbox1"><span>sale</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="popular" cons='<?php echo uri_string("/?"); ?>' <?php if (str_contains(uri_string(), "popular") == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }; ?> />
                                    <label class="form-check-label" for="exampleCheckbox2"><span>popular</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="new" <?php if (str_contains(uri_string(), "new") == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        }; ?> />
                                    <label class="form-check-label" for="exampleCheckbox3"><span>new</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox4" value="hot" <?php if (str_contains(uri_string(), "hot") == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        }; ?> />
                                    <label class="form-check-label" for="exampleCheckbox4"><span>hot </span></label>
                                </div>
                                <!-- <label class="fw-900 mt-15">Item Condition</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                                    <label class="form-check-label" for="exampleCheckbox11"><span>New </span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                                    <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                    <br />
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                                    <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                </div> -->
                            </div>
                        </div>
                        <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div>
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



    <script defer>
        $(document).ready(function() {

            $("#price").change(function() {
                window.location.href = `<?= base_url("products/"); ?>${get_all()}`;
            });

            $(":checkbox").click(function() {
                if ($(this).is(":checked")) {
                    // alert($(this).val());                        
                    window.location.href = `<?= base_url("products/"); ?>${get_all()}`;
                } else {
                    //  alert("not found");
                    window.location.href = `<?= base_url("products/"); ?>${get_all()}`;
                }
            });

            function get_all() {
                $arr = Array();
                $(":checkbox:checked").each(function() {
                    $arr.push($(this).val());
                });
                // $arr.push($("#price").val());
                // console.log($arr);
                return $arr.join("*");
            }
        });
    </script>

</body>

</html>
