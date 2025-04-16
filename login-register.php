<!doctype html>
<html class="no-js" lang="zxx">
    
<?php
session_start();

$login_error = '';
$register_error = '';

if(isset($_SESSION['error'])) {
    $login_error = $_SESSION['error'];
    unset($_SESSION['error']);
}

if(isset($_SESSION['reg_error'])) {
    $register_error = $_SESSION['reg_error'];
    unset($_SESSION['reg_error']);
}
?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area gray-bg clearfix">
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img alt="" src="assets/img/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-6">
                            <div class="header-bottom-right">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li class="top-hover"><a href="index.html">home</a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">home version 1</a></li>
                                                    <li><a href="index-2.html">home version 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">about</a></li>
                                            <li class="mega-menu-position top-hover"><a href="shop.html">shop</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title">Categories 01</li>
                                                            <li><a href="shop.html">Aconite</a></li>
                                                            <li><a href="shop.html">Ageratum</a></li>
                                                            <li><a href="shop.html">Allium</a></li>
                                                            <li><a href="shop.html">Anemone</a></li>
                                                            <li><a href="shop.html">Angelica</a></li>
                                                            <li><a href="shop.html">Angelonia</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title">Categories 02</li>
                                                            <li><a href="shop.html">Balsam</a></li>
                                                            <li><a href="shop.html">Baneberry</a></li>
                                                            <li><a href="shop.html">Bee Balm</a></li>
                                                            <li><a href="shop.html">Begonia</a></li>
                                                            <li><a href="shop.html">Bellflower</a></li>
                                                            <li><a href="shop.html">Bergenia</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title">Categories 03</li>
                                                            <li><a href="shop.html">Caladium</a></li>
                                                            <li><a href="shop.html">Calendula</a></li>
                                                            <li><a href="shop.html">Carnation</a></li>
                                                            <li><a href="shop.html">Catmint</a></li>
                                                            <li><a href="shop.html">Celosia</a></li>
                                                            <li><a href="shop.html">Chives</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title">Categories 04</li>
                                                            <li><a href="shop.html">Daffodil</a></li>
                                                            <li><a href="shop.html">Dahlia</a></li>
                                                            <li><a href="shop.html">Daisy</a></li>
                                                            <li><a href="shop.html">Diascia</a></li>
                                                            <li><a href="shop.html">Dusty Miller</a></li>
                                                            <li><a href="shop.html">Dame's Rocket</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="top-hover"><a href="blog-left-sidebar.html">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                                    <li><a href="#">Blog Standard <span><i class="ion-ios-arrow-right"></i></span></a>
                                                        <ul class="lavel-menu">
                                                            <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                                            <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Post Types <span><i class="ion-ios-arrow-right"></i></span> </a>
                                                        <ul class="lavel-menu">
                                                            <li><a href="blog-details-standerd.html">Standard post</a></li>
                                                            <li><a href="blog-details-audio.html">audio post</a></li>
                                                            <li><a href="blog-details-video.html">video post</a></li>
                                                            <li><a href="blog-details-gallery.html">gallery post</a></li>
                                                            <li><a href="blog-details-link.html">link post</a></li>
                                                            <li><a href="blog-details-quote.html">quote post</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="top-hover"><a href="#">pages</a>
                                                <ul class="submenu">
                                                    <li><a href="about-us.html">about us </a></li>
                                                    <li><a href="shop.html">shop Grid</a></li>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="cart-page.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="login-register.php">login / register</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
								<div class="header-currency">
									<span class="digit">USD <i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="#">$ USD</a></li>
											<li><a href="#">€ EUR</a></li>
											<li><a href="#">£ GBP</a></li>
											<li><a href="#">₹ INR</a></li>
											<li><a href="#">¥ JPY</a></li>
										</ul>
									</div>
								</div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="cart-icon">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </a>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote </a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote</a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart-page.html">view cart</a>
                                            <a href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="#">HOME</a>
                                        <ul>
                                            <li><a href="index.html">home version 1</a></li>
                                            <li><a href="index-2.html">home version 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about-us.html">about us </a></li>
                                            <li><a href="shop.html">shop Grid</a></li>
                                            <li><a href="shop-list.html">shop list</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart-page.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="login-register.php">login / register</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html"> Shop </a>
                                        <ul>
                                            <li><a href="#">Categories 01</a>
                                                <ul>
                                                    <li><a href="shop.html">Aconite</a></li>
                                                    <li><a href="shop.html">Ageratum</a></li>
                                                    <li><a href="shop.html">Allium</a></li>
                                                    <li><a href="shop.html">Anemone</a></li>
                                                    <li><a href="shop.html">Angelica</a></li>
                                                    <li><a href="shop.html">Angelonia</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 02</a>
                                                <ul>
                                                    <li><a href="shop.html">Balsam</a></li>
                                                    <li><a href="shop.html">Baneberry</a></li>
                                                    <li><a href="shop.html">Bee Balm</a></li>
                                                    <li><a href="shop.html">Begonia</a></li>
                                                    <li><a href="shop.html">Bellflower</a></li>
                                                    <li><a href="shop.html">Bergenia</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 03</a>
                                                <ul>
                                                    <li><a href="shop.html">Caladium</a></li>
                                                    <li><a href="shop.html">Calendula</a></li>
                                                    <li><a href="shop.html">Carnation</a></li>
                                                    <li><a href="shop.html">Catmint</a></li>
                                                    <li><a href="shop.html">Celosia</a></li>
                                                    <li><a href="shop.html">Chives</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 04</a>
                                                <ul>
                                                    <li><a href="shop.html">Daffodil</a></li>
                                                    <li><a href="shop.html">Dahlia</a></li>
                                                    <li><a href="shop.html">Daisy</a></li>
                                                    <li><a href="shop.html">Diascia</a></li>
                                                    <li><a href="shop.html">Dusty Miller</a></li>
                                                    <li><a href="shop.html">Dame's Rocket</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">BLOG</a>
                                        <ul>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="#">Blog Standard</a>
                                                <ul>
                                                    <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                                    <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Types</a>
                                                <ul>
                                                    <li><a href="blog-details-standerd.html">Standard post</a></li>
                                                    <li><a href="blog-details-audio.html">audio post</a></li>
                                                    <li><a href="blog-details-video.html">video post</a></li>
                                                    <li><a href="blog-details-gallery.html">gallery post</a></li>
                                                    <li><a href="blog-details-link.html">link post</a></li>
                                                    <li><a href="blog-details-quote.html">quote post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"> Contact us </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- header end -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>LOGIN</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Breadcrumb Area End -->
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <?php if(!empty($login_error)): ?>
                                            <div class="alert alert-danger" role="alert" style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red;">
                                                <?php echo $login_error; ?>
                                            </div>
                                            <?php endif; ?>
                                            <form action="backend/authentication.php" method="post">
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit" name="login-submit"><span>Login</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <?php if(!empty($register_error)): ?>
                                            <div class="alert alert-danger" role="alert" style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red;">
                                                <?php echo $register_error; ?>
                                            </div>
                                            <?php endif; ?>
                                            <form action="backend/authentication.php" method="post">
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <input name="user-email" placeholder="Email" type="email">
                                                <div class="button-box">
                                                    <button type="submit" name="register-submit"><span>Register</span></button>
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
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="assets/img/icon-img/payment.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->
        
        
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>
