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
    <title>Shop - PO SHUN Corporation Ltd.</title>
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
    <link href="assets/css/main-color.css" rel="stylesheet">
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

<!--Hero Section-->
<div class="hero-section hero-background mb-54px">
    <h1 class="page-title">PO SHUN SHOP</h1>
</div>

<div class="page-contain category-page left-sidebar">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="main-content col-lg-8 col-sm-12 col-xs-12" id="main-content" style="padding-bottom: 5em">
                <div class="product-category list-style">

                    <div class="row">
                        <ul class="products-list">
                            <?php
                            $extend='';
                            if(isset($_GET['category_id'])){
                                $extend=' and product.category_id='.$_GET['category_id'];
                            }

                            $query = "SELECT * FROM category,product where product.category_id = category.id".$extend." ORDER BY RAND() limit 7";
                            $product = $db_handle->runQuery($query);
                            $row_count = $db_handle->numRows($query);

                            for ($i = 0; $i < $row_count; $i++) {
                            ?>
                            <li class="product-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contain-product pr-detail-layout">
                                    <div class="product-thumb">
                                        <a class="link-to-product" href="#">
                                            <img alt="dd" class="product-thumnail" height="270" src="<?php echo $product[$i]["p_image"]; ?>"
                                                 width="270">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $product[$i]["c_name"]; ?></b>
                                        <h4 class="product-title">
                                            <a class="pr-name" href="Product?product_id=<?php echo $product[$i]["id"]; ?>">
                                                Product Name: <?php echo $product[$i]["p_name"]; ?>
                                            </a>
                                        </h4>
                                        <h6>Product Code: <?php echo $product[$i]["product_code"]; ?></h6>
                                        <div class="excerpt">
                                            <?php echo $product[$i]["description"]; ?>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn add-to-cart-btn" href="Product?product_id=<?php echo $product[$i]["id"]; ?>">view Details</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="biolife-panigations-block">
                        <ul class="panigation-contain">
                            <li><span class="current-page">1</span></li>
                            <li><a class="link-page" href="#">2</a></li>
                            <li><a class="link-page" href="#">3</a></li>
                            <li><span class="sep">....</span></li>
                            <li><a class="link-page" href="#">20</a></li>
                            <li><a class="link-page next" href="#"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- Sidebar -->
            <div class="sidebar col-lg-4 col-sm-12 col-xs-12" id="sidebar">
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
                                $query = "SELECT * FROM category order by id asc";

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
