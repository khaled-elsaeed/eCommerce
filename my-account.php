<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must be logged in to access your account";
    header('Location: login-register.php');
    exit();
}

// Determine which panel to show based on URL parameter
$activePanel = isset($_GET['panel']) ? (int)$_GET['panel'] : 1;

// Load components
require_once 'components/layout/Header.php';
require_once 'components/common/Breadcrumb.php';
require_once 'components/common/AccountPanel.php';
require_once 'components/common/Notification.php';
require_once 'components/layout/Footer.php';

// Page title
$pageTitle = "My Account";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account - Sabujcha - Matcha eCommerce</title>
    <meta name="description" content="Manage your account settings and information">
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
    <!-- Header Component -->
    <?php include 'components/layout/Header.php'; ?>
    
    <!-- Breadcrumb Component -->
    <?php 
    renderBreadcrumb("My Account", [
        ['text' => 'My Account']
    ]); 
    ?>
    
    <!-- Notification Component -->
    <?php renderNotification(); ?>
    
    <!-- My Account Content Start -->
    <div class="checkout-area pb-80 pt-100">
        <div class="container">
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <!-- Account Panel Component -->
                    <?php renderAccountPanel($activePanel); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Content End -->
    
    <!-- Footer Component -->
    <?php include 'components/layout/Footer.php'; ?>
    
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