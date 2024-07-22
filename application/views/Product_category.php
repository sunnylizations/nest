<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST : CATEGORIES</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view("include/header");  ?>


    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">

                            <h1 class="mb-15">
                                <?php foreach ($category as $c) :
                                    if ($c->url == substr(uri_string(), 9, 200)) {
                                        echo $c->category;
                                        break;
                                    }
                                endforeach;  ?>
                                </a></h1>
                            <div class="breadcrumb">
                                <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Category <span></span>
                                <?php


                                //    echo substr(uri_string(),9,200);
                                foreach ($category as $c) :
                                    if ($c->url == substr(uri_string(), 9, 200)) {
                                        echo $c->category;
                                        break;
                                    }
                                endforeach;



                                ?>
                                </a></h1>
                            </div>
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">
                            <ul class="tags-list">
                                <li class="hover-up">
                                    <a href="#"><i class="fi-rs-cross mr-10"></i>Cabbage</a>
                                </li>
                                <li class="hover-up active">
                                    <a href="#"><i class="fi-rs-cross mr-10"></i>Broccoli</a>
                                </li>
                                <li class="hover-up">
                                    <a href="#"><i class="fi-rs-cross mr-10"></i>Artichoke</a>
                                </li>
                                <li class="hover-up">
                                    <a href="#"><i class="fi-rs-cross mr-10"></i>Celery</a>
                                </li>
                                <li class="hover-up mr-0">
                                    <a href="#"><i class="fi-rs-cross mr-10"></i>Spinach</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-12">
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



                        <?php foreach ($allproduct as $ap) : ?>

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

                        <?php endforeach;  ?>
                        <!--end product card-->












              <!-- for parent category of category  -->
                        <?php foreach ($category as $c) {
                            if ($c->url == substr(uri_string(), 9, 200)) {
                                foreach ($category as $b) {
                                    if ($b->parent_category == $c->id) {
                                        $data = $this->db->query("SELECT * FROM product WHERE category REGEXP '[[:<:]]{$b->id}[[:>:]]'")->result();  ?>
                                        <?php foreach ($data as $ap) : ?>

                                            <!-- <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
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
                                            </div> -->

                                        <?php endforeach;  ?>
                                        <!--end product card-->

                        <?php     }
                                }
                            }
                        }
                        ?>













                    </div>
                    <!--product grid-->















                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <?= $links; ?>
                            <!-- <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul> -->
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
                                                            <span class="font-small text-muted">By <a href="">NestFood</a></span>
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
            </div>
        </div>
    </main>




    <?php $this->load->view("include/footer");  ?>



</body>

</html>
