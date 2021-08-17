<?php
  session_start();
  if(isset($_SESSION['product'])){
      $products = $_SESSION['product'];
  }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Zent Store - Shopping Online</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Themify Icons CSS ==-->
    <link href="assets/css/themify-icons.css" rel="stylesheet"/>
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet"/>
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

<!--wrapper start-->
<div class="wrapper home-default-wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
          <div class="header-logo-area">
            <a href="index.html">
              <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
              <img class="logo-light" src="assets/img/logo.png" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col-7 col-sm-9 col-md-9 col-lg-10">
          <div class="header-align">
            <div class="header-navigation-area">
              <ul class="main-menu nav justify-content-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="header-action-area">
              <div class="header-action-currency">
                <span class="current-currency">VNĐ</span>
              </div>
              <div class="header-action-usermenu">
                <div class="icon-usermenu"><i class="ti-settings"></i></div>
                <ul class="user-menu">
                  <li><a href="account.html">My Account</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="login.html">Login</a></li>
                </ul>
              </div>
              <div class="header-action-cart">
                <a class="cart-icon" href="shop-cart.html">
                  <span class="cart-count">2</span>
                  <i class="ti-shopping-cart"></i>
                </a>
                <div class="cart-dropdown-menu">
                  <div class="minicart-action">
                    <div class="minicart-item">
                      <div class="thumb">
                        <img src="assets/img/shop/cart/1.jpg" alt="Alan-Shop">
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="#/">2. New badge product - m / gold</a></h4>
                        <h6 class="nrbQ">Qty: 1</h6>
                        <p class="price">$80.00</p>
                      </div>
                    </div>
                    <div class="minicart-item">
                      <div class="thumb">
                        <img src="assets/img/shop/cart/1.jpg" alt="Alan-Shop">
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="#/">11. Product with video - purple</a></h4>
                        <h6 class="nrbQ">Qty: 1</h6>
                        <p class="price">$39.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="shopping-cart-total">
                    <h4>Total <span>$119.00</span></h4>
                  </div>
                  <div class="shopping-cart-btn">
                    <a class="btn-theme m-0" href="shop-cart.html">View Cart</a>
                    <a class="btn-theme m-0" href="shop-checkout.html">Checkout</a>
                  </div>
                </div>
              </div>
              <button class="btn-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->

  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="assets/img/photos/bg-page-title.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Products</h2>
              <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">/</span></a><span class="active">Products</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Shop Area Wrapper ==-->
    <section class="product-area product-grid-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-12">
                <div class="shop-topbar-wrapper">
                  <div class="collection-shorting">
                    <div class="shop-topbar-left">
                      <div class="view-mode">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list-ul"></i></button>
                          </div>
                        </nav>
                      </div>
                      <p>Showing 1 - 15 of 33 result</p>
                    </div>
                    <div class="product-sorting-wrapper">
                      <div class="product-show">
                        <label for="SortBy">Sort by</label>
                        <select class="form-select" id="SortBy" aria-label="Default select example">
                          <option value="manual">Featured</option>
                          <option value="best-selling">Best Selling</option>
                          <option value="title-ascending" selected>Alphabetically, A-Z</option>
                          <option value="title-descending">Alphabetically, Z-A</option>
                          <option value="price-ascending">Price, low to high</option>
                          <option value="price-descending">Price, high to low</option>
                          <option value="created-descending">Date, new to old</option>
                          <option value="created-ascending">Date, old to new</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content active" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                <div class="row" id="shop1">
                  <?php foreach ($products as $key => $product) { if($key == 15){break;}?>
                  <div class="col-md-6 col-xl-4 col-xxl-3">
                    <!-- Start Product Item -->
                    <div class="product-item">
                      <div class="product-thumb">
                        <a href="shop-single-product.html">
                          <img src="<?= $product['product_images']?>" alt="Alan-Shop">
                          <div class="ribbons">
                            <span class="ribbon ribbon-hot">Sale</span>
                            <span class="ribbon ribbon-onsale align-right">-15%</span>
                          </div>
                        </a>
                        <div class="product-action">
                          <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                          </a>
                          <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                          </a>
                          <a class="action-cart" href="#/">
                            <i class="fa fa-opencart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html"><?= $product['product_name']?></a></h4>
                        <div class="prices">
                          <span class="price"><?= number_format($product['product_price'])?></span>
                          
                        </div>
                      </div>
                    </div>
                    <!-- End Product Item -->
                  </div>
                <?php } ?>
                </div>
              </div>            
            </div>
              </div>            
            </div>
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers">
                  <li>
                    <a class="page-number disabled next" href="blog.html">
                      <i class="ion-ios-arrow-left"></i>
                      Prev
                    </a>
                  </li>
                  <li>
                    <a class="page-number active" href="shop.php">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="shop02.php">2</a>
                  </li>
                  <li>
                    <a class="page-number next" href="blog.html">
                      Next
                      <i class="ion-ios-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="total-pages">
                <p>Showing 1 - 15 of 33 result</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Shop Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">About Information</h4>
              <div class="about-widget">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud reprhendit in voluptate velit esse exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item widget-menu-item">
              <h4 class="widget-title">Information</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="shop-account.html">My Account</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">Quick Links</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="#/">Shipping policy</a></li>
                  <li><a href="#/">Size Chart</a></li>
                  <li><a href="#/">Login</a></li>
                  <li><a href="#/">My Account</a></li>
                  <li><a href="#/">Register</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">Contact Us</h4>
              <p class="mb-0">Your current address goes to here,120 example, country.</p>
              <ul class="widget-contact-info">
                <li class="info-phone"><a href="tel://(008)25425425425487">(008) 254 254 254 25487</a></li>
                <li class="info-mail"><a href="mailto://example@admin.com">example@admin.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-content">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="widget-copyright text-center">
                <p>© 2025 <span>Alan</span>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com">HasThemes</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="ti-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.webp" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">1. New and sale badge product</h4>
              <div class="prices">
                <del class="price-old">$167.540</del>
                <span class="price">$141.76</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity2" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="logo-area">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
          </div>
          <div class="close-action">
            <button class="btn-close"><i class="fa fa-close"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jquery Appear Js ===-->
<script src="assets/js/jquery.appear.js"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jquery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jquery Slicknav Js ===-->
<script src="assets/js/jquery.slicknav.js"></script>
<!--=== jquery Countdown Js ===-->
<script src="assets/js/jquery.countdown.min.js"></script>
<!--=== jquery Wow Min Js ===-->
<script src="assets/js/wow.min.js"></script>
<!--=== jQuery Zoom Min Js ===-->
<script src="assets/js/jquery-zoom.min.js"></script>

<!--=== Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>
