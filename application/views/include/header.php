      <!-- Preloader Start -->
      <div id="preloader-active">
          <div class="preloader d-flex align-items-center justify-content-center">
              <div class="preloader-inner position-relative">
                  <div class="text-center">
                      <img src="<?= base_url('media/images/site/loading.gif'); ?>" alt="img" />
                  </div>
              </div>
          </div>
      </div>






      <?php foreach ($site as $mysite) : ?>
          <!-- Start Header  -->
          <header class="header-area header-style-1 header-height-2">
              <div class="mobile-promotion">
                  <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
              </div>
              <div class="header-top header-top-ptb-1 d-none d-lg-block">
                  <div class="container">
                      <div class="row align-items-center">
                          <div class="col-xl-3 col-lg-4">
                              <div class="header-info">
                                  <ul>
                                      <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                                      <li><a href="<?= base_url("account"); ?>">My Account</a></li>
                                      <li><a href="<?= base_url("wishlist"); ?>">Wishlist</a></li>
                                      <li><a href="<?= base_url('account'); ?>">Order Tracking</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-xl-6 col-lg-4">
                              <div class="text-center">
                                  <div id="news-flash" class="d-inline-block">
                                      <ul>
                                          <li>100% Secure delivery without contacting the courier</li>
                                          <li>Supper Value Deals - Save more with coupons</li>
                                          <li>Trendy 25silver jewelry, save up 35% off today</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-4">
                              <div class="header-info header-info-right">
                                  <ul>
                                      <li>Need help? Call Us: <strong class="text-brand"> + <?= $mysite->tollfree1; ?></strong></li>
                                      <li>
                                          <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                          <ul class="language-dropdown">
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-fr.png'); ?>" alt="" />india</a>
                                              </li>
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-dt.png'); ?>" alt="" />france</a>
                                              </li>
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-ru.png'); ?>" alt="" />japan</a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a class="language-dropdown-active" href="#">USD <i class="fi-rs-angle-small-down"></i></a>
                                          <ul class="language-dropdown">
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-fr.png'); ?>" alt="" />INR</a>
                                              </li>
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-dt.png'); ?>" alt="" />MBP</a>
                                              </li>
                                              <li>
                                                  <a href="#"><img src="<?= base_url('media/images/site/flag-ru.png'); ?>" alt="" />EU</a>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                  <div class="container">
                      <div class="header-wrap">
                          <div class="logo logo-width-1">
                              <a href="<?= base_url(); ?>"><img src="<?= base_url('media/images/logo/') . $mysite->logo; ?>" alt="logo" /></a>
                          </div>
                          <div class="header-right">
                              <div class="search-style-2">
                                  <form>
                                      <select class="select-active">
                                          <option> All Categories</option>
                                          <?php foreach ($category as $c) : ?>
                                              <option><a href="<?= base_url("category/") . $c->url; ?>"> <?= $c->category; ?></a></option>
                                          <?php endforeach; ?>
                                      </select>
                                      <input type="text" id="livesearch" placeholder="Search for items..." />
                                      
                                  </form>

                                  <div id="searchparent" style="box-shadow: 2px 2px 5px grey;margin-left: 13%;background-color: white;position: absolute;z-index: 9999999999999;padding: 50px;border-radius: 10px;display:none;">
                                    <ul id="searched"></ul>
                                  </div>
                              </div>
                              <div class="header-action-right">
                                  <div class="header-action-2">
                                      <div class="search-location">
                                          <form>
                                              <select class="select-active">
                                                  <option>Your Location</option>
                                                  <option>INDIA</option>
                                                  <option>Alaska</option>
                                                  <option>Arizona</option>
                                                  <option>Delaware</option>
                                                  <option>Florida</option>
                                                  <option>Georgia</option>
                                                  <option>Hawaii</option>
                                                  <option>Indiana</option>
                                                  <option>Maryland</option>
                                                  <option>Nevada</option>
                                                  <option>New Jersey</option>
                                                  <option>New Mexico</option>
                                                  <option>New York</option>
                                              </select>
                                          </form>
                                      </div>
                                      <div class="header-action-icon-2">
                                          <a href="">
                                              <img class="svgInject" alt="Nest" src="<?= base_url('media/images/site/icons/icon-compare.svg'); ?>" />
                                              <span class="pro-count blue">3</span>
                                          </a>
                                          <a href=""><span class="lable ml-0">Compare</span></a>
                                      </div>
                                      <div class="header-action-icon-2">
                                          <a href="<?= base_url('wishlist'); ?>">
                                              <img class="svgInject" alt="Nest" src="<?= base_url('media/images/site/icons/icon-heart.svg'); ?>" />
                                              <span class="pro-count blue"><?= count($wishlist); ?></span>
                                          </a>
                                          <a href="<?= base_url('wishlist'); ?>"><span class="lable">Wishlist</span></a>
                                      </div>
                                      <div class="header-action-icon-2">
                                          <a class="mini-cart-icon" href="<?= base_url('cart'); ?>">
                                              <img alt="Nest" src="<?= base_url('media/images/site/icons/icon-cart.svg'); ?>" />
                                              <span class="pro-count blue"><?php $c = 0;
                                                                            foreach ($items as $i) {
                                                                                $c++;
                                                                            }
                                                                            echo $c; ?></span>
                                          </a>
                                          <a href="<?= base_url('cart'); ?>"><span class="lable">Cart</span></a>

                                      </div>
                                      <div class="header-action-icon-2">
                                          <a href="<?= base_url("account"); ?>">
                                              <img class="svgInject" alt="Nest" src="<?= base_url('media/images/site/icons/icon-user.svg'); ?>" />
                                          </a>
                                          <a href="<?= base_url("account"); ?>"><span class="lable ml-0">Account</span></a>

                                          <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown" <?php if (empty($this->session->userdata("nestuser"))) {
                                                                                                                    echo "style='display:none'";
                                                                                                                }  ?>>
                                              <ul>
                                                  <li>
                                                      <a href="<?= base_url("account"); ?>"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                                  </li>
                                                  <li>
                                                      <a href="<?= base_url("account"); ?>"><i class="fi fi-rs-location-alt mr-10"></i>My Orders</a>
                                                  </li>

                                                  <li>
                                                      <a href="<?= base_url("account"); ?>"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                                  </li>
                                                  <li>
                                                      <a href="<?= base_url("logout"); ?>"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="header-bottom header-bottom-bg-color sticky-bar">
                  <div class="container">
                      <div class="header-wrap header-space-between position-relative">
                          <div class="logo logo-width-1 d-block d-lg-none">
                              <a href="<?= base_url(); ?>"><img src="<?= base_url('media/images/logo/') . $mysite->logo; ?>" alt="logo" /></a>
                          </div>
                          <div class="header-nav d-none d-lg-flex" style="width: 75%;">
                              <div class="main-categori-wrap d-none d-lg-block">
                                  <a class="categories-button-active" href="#">
                                      <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                      <i class="fi-rs-angle-down"></i>
                                  </a>
                                  <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                      <div class="d-flex categori-dropdown-inner">
                                          <ul>
                                              <?php $i = 1;
                                                foreach ($category as $c) : ?>
                                                  <li>
                                                      <a href="<?= base_url('category/') . $c->url; ?>"> <img src="<?= base_url('media/images/category/') . $c->image; ?>" alt="category" /><?= $c->category; ?></a>
                                                  </li>

                                              <?php if ($i == 4) {
                                                        echo "</ul><ul class='end'>";
                                                    }
                                                    if ($i == 8) {
                                                        break;
                                                    }
                                                    $i++;
                                                endforeach; ?>
                                          </ul>
                                      </div>
                                      <div class="more_slide_open" style="display: none">
                                          <div class="d-flex categori-dropdown-inner">
                                              <ul>
                                                  <?php $i = 1;
                                                    foreach ($category as $c) :
                                                        if ($i > 8) {
                                                    ?>
                                                          <li>
                                                              <a href="<?= base_url('category/') . $c->url; ?>"> <img src="<?= base_url('media/images/category/') . $c->image; ?>" alt="" /><?= $c->category; ?></a>
                                                          </li>
                                                  <?php }
                                                        if ($i == 10) {
                                                            echo "</ul><ul class='end'>";
                                                        }
                                                        $i++;
                                                    endforeach;
                                                    ?>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                                  </div>
                              </div>
                              <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                                  <nav>
                                      <ul>
                                        
                                          <li>
                                              <a class="active" href="<?= base_url(); ?>">Home </a>
                                          </li>

                                          <li>
                                              <a href="<?= base_url('about-us'); ?>">About</a>
                                          </li>
                                          <li>
                                              <a href="">Shop <i class="fi-rs-angle-down"></i></a>
                                              <ul class="sub-menu">
                                                  <li><a href="<?= base_url('allproducts'); ?>">All products</a></li>
                                                  <li><a href="<?= base_url('products'); ?>">Products</a></li>
                                                  <li><a href="<?= base_url('product-list'); ?>">Product List</a></li>
                                              </ul>
                                          </li>
                                       
                                          <li class="position-static">
                                              <a href="#">Product Category <i class="fi-rs-angle-down"></i></a>
                                              <ul class="mega-menu">
                                                  <li class="sub-mega-menu sub-mega-menu-width-22">
                                                      <a class="menu-title" href="#">Fruit & Vegetables</a>
                                                      <ul>
                                                          <?php
                                                            $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=12")->result();
                                                            foreach ($fruits as $f) {
                                                            ?>
                                                              <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                          <?php } ?>
                                                      </ul>
                                                  </li>
                                                  <li class="sub-mega-menu sub-mega-menu-width-22">
                                                      <a class="menu-title" href="#">Breakfast & Dairy</a>
                                                      <ul>
                                                          <?php
                                                            $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=13")->result();
                                                            foreach ($fruits as $f) {
                                                            ?>
                                                              <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                          <?php } ?>
                                                      </ul>
                                                  </li>
                                                  <li class="sub-mega-menu sub-mega-menu-width-22">
                                                      <a class="menu-title" href="#">Electronics & Headphone</a>
                                                      <ul>
                                                          <?php
                                                            $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=14")->result();
                                                            foreach ($fruits as $f) {
                                                            ?>
                                                              <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                          <?php } ?>
                                                      </ul>
                                                  </li>
                                                  <li class="sub-mega-menu sub-mega-menu-width-34">
                                                      <div class="menu-banner-wrap">
                                                          <a href="<?= base_url('allproducts'); ?>"><img src="<?= base_url('media/images/banner/banner-menu.png'); ?>" alt="Nest" /></a>
                                                          <div class="menu-banner-content">
                                                              <h4>Hot deals</h4>
                                                              <h3>
                                                                  Don't miss<br />
                                                                  Trending
                                                              </h3>
                                                              <div class="menu-banner-price">
                                                                  <span class="new-price text-success">Save to 50%</span>
                                                              </div>
                                                              <div class="menu-banner-btn">
                                                                  <a href="<?= base_url('allproducts'); ?>">Shop now</a>
                                                              </div>
                                                          </div>
                                                          <div class="menu-banner-discount">
                                                              <h3>
                                                                  <span>25%</span>
                                                                  off
                                                              </h3>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </li>
                                       
                                          <li>
                                              <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                              <ul class="sub-menu">
                                                  <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                                                  <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                                                  <li><a href="<?= base_url('account'); ?>">My Account</a></li>
                                                  <li><a href="<?= base_url('login'); ?>">Login</a></li>
                                                  <li><a href="<?= base_url("register"); ?>">Register</a></li>
                                                  <li><a href="<?= base_url('purchase-guide'); ?>">Purchase Guide</a></li>
                                                  <li><a href="<?= base_url('privacy-policy'); ?>">Privacy Policy</a></li>
                                                  <li><a href="<?= base_url('terms-of-service'); ?>">Terms of Service</a></li>
                                              </ul>
                                          </li>
                                          <li>
                                              <a href="<?= base_url('contact-us'); ?>">Contact</a>
                                          </li>


                                          <li>
                                              <a href="<?= base_url('register'); ?>">Register </a>
                                          </li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                          <div class="hotline d-none d-lg-flex">
                              <img src="<?= base_url('media/images/site/icons/icon-headphone.svg'); ?>" alt="hotline" />
                              <p><?= $mysite->tollfree1; ?><span>24/7 Support Center</span></p>
                          </div>
                          <div class="header-action-icon-2 d-block d-lg-none">
                              <div class="burger-icon burger-icon-white">
                                  <span class="burger-icon-top"></span>
                                  <span class="burger-icon-mid"></span>
                                  <span class="burger-icon-bottom"></span>
                              </div>
                          </div>
                          <div class="header-action-right d-block d-lg-none">
                              <div class="header-action-2">
                                  <div class="header-action-icon-2">
                                      <a href="<?= base_url('wishlist'); ?>">
                                          <img alt="Nest" src="<?= base_url('media/images/site/icons/icon-heart.svg'); ?>" />
                                          <span class="pro-count white">4</span>
                                      </a>
                                  </div>
                                  <div class="header-action-icon-2">
                                      <a class="mini-cart-icon" href="<?= base_url("cart"); ?>">
                                          <img alt="Nest" src="<?= base_url('media/images/site/icons/icon-cart.svg'); ?>" />
                                          <span class="pro-count white"><?php $c = 0;
                                                                        foreach ($items as $i) {
                                                                            $c++;
                                                                        }
                                                                        echo $c; ?></span>
                                      </a>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <div class="mobile-header-active mobile-header-wrapper-style">
              <div class="mobile-header-wrapper-inner">
                  <div class="mobile-header-top">
                      <div class="mobile-header-logo">
                          <a href="<?= base_url(); ?>"><img src="<?= base_url('media/images/logo/') . $mysite->logo; ?>" alt="logo" /></a>
                      </div>
                      <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                          <button class="close-style search-close">
                              <i class="icon-top"></i>
                              <i class="icon-bottom"></i>
                          </button>
                      </div>
                  </div>
                  <div class="mobile-header-content-area">
                      <div class="mobile-search search-style-3 mobile-header-border">
                          <form>
                              <input type="text" placeholder="Search for items…" />
                              <button type="submit"><i class="fi-rs-search"></i></button>
                          </form>
                      </div>
                      <div class="mobile-menu-wrap mobile-header-border">
                          <!-- mobile menu start -->
                          <nav>
                              <ul class="mobile-menu font-heading">
                                  <li class="menu-item-has-children">
                                      <a href="<?= base_url(); ?>">Home</a>
                                  </li>
                                  <li class="menu-item-has-children">
                                      <a href="#">shop</a>
                                      <ul class="dropdown">
                                          <li><a href="<?= base_url('allproducts'); ?>">All product</a></li>
                                          <li><a href="<?= base_url('products'); ?>">Product</a></li>
                                          <li><a href="<?= base_url('product-list'); ?>">Product List</a></li>
                                      </ul>
                                  </li>

                                  <li class="menu-item-has-children">
                                      <a href="#">Product Category</a>
                                      <ul class="dropdown">
                                          <li class="menu-item-has-children">
                                              <a href="#">Fruits & Vegetables</a>
                                              <ul class="dropdown">
                                                  <?php
                                                    $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=12")->result();
                                                    foreach ($fruits as $f) {
                                                    ?>
                                                      <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                  <?php } ?>
                                              </ul>
                                          </li>
                                          <li class="menu-item-has-children">
                                              <a href="#">Breakfast & Dairy</a>
                                              <ul class="dropdown">
                                                  <?php
                                                    $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=13")->result();
                                                    foreach ($fruits as $f) {
                                                    ?>
                                                      <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                  <?php } ?>
                                              </ul>
                                          </li>
                                          <li class="menu-item-has-children">
                                              <a href="#">Electronics & headphones</a>
                                              <ul class="dropdown">
                                                  <?php
                                                    $fruits = $this->db->query("SELECT * FROM product_category WHERE parent_category=14")->result();
                                                    foreach ($fruits as $f) {
                                                    ?>
                                                      <li><a href="<?= base_url("category/") . $f->url; ?>"><?= $f->category; ?></a></li>
                                                  <?php } ?>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>

                                  <li class="menu-item-has-children">
                                      <a href="#">Pages</a>
                                      <ul class="dropdown">
                                          <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                                          <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                                          <li><a href="<?= base_url('account'); ?>">My Account</a></li>
                                          <li><a href="<?= base_url('login'); ?>">Login</a></li>
                                          <li><a href="<?= base_url("register"); ?>">Register</a></li>
                                          <li><a href="<?= base_url('purchase-guide'); ?>">Purchase Guide</a></li>
                                          <li><a href="<?= base_url('privacy-policy'); ?>">Privacy Policy</a></li>
                                          <li><a href="<?= base_url('terms-of-service'); ?>">Terms of Service</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu-item-has-children">
                                      <a href="#">Language</a>
                                      <ul class="dropdown">
                                          <li><a href="#">English</a></li>
                                          <li><a href="#">French</a></li>
                                          <li><a href="#">German</a></li>
                                          <li><a href="#">Spanish</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </nav>
                          <!-- mobile menu end -->
                      </div>
                      <div class="mobile-header-info-wrap">
                          <div class="single-mobile-header-info">
                              <a href=""><i class="fi-rs-marker"></i> Our location </a>
                          </div>
                          <div class="single-mobile-header-info">
                              <a href="<?= base_url('login'); ?>"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                          </div>
                          <div class="single-mobile-header-info">
                              <a href="#"><i class="fi-rs-headphones"></i>(+91)<?= $mysite->tollfree1; ?> </a>
                          </div>
                      </div>
                      <div class="mobile-social-icon mb-50">
                          <h6 class="mb-15">Follow Us</h6>
                          <a href="<?= $mysite->facebook; ?>"><img src="<?= base_url('media/images/site/icons/icon-facebook-white.svg'); ?>" alt="" /></a>
                          <a href="<?= $mysite->twitter; ?>"><img src="<?= base_url('media/images/site/icons/icon-twitter-white.svg'); ?>" alt="" /></a>
                          <a href="<?= $mysite->instagram; ?>"><img src="<?= base_url('media/images/site/icons/icon-instagram-white.svg'); ?>" alt="" /></a>
                          <a href="<?= $mysite->pinterest; ?>"><img src="<?= base_url('media/images/site/icons/icon-pinterest-white.svg'); ?>" alt="" /></a>
                          <a href="<?= $mysite->youtube; ?>"><img src="<?= base_url('media/images/site/icons/icon-youtube-white.svg'); ?>" alt="" /></a>
                      </div>
                      <div class="site-copyright">Copyright <?= date("Y"); ?> © Nest. All rights reserved. Powered by Nest.</div>
                  </div>
              </div>
          </div>
          <!--End header-->
      <?php endforeach; ?>
