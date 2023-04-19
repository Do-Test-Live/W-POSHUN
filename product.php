<?php
require_once("admin/include/dbController.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product - PO SHUN Corporation Ltd.</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-color.css">
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
                    <li><a href="#"><i aria-hidden="true" class="fa fa-envelope"></i>poshun@netvigator.com</a></li>
                    <li><a href="#">Since 1983</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#">Whatsapp: 852-67696741</a></li>
                </ul>
                <ul class="horizontal-menu">
                    <li class="horz-menu-item lang">
                        <select name="language">
                            <option selected value="en">Address: 名片上英文地址</option>
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
                    <a class="biolife-logo" href="Home"><img alt="PO SHUN logo" height="36"
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
<div class="hero-section hero-background">
    <h1 class="page-title">Product</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="Home" class="permal-link">Home</a></li>
            <li class="nav-item"><a href="#" class="permal-link">Shop</a></li>
            <li class="nav-item"><span class="current-page">Product</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain single-product">
    <div class="container">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <?php
            $product='';
            if(isset($_GET['product_id'])) {
                $query = "SELECT * FROM category,product where product.category_id = category.id and product.id={$_GET['product_id']}";
                $product = $db_handle->runQuery($query);
            }else{
                echo "<script>
                window.location.href='Shop';
                </script>";
            }
            ?>
            <!-- summary info -->
            <div class="sumary-product single-layout">
                <div class="media">
                    <ul class="biolife-carousel slider-for"
                        data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                        <li><img src="<?php echo $product[0]["p_image"]; ?>" alt="" width="650" height="650"></li>
                    </ul>
                </div>
                <div class="product-attribute">
                    <h3 class="title"><?php echo $product[0]["p_name"]; ?></h3>
                    <div class="rating">
                        <b class="category">By: <?php echo $product[0]["c_name"]; ?></b>
                    </div>
                    <span class="sku">Product Code: <?php echo $product[0]["product_code"]; ?></span>
                    <div class="excerpt">
                        <?php echo $product[0]["description"]; ?>
                    </div>
                </div>
            </div>

            <!-- related products -->
            <div class="product-related-box single-layout" style="padding-top: 2em">
                <div class="biolife-title-box lg-margin-bottom-26px-im">
                    <span class="subtitle">All the best item for You</span>
                    <h3 class="main-title">Related Products</h3>
                </div>
                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
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
                                             src="<?php echo str_replace("650", "250", strtok($product [$i]['p_image'],',')); ?>" width="270">
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

<!-- FOOTER -->
<footer class="footer layout-03" id="footer">
    <div class="footer-content background-footer-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-9">
                    <section class="footer-item">
                        <a class="logo footer-logo" href="Home"><img alt="PO SHUN logo"
                                                                     height="36"
                                                                     src="assets/images/organic-4.png"
                                                                     width="135"></a>
                        <div class="footer-phone-info">
                            <i class="biolife-icon icon-head-phone"></i>
                            <p class="r-info">
                                <span>Got Questions ?</span>
                                <span>852-23081162</span>
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
                                        <li><a href="Home">Home</a></li>
                                        <li><a href="Shop">Products</a></li>
                                        <li><a href="About">About US</a></li>
                                        <li><a href="Contact">Contact US</a></li>
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
                                        <b class="desc">Address: 名片上英文地址</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-phone"></i>
                                        <b class="desc">Phone: 852-23081162</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="fa fa-whatsapp" style="font-size: 22px;padding-right: 13px;"></i>
                                        <b class="desc">Whatsapp: 852-6769674</b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-letter"></i>
                                        <b class="desc">E-mail: poshun@netvigator.com</b>
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
