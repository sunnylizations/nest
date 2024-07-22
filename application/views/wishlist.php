<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST:WISHLIST</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>

    <?php $this->load->view("include/header"); ?>



    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Shop <span></span> Fillter
                </div>
            </div>
        </div>
        <div class="container mb-30 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="mb-50">
                        <h1 class="heading-2 mb-10">Your Wishlist</h1>
                        <h6 class="text-body">There are <span class="text-brand"><?=count($wishlist);?></span> products in this list</h6>
                    </div>
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col" colspan="2" class="start pl-30">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock Status</th>
                                    <th scope="col">Action</th>
                                    <th scope="col" class="end">Remove</th>
                                </tr>
                            </thead>
                            <tbody>


                         <?php
//  $ab =json_decode(json_encode($wishlist), true);

 ///////there are unique funtion this is filtering repeted arrays
    // function unique_key($array, $keyname)
    // {
    //     $new_array = array();
    //     foreach ($array as $key => $value) {
    //         if (!isset($new_array[$value[$keyname]])) {
    //             $new_array[$value[$keyname]] = $value;
    //         }
    //     }
    //     $new_array = array_values($new_array);
    //     return $new_array;
    // }

    // // Remove duplicate value according to 'name'
    // $unique_arr = unique_key($ab, 'product_id');
    
    foreach($wishlist as $w): ?>
                            
                                <tr class="pt-30">
                                    <td class="image product-thumbnail pt-40 pl-30"><img src="<?=$w->image;?>" alt="#" /></td>
                                    <td class="product-des product-name">
                                        <h6><a class="product-name mb-10" href="<?=$w->url;?>"><?=$w->name;?></a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h3 class="text-brand">$<?=$w->price;?></h3>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <span class="stock-status in-stock mb-0"> In Stock </span>
                                    </td>
                                    <td class="text-right" data-title="Cart" >
                                        <button class="btn btn-sm add"  
                                        <?php foreach($product as $app) : 
                                            if($w->product_id==$app->id){
                                            ?>
                                    data-url="<?=base_url('product-detail/').$app->url;?>" data-id="<?= $app->id; ?>" data-heading="<?= $app->heading; ?>" data-price="<?= $app->selling_price; ?>" data-quantity="1" data-image="<?php foreach ($product_image as $pimg) :
                               if ($app->id == $pimg->product_id) {
                                echo  base_url("media/images/product/") . $pimg->images;
                                break;} endforeach; ?>"

                                <?php  } endforeach; ?>
                                        >Add to cart</button>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a href="<?=base_url('wishdelete/').$w->id;?>" class="text-body"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr>
                      <?php endforeach; ?>







<!-- 
                                <tr>
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                                        <label class="form-check-label" for="exampleCheckbox2"></label>
                                    </td>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#" /></td>
                                    <td class="product-des product-name">
                                        <h6><a class="product-name mb-10" href="shop-product-right.html">Blue Diamond Almonds Lightly Salted</a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h3 class="text-brand">$3.2</h3>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <span class="stock-status in-stock mb-0"> In Stock </span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <button class="btn btn-sm">Add to cart</button>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                                        <label class="form-check-label" for="exampleCheckbox3"></label>
                                    </td>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#" /></td>
                                    <td class="product-des product-name">
                                        <h6><a class="product-name mb-10" href="shop-product-right.html">Fresh Organic Mustard Leaves Bell Pepper</a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h3 class="text-brand">$2.43</h3>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <span class="stock-status in-stock mb-0"> In Stock </span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <button class="btn btn-sm">Add to cart</button>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox4" value="" />
                                        <label class="form-check-label" for="exampleCheckbox4"></label>
                                    </td>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-4-1.jpg" alt="#" /></td>
                                    <td class="product-des product-name">
                                        <h6><a class="product-name mb-10" href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty </a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h3 class="text-brand">$3.21</h3>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <span class="stock-status out-stock mb-0"> Out Stock </span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <button class="btn btn-sm btn-secondary">Contact Us</button>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox5" value="" />
                                        <label class="form-check-label" for="exampleCheckbox5"></label>
                                    </td>
                                    <td class="image product-thumbnail"><img src="assets/imgs/shop/product-5-1.jpg" alt="#" /></td>
                                    <td class="product-des product-name">
                                        <h6><a class="product-name mb-10" href="shop-product-right.html">Foster Farms Takeout Crispy Classic</a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h3 class="text-brand">$3.17</h3>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <span class="stock-status in-stock mb-0"> In Stock </span>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <button class="btn btn-sm">Add to cart</button>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr> -->





                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <?php $this->load->view("include/footer"); ?>

</body>

</html>
