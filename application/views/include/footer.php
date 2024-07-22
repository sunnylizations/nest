<?php foreach ($site as $mysite) : ?>
    <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br />
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="<?= base_url('media/images/banner/banner-9.png'); ?>" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-1.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-2.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-3.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-4.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-5.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="<?= base_url('media/images/site/icons/icon-6.svg'); ?>" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="<?= base_url(); ?>" class="mb-15"><img src="<?= base_url('media/images/logo/') . $mysite->logo; ?>" alt="logo" /></a>
                                <p class="font-lg text-heading">Awesome grocery store website Nest</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="<?= base_url('media/images/site/icons/icon-location.svg'); ?>" alt="" /><strong>Address: </strong> <span><?= $mysite->address; ?></span></li>
                                <li><img src="<?= base_url('media/images/site/icons/icon-contact.svg'); ?>" alt="" /><strong>Call Us:</strong><span>(+91) - <?= $mysite->mobile; ?></span></li>
                                <li><img src="<?= base_url('media/images/site/icons/icon-email-2.svg'); ?>" alt="" /><strong>Email:</strong><span><a href="mailto:<?= $mysite->email; ?>" class="__cf_email__" data-cfemail="eb988a878eaba58e989fc5888486"><?= $mysite->email; ?></a></span></li>
                                <li><img src="<?= base_url('media/images/site/icons/icon-clock.svg'); ?>" alt="" /><strong>Hours:</strong><span><?= $mysite->timing_hours; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                            <li><a href="<?= base_url('account'); ?>">Delivery Information</a></li>
                            <li><a href="<?= base_url('privacy-policy'); ?>">Privacy Policy</a></li>
                            <li><a href="<?= base_url('terms-of-service'); ?>">Terms &amp; Conditions</a></li>
                            <li><a href="<?= base_url('contact-us'); ?>">Contact Us</a></li>

                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="<?= base_url('register'); ?>">Sign In</a></li>
                            <li><a href="<?= base_url('cart'); ?>">View Cart</a></li>
                            <li><a href="<?= base_url('wishlist'); ?>">My Wishlist</a></li>
                            <li><a href="<?= base_url('account'); ?>">Track My Order</a></li>
                            <li><a href="<?= base_url('account'); ?>">Help Ticket</a></li>
                            <li><a href="<?= base_url('account'); ?>">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Milk & Flavoured Milk</a></li>
                            <li><a href="#">Butter and Margarine</a></li>
                            <li><a href="#">Eggs Substitutes</a></li>
                            <li><a href="#">Marmalades</a></li>
                            <li><a href="#">Sour Cream and Dips</a></li>
                            <li><a href="#">Tea & Kombucha</a></li>
                            <li><a href="#">Cheese</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <h4 class="widget-title">Install App</h4>
                        <p class="">From App Store or Google Play</p>
                        <div class="download-app">
                            <a href="<?= $mysite->appstore; ?>" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="<?= base_url('media/images/site/app-store.jpg'); ?>" alt="" /></a>
                            <a href="<?= $mysite->playstore; ?>" class="hover-up mb-sm-2"><img src="<?= base_url('media/images/site/google-play.jpg'); ?>" alt="" /></a>
                        </div>
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class="" src="<?= base_url('media/images/site/payment-method.png'); ?>" alt="" />
                    </div>
                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; <?= date("Y"); ?>, <strong class="text-brand">Nest</strong> - Shoping <br />All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="<?= base_url('media/images/site/icons/phone-call.svg'); ?>" alt="hotline" />
                        <p><?= $mysite->tollfree1; ?><span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="<?= base_url('media/images/site/icons/phone-call.svg'); ?>" alt="hotline" />
                        <p><?= $mysite->tollfree2; ?><span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="<?= $mysite->facebook; ?>" target="_blank"><img src="<?= base_url('media/images/site/icons/icon-facebook-white.svg'); ?>" alt="" /></a>
                        <a href="<?= $mysite->twitter; ?>" target="_blank"><img src="<?= base_url('media/images/site/icons/icon-twitter-white.svg'); ?>" alt="" /></a>
                        <a href="<?= $mysite->instagram; ?>" target="_blank"><img src="<?= base_url('media/images/site/icons/icon-instagram-white.svg'); ?>" alt="" /></a>
                        <a href="<?= $mysite->pinterest; ?>" target="_blank"><img src="<?= base_url('media/images/site/icons/icon-pinterest-white.svg'); ?>" alt="" /></a>
                        <a href="<?= $mysite->youtube; ?>" target="_blank"><img src="<?= base_url('media/images/site/icons/icon-youtube-white.svg'); ?>" alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>

<?php endforeach; ?>





<?php if ($this->session->tempdata('flash') == 1) {
    echo '<div class="addedtocart" onclick="this.remove()"><strong class="text-white">ADDED TO CART!</strong> </div>';
}
?>
<?php if ($this->session->tempdata('wish_add') == 1) {
    echo '<div class="addedtocart" onclick="this.remove()"><strong class="text-white">ADDED TO WISHLIST!</strong> </div>';
}
?>
<?php if ($this->session->tempdata('delete') == 1) {
    echo '<div class="deletetocart" onclick="this.remove()"><strong class="text-white">DELETED TO CART!</strong> </div>';
}
?>
<?php if ($this->session->tempdata('wish_delete') == 1) {
    echo '<div class="deletetocart" onclick="this.remove()"><strong class="text-white">DELETED TO WISHLIST!</strong> </div>';
}
?>

<!-- ===========================modal==================== -->

<!-- The Modal -->
<div class="position-fixed w-100" id="myModal" style="display: none ;top:25vh;left:50%;transform:translate(-50%,-50%);z-index:999999999999999">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center">COMPARE BOX</h4>
                <button type="button" class="close bg-tranparent btn-danger" onclick="$('#myModal').hide('slow')">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="modalbody">
                <!-- Compare body.. -->
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="$('#myModal').hide('slow')">Close</button>
                <button type="button" class="btn " style="background-color:#ffc107 !important ;" onclick="$('#modalbody').html('')">EMPTY</button>
                <button type="button" class="btn " style="background-color: #007bff !important ;" id="compare">COMPARE</button>
            </div>

        </div>
    </div>
</div>



<!-- ///////adding cart with ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
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
                    producturl: prourl
                },
                success: function(data) {
                    // alert(data);
                    window.location.reload();
                }

            });
        });


        ////////////////wishlist
        $(".wishlist").on("click", function() {
            let pid = $(this).data("id");
            let prourl = $(this).data("url");
            let nam = $(this).data("heading");
            let pri = $(this).data("price");
            let img = $(this).data("image");

            $.ajax({
                url: "<?= base_url('Welcome/add_to_wishlist'); ?>",
                method: "POST",
                data: {
                    id: pid,
                    name: nam,
                    price: pri,
                    image: img,
                    producturl: prourl
                },
                success: function(data) {
                    // alert(data);
                    if (data == 1) {
                        window.location.reload();
                    } else {
                        window.location.href = `${data}`;
                    }
                }

            });
        });



        ///////////////////////compare//////////////////////////


        $("#compare").on("click", function() {

            $compare1 = $("#compp0").attr("href");
            $compare2 = $("#compp1").attr("href");
            // alert($compare1.substr(37));
            // alert($compare2.substr(37));
            window.location.href=(`<?= base_url('compare/'); ?>${$compare1.substr(37)}/${$compare2.substr(37)}`);
        });








        ////////////livesearch///////////////// 



        $("#livesearch").on("keyup", function() {
            // console.log($(this).val());
            $.ajax({
                url: "<?= base_url('welcome/livesearch'); ?>",
                method: "POST",
                data: {
                    search: $(this).val()
                },
                success: function(data) {
                    $js = JSON.parse(data);
                    console.log($js.length);
                    $allsearch = "";
                    for ($i = 0; $i < $js.length; $i++) {
                        //  console.log($js[$i].heading+"-----"+$js[$i].url);
                        $allsearch += "<li style='padding:10px 0 '><a href='<?= base_url("product-detail/"); ?>" + $js[$i].url + "' >" + $js[$i].heading + "</a></li>";
                    }
                    // console.log($allsearch);
                    $("#searched").html($allsearch);
                    $("#searchparent").slideDown();
                }
            });

            $(document).on("click", function() {
                $("#searchparent").slideUp();
            });
        });





    });


    function findquantity() {
        let quantit = $(this).data("quantity");
        let val = $("#qty").html();
        $(this).attr("data-quantity", "20");
        // alert(val);
    }
</script>









<!-- Vendor JS-->

<script src="<?= base_url('media/js/vendor/modernizr-3.6.0.min.js'); ?>"></script>
<script src="<?= base_url('media/js/vendor/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?= base_url('media/js/vendor/jquery-migrate-3.3.0.min.js'); ?>"></script>
<script src="<?= base_url('media/js/vendor/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/slick.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/jquery.syotimer.min.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/waypoints.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/wow.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/perfect-scrollbar.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/magnific-popup.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/select2.min.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/counterup.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/jquery.countdown.min.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/images-loaded.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/isotope.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/scrollup.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/jquery.vticker-min.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/jquery.theia.sticky.js'); ?>"></script>
<script src="<?= base_url('media/js/plugins/jquery.elevatezoom.js'); ?>"></script>
<!-- Template  JS -->
<script src="<?= base_url('media/js/main8c94.js?v=4.1'); ?>"></script>
<script src="<?= base_url('media/js/shop8c94.js?v=4.1'); ?>"></script>
