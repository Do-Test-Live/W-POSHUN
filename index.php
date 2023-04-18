<?php
require_once("admin/include/dbController.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Home - PO SHUN Corporation Ltd.</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/slick.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main-color04.css" rel="stylesheet">
</head>
<body class="biolife-body">

<!-- Preloader -->
<div id="biof-loading">
    <div class="biof-loading-center">
        <div class="biof-loading-center-absolute">
            <div class="dot dot-one"></div>
            <div class="dot dot-two"></div>
            <div class="dot dot-three"></div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="header-area style-01 layout-04" id="header">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li><a href="#"><i aria-hidden="true" class="fa fa-envelope"></i>Organic@company.com</a></li>
                    <li><a href="#">Since 1983</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                </ul>
                <ul class="horizontal-menu">
                    <li class="horz-menu-item lang">
                        <select name="language">
                            <option value="hk">Hong Kong (HKD)</option>
                            <option selected value="en">English (USD)</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a class="biolife-logo" href="Home"><img alt="biolife logo" height="36"
                                                             src="assets/images/organic-4.png" width="135"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" data-menuname="main menu"
                            id="primary-menu">
                            <li class="menu-item"><a href="Home">Home</a></li>
                            <li class="menu-item"><a href="Shop">Products</a></li>
                            <li class="menu-item"><a href="About">About us</a></li>
                            <li class="menu-item"><a href="Contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Page Contain -->
<div class="page-contain">

    <!-- Main content -->
    <div class="main-content" id="main-content">

        <!--Block 01: Vertical Menu And Main Slide-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                    <div class="biolife-vertical-menu none-box-shadow  ">
                        <div class="vertical-menu vertical-category-block always ">
                            <div class="block-title">
                                    <span class="menu-icon">
                                        <span class="line-1"></span>
                                        <span class="line-2"></span>
                                        <span class="line-3"></span>
                                    </span>
                                <span class="menu-title">Product Categories</span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    <?php
                                    $query = "SELECT * FROM category order by id desc";

                                    $category_data = $db_handle->runQuery($query);
                                    $row_count = $db_handle->numRows($query);

                                    for ($i = 0; $i < $row_count; $i++) {
                                        ?>
                                        <li class="menu-item">
                                            <a class="menu-name" data-title="Fruit & Nut Gifts"
                                               href="Shop?category_id=<?php echo $category_data[$i]["id"]; ?>">
                                                <img src="<?php echo $category_data[$i]["icon"]; ?>" class="img-fluid"
                                                     style="width: 30px;margin-right: 0.25em;border: 1px solid black;padding: 3px"
                                                     alt=""/>
                                                <?php echo $category_data[$i]["c_name"]; ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="main-slide block-slider nav-change type02">
                        <ul class="biolife-carousel"
                            data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                            <li>
                                <div class="slide-contain slider-opt04__layout01">
                                    <div class="media"></div>
                                    <div class="text-content">
                                        <i class="first-line">We Offer more choices of</i>
                                        <h3 class="second-line">High Quality</h3>
                                        <p class="third-line">Products to our Customers</p>
                                        <p class="buttons">
                                            <a class="btn btn-thin" href="Shop">View Products</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide-contain slider-opt04__layout01">
                                    <div class="media"></div>
                                    <div class="text-content">
                                        <i class="first-line">We Offer more choices of</i>
                                        <h3 class="second-line">High Quality</h3>
                                        <p class="third-line">Products to our Customers</p>
                                        <p class="buttons">
                                            <a class="btn btn-thin" href="Shop">View Products</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide-contain slider-opt04__layout01">
                                    <div class="media"></div>
                                    <div class="text-content">
                                        <i class="first-line">We Offer more choices of</i>
                                        <h3 class="second-line">High Quality</h3>
                                        <p class="third-line">Products to our Customers</p>
                                        <p class="buttons">
                                            <a class="btn btn-thin" href="Shop">View Products</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Block 02: Banners-->
        <div class="banner-block sm-margin-bottom-76px xs-margin-top-80px sm-margin-top-60px">
            <div class="container">
                <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                    <li>
                        <div class="biolife-banner style-02 biolife-banner__style-02">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="208"
                                                                     src="assets/images/home-04/bn_style02-child.png"
                                                                     width="231"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-banner style-03 biolife-banner__style-03">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="205"
                                                                     src="assets/images/home-04/bn_style03-child.png"
                                                                     width="218"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-banner style-04 biolife-banner__style-04">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="206"
                                                                     src="assets/images/home-04/bn_style04-child.png"
                                                                     width="135"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-banner style-02 biolife-banner__style-02">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="208"
                                                                     src="assets/images/home-04/bn_style02-child.png"
                                                                     width="231"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-banner style-03 biolife-banner__style-03">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="205"
                                                                     src="assets/images/home-04/bn_style03-child.png"
                                                                     width="218"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-banner style-04 biolife-banner__style-04">
                            <div class="banner-contain">
                                <div class="media">
                                    <a class="bn-link" href="#"><img alt=""
                                                                     height="206"
                                                                     src="assets/images/home-04/bn_style04-child.png"
                                                                     width="135"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="welcome-us-block">
            <div class="container">
                <h4 class="title">About Us</h4>
                <div class="text-wraper">
                    <p class="text-info">Po Shun Corporation has been established in Hong Kong since 1980, with 30
                        years'
                        experience and expertise</p>
                    <p class="qt-text">
                        In audio manufacturing, today our company not only specialized in audio items, but is also
                        eagerly developing ranges of high quality and innovative consumer electronic products.
                    </p>
                    <p class="qt-text">
                        Our company designs and produces high quality consumer electronics items in competitive prices.
                        Include audio products such as Radios, and Radio Cassette Recorders, CD Players, Watches &
                        Clocks, Lighting Products such as Torches and Emergency Lanterns as well...More
                    </p>
                </div>
            </div>
        </div>

        <!--Block 03: Categories-->
        <div class="background-fafafa wrap-category xs-margin-top-80px sm-margin-top-50px">
            <div class="container xs-padding-top-50px xs-padding-bottom-50px">
                <div class="biolife-title-box style-02 xs-margin-bottom-33px">
                    <span class="subtitle">Best Categories 2023</span>
                    <h3 class="main-title">Featured Categories</h3>
                    <p class="desc">30 years experience and expertise</p>
                </div>

                <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                    data-slick='{"arrows":true,"dots":false,"infinite":true,"autoplay":true,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>

                    <?php
                    $query = "SELECT * FROM category order by id asc";

                    $category_data = $db_handle->runQuery($query);
                    $row_count = $db_handle->numRows($query);

                    for ($i = 0; $i < $row_count; $i++) {
                        ?>

                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a class="cat-link" href="Shop?category_id=<?php echo $category_data[$i]["id"]; ?>">
                                        <img alt="" height="185" src="<?php echo $category_data[$i]["image"]; ?>"
                                             width="277">
                                    </a>
                                </div>
                                <a class="cat-info" href="Shop?category_id=<?php echo $category_data[$i]["id"]; ?>">
                                    <h4 class="cat-name"><?php echo $category_data[$i]["c_name"]; ?></h4>
                                    <span class="cat-number">
                                    (
                                    <?php
                                    $query = "SELECT * FROM product where category_id = {$category_data[$i]["id"]} order by product.id desc";
                                    $row = $db_handle->numRows($query);
                                    if ($row > 1)
                                        echo $row . ' items';
                                    else
                                        echo $row . ' item';
                                    ?>
                                    )
                                </span>
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!--Block 04: Product Tabs-->
        <div class="product-tab z-index-20 sm-margin-top-80px xs-margin-top-20px">
            <div class="container">
                <div class="biolife-title-box slim-item">
                    <span class="subtitle">All the best item for You</span>
                    <h3 class="main-title">Our Products</h3>
                </div>
                <div class="biolife-tab biolife-tab-contain sm-margin-top-23px">
                    <div class="tab-content">
                        <div class="tab-contain active" id="tab01_1st">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                <?php
                                $query = "SELECT * FROM category,product where product.category_id = category.id ORDER BY RAND() limit 10";
                                $product = $db_handle->runQuery($query);
                                $row_count = $db_handle->numRows($query);

                                for ($i = 0; $i < $row_count; $i++) {
                                    ?>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a class="link-to-product"
                                                   href="Product?product_id=<?php echo $product[$i]["id"]; ?>">
                                                    <img alt="Vegetables" class="product-thumnail" height="270"
                                                         src="<?php echo $product[$i]["p_image"]; ?>" width="270">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories"><?php echo $product[$i]["c_name"]; ?></b>
                                                <h4 class="product-title"><a class="pr-name"
                                                                             href="Product?product_id=<?php echo $product[$i]["id"]; ?>"><?php echo $product[$i]["p_name"]; ?></a>
                                                </h4>
                                                <div class="price">
                                                    <a class="btn add-to-cart-btn"
                                                       style="background: #e73918;color: white;"
                                                       href="Product?product_id=<?php echo $product[$i]["id"]; ?>">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Block 05: Banner Promotion-->
        <div class="banner-promotion-04 xs-margin-top-50px sm-margin-top-49px">
            <div class="biolife-banner promotion4 biolife-banner__promotion4">
                <div class="container">
                    <div class="banner-contain">
                        <div class="media">
                            <div class="img-moving position-1">
                                <a class="banner-link" href="#"><img
                                            alt="img msv" height="507"
                                            src="assets/images/home-04/bn_promotion-child01.png"
                                            width="711"></a>
                            </div>
                            <div class="img-moving position-2">
                                <img alt="img msv" height="145" src="assets/images/home-04/bn_promotion-child02.png"
                                     width="155">
                            </div>
                        </div>
                        <div class="text-content">
                            <b class="first-line">Special discount<br>for all lights items</b>
                            <p class="buttons">
                                <a class="btn btn-bold green-btn" href="#">See Offer Now!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Block 06: Advance-Box-->
        <div class="container z-index-20 xs-margin-top-80px sm-margin-top-0">
            <div class="row">

                <div class="col-lg-4 sm-margin-top-80px ">
                    <div class="row">
                        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                            <div class="biolife-banner style-05 biolife-banner__style-05">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a class="bn-link" href="#"><img alt=""
                                                                         height="230"
                                                                         src="assets/images/home-04/bn_style05.png"
                                                                         width="197"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12 xs-margin-top-30px sm-margin-top-0 lg-margin-top-30px">
                            <div class="biolife-banner style-06 biolife-banner__style-06">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a class="bn-link" href="#"><img alt=""
                                                                         height="230"
                                                                         src="assets/images/home-04/bn_style06.png"
                                                                         width="214"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12 xs-margin-top-30px sm-margin-top-0 lg-margin-top-30px">
                            <div class="biolife-banner style-07 biolife-banner__style-07">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a class="bn-link" href="#"><img alt=""
                                                                         height="230"
                                                                         src="assets/images/home-04/bn_style07.png"
                                                                         width="204"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 sm-margin-top-84px">
                    <div class="advance-product-box">
                        <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny lg-margin-bottom-26px-im">
                            <h3 class="title">Featured Products</h3>
                        </div>
                        <ul class="products-list biolife-carousel nav-top-right nav-main-color nav-none-on-mobile eq-height-contain"
                            data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin": 20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin": 15}}]}'>
                            <?php
                            $query = "SELECT * FROM category,product where product.category_id = category.id ORDER BY RAND() limit 10";
                            $product = $db_handle->runQuery($query);
                            $row_count = $db_handle->numRows($query);

                            for ($i = 0; $i < $row_count; $i++) {
                                ?>
                                <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a class="link-to-product"
                                               href="Product?product_id=<?php echo $product[$i]["id"]; ?>">
                                                <img alt="Vegetables" class="product-thumnail" height="270"
                                                     src="<?php echo $product[$i]["p_image"]; ?>" width="270">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories"><?php echo $product[$i]["c_name"]; ?></b>
                                            <h4 class="product-title">
                                                <a class="pr-name"
                                                   href="Product?product_id=<?php echo $product[$i]["id"]; ?>">
                                                    <?php echo $product[$i]["p_name"]; ?>
                                                </a>
                                            </h4>
                                            <div class="price">
                                                <a class="btn add-to-cart-btn" style="background: #e73918;color: white;"
                                                   href="Product?product_id=<?php echo $product[$i]["id"]; ?>">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- FOOTER -->
<footer class="footer layout-03" id="footer">
    <div class="footer-content background-footer-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-9">
                    <section class="footer-item">
                        <a class="logo footer-logo" href="index.html"><img alt="biolife logo"
                                                                           height="36"
                                                                           src="assets/images/organic-4.png"
                                                                           width="135"></a>
                        <div class="footer-phone-info">
                            <i class="biolife-icon icon-head-phone"></i>
                            <p class="r-info">
                                <span>Got Questions ?</span>
                                <span>(000)  0000-0000  (000) 000 -00</span>
                            </p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Useful Links</h3>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu-2">
                                    <ul class="menu">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Contact US</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Transport Offices</h3>
                        <div class="contact-info-block footer-layout xs-padding-top-10px">
                            <ul class="contact-lines">
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-location"></i>
                                        <b class="desc">address, address, address </b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-phone"></i>
                                        <b class="desc">Phone: (+000) 000 000 (+000) 000 000</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-letter"></i>
                                        <b class="desc">Email: contact@company.com</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-clock"></i>
                                        <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="biolife-social inline">
                            <ul class="socials">
                                <li><a class="socail-btn" href="#" title="twitter"><i aria-hidden="true"
                                                                                      class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="socail-btn" href="#" title="facebook"><i aria-hidden="true"
                                                                                       class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="socail-btn" href="#" title="pinterest"><i aria-hidden="true"
                                                                                        class="fa fa-pinterest"></i></a>
                                </li>
                                <li><a class="socail-btn" href="#" title="youtube"><i aria-hidden="true"
                                                                                      class="fa fa-youtube"></i></a>
                                </li>
                                <li><a class="socail-btn" href="#" title="instagram"><i aria-hidden="true"
                                                                                        class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="separator sm-margin-top-62px xs-margin-top-40px"></div>
                </div>
                <div class="col-lg-12 col-xs-12 xs-padding-bottom-30px">
                    <div class="copy-right-text text-center"><p>Copyright © 2023 <b>PO SHUN Corporation Ltd.</b> All
                            rights reserved.</p></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top Button -->
<a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/biolife.framework.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
