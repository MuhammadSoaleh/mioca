<?php
if (isset($_REQUEST['sub'])){
    include('nconn.php');
    $firstname=$_POST['name'];
    $lastname=$_POST['email'];
    $age=$_POST['subject'];
    $date=$_POST['message'];
    $imgname=$_FILES['img']['name'];
    $tmpname=$_FILES['img']['tmp_name'];
    $sql="INSERT INTO `conatct`(`Name`, `email`, `subject`, `your_message`, `img`) VALUES ('$firstname','$lastname','$age','$date','$imgname')";
    move_uploaded_file($tmpname,'upload/'.$imgname);
  $result=mysqli_query($conn,$sql);
    if ($result){
        echo "<script> alert('inserted') </script>";
    }
    else{
        echo "<script> alert('error') </script>";
    }
}

?>

























<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/mioca/mioca/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 06:41:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Mioca - Handmade Goods eCommerce HTML Template</title>
    <meta name="description" content="Mioca - Handmade Goods eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/png">


    <!-- vendor css (Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>


    <!-- Header Area Start -->
    <header>
        <div class="header-main bg-white sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown position-static"><a href="about.html">Pages <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Inner Pages</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Related Shop Pages</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                <li><a href="thank-you-page.html">Thank You Page</a></li>
                                            </ul>
                                            <ul class="d-flex align-items-center p-0 border-0">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="assets/images/banner/menu-banner-1.jpg" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="#">Shop <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">

                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                </li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="single-product-group.html">Product Group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="single-product-gallery-right.html">Product Gallery
                                                        Right</a> </li>
                                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                </li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                            </ul>
                                            <ul class="d-flex align-items-center p-0 border-0">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="assets/images/banner/menu-banner-2.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                        <li><a href="blog-single.html">Blog Single Page</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="pe-7s-users"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Hand-Made Garlic Mortar</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Handmade Ceramic Pottery</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Hand Painted Bowls</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Hand-Made Garlic Mortar</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Handmade Ceramic Pottery</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Hand Painted Bowls</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Inner Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    <li><a href="thank-you-page.html">Thank You Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-gallery-right.html">Product Gallery
                                            Right</a> </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                    </li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                    </li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Contact Us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Contact Area Start -->
    <div class="contact-area pt-100px pb-100px">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <span class="sub-title">Get In Touch</span>
                            <h4 class="heading">Visit One Of Our Shop
                                Contact Us Now</h4>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Phone:</h5>
                                    <p><a href="tel:0123456789">012 345 67 89</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email:</h5>
                                    <p><a href="mailto:demo@example.com">demo@example.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-map-marker"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Address:</h5>
                                    <p>Your address goes here</p>
                                </div>
                            </div>
                            <ul class="social">
                                <li class="m-0">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form" >
                            <div class="contact-title mb-30">
                                <h2 class="title" data-aos="fade-up" data-aos-delay="200">Leave a Message</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <form class="contact-form-style"  
                                method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="name" placeholder="name"   type="text" />
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="email" placeholder="email"  type="email" />
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                        <input name="subject" placeholder="subject" type="text" />
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                        <input name="img" placeholder="files" type="file" />
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                        <textarea name="message" placeholder="type your message**" ></textarea>
                                        <button class="btn btn-primary mt-4" data-aos="fade-up" data-aos-delay="200"
                                            type="submit" name="sub">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- map Area Start -->

    <div class="contact-map">
        <div id="mapid">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- map Area End -->

    <div class="newsletter-area ">
        <div class="container line-shape-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content mb-lm-30px">
                        <i class="pe-7s-mail-open-file"></i>
                        <div class="newsletter-text">
                            <h3 class="title">Newsletter & Get Updates</h3>
                            <p>Sign up for our newsletter to get update from us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="news-letter-form">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                name="mc-embedded-subscribe-form" method="post"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                >
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required=""
                                        placeholder="Enter Your Mail Here......." name="EMAIL" value="">
                                    <div class="mc-news d-none" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <button id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                            value=""> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html">About us</a></li>
                                            <li class="li"><a class="single-link" href="#">Delivery information</a></li>
                                            <li class="li"><a class="single-link" href="privacy-policy.html">Privacy
                                                    Policy</a></li>
                                            <li class="li"><a class="single-link" href="#">Sales</a></li>
                                            <li class="li"><a class="single-link" href="#">Terms & Conditions</a></li>
                                            <li class="li"><a class="single-link" href="#">Shipping Policy</a></li>
                                            <li class="li"><a class="single-link" href="#">EMI Payment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Account</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="my-account.html"> My account</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="cart.html">My orders</a></li>
                                            <li class="li"><a class="single-link" href="#">Returns</a></li>
                                            <li class="li"><a class="single-link"
                                                    href="shop-left-sidebar.html">Shipping</a></li>
                                            <li class="li"><a class="single-link" href="wishlist.html">Wishlist</a></li>
                                            <li class="li"><a class="single-link" href="#">How Does It Work</a></li>
                                            <li class="li"><a class="single-link" href="#">Merchant Sign Up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-2 col-sm-6 mb-sm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Store </h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="index.html">Affiliate</a></li>
                                            <li class="li"><a class="single-link"
                                                    href="shop-left-sidebar.html">Bestsellers</a></li>
                                            <li class="li"><a class="single-link" href="#">Discount</a></li>
                                            <li class="li"><a class="single-link" href="#">Latest products</a></li>
                                            <li class="li"><a class="single-link" href="#">Sale</a></li>
                                            <li class="li"><a class="single-link" href="#">All Collection</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-4 col-sm-6 pl-120px line-shape">
                            <div class="single-wedge ">

                                <h4 class="footer-herading">Contact Us</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="mail">If you have any question.please <br>
                                        contact us at <a href="mailto:demo@example.com">demo@example.com</a> </p>
                                    <p class="address"><i class="pe-7s-map-marker"></i> <span>Your address goes here.
                                            <br>
                                            123, Address.</span> </p>
                                    <p class="phone m-0"><i class="pe-7s-phone"></i><span><a href="tel:0123456789">+ 0
                                                123
                                                456 789</a> <br> <a href="tel:0123456789">+ 0 123 456 789</a></span></p>

                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="line-shape-top">
                        <div class="row flex-md-row-reverse align-items-center">
                            <div class="col-md-6 text-center text-md-end">
                                <div class="payment-mth"><a href="#"><img class="img img-fluid"
                                            src="assets/images/icons/payment.png" alt="payment-image"></a></div>
                            </div>
                            <div class="col-md-6 text-center text-md-start">
                                <p class="copy-text"> © 2021 <strong>Mioca.</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name"
                                        href="https://hasthemes.com/">
                                        <strong> HasThemes</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from template.hasthemes.com/mioca/mioca/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 06:41:17 GMT -->
</html>


