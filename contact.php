<?php
require_once("admin/include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
if(isset($_POST['sendMessage'])){
    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $message = $db_handle->checkValue($_POST['message']);


    $inserted_at = date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `inserted_at`) VALUES
                                                                                 ('$name','$email','$phone','$message','$inserted_at')");

    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Contact';
                </script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - PO SHUN Corporation Ltd.</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-color04.css">
    <link href="admin/vendor/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .toast-success {
            background-color: #5fb46e;
        }

        .toast-error {
            background-color: #b50000;
        }
    </style>
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
                        <li><a href="#">Fax: (852) 23081691</a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <li class="horz-menu-item lang">
                            <select name="language">
                                <option selected value="en">Address: Rm 1103, 11/F., Hang Cheong Centre,138 Bedford Rd., Tai Kok Tsui, Kln.</option>
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
                                                                 src="assets/images/organic-4.png" width="135" style="margin-left: -7px;"></a>
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
        <h1 class="page-title">Contact</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav nav-86px">
            <ul>
                <li class="nav-item"><a href="Home" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Contact</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain contact-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="wrap-map biolife-wrap-map" id="map-block">
                <iframe
                        width="1920"
                        height="591"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3690.750177797645!2d114.16243300000001!3d22.325286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400b6d14fbee3%3A0x60b01a25cc040f1e!2sHang%20Cheong%20Centre%2C%20138%20Bedford%20Rd%2C%20Tai%20Kok%20Tsui%2C%20Hong%20Kong!5e0!3m2!1sen!2sbd!4v1681920142399!5m2!1sen!2sbd"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0">
                </iframe>
            </div>

            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Our Contact</h4>
                            <p class="frst-desc">
                                Po Shun Corporation has been established in Hong Kong since 1980, with 30 years'
                                experience and expertise in audio manufacturing, today our company not only
                                specialized in audio items, but is also eagerly developing ranges of high quality
                                and innovative consumer electronic products.
                            </p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Addess:</b>
                                        <p class="dsc">Rm 1103, 11/F., Hang Cheong Centre,138 Bedford Rd., Tai Kok Tsui, Kln.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Phone:</b>
                                        <p class="dsc">(852) 23081162</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Fax:</b>
                                        <p class="dsc">(852) 23081691</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Whatsapp:</b>
                                        <p class="dsc">(852) 67696741</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">poshun@netvigator.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form action="" method="post" name="frm-contact">
                                <p class="form-row">
                                    <input type="text" name="name" value="" placeholder="Your Name" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" value="" placeholder="Email Address" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="tel" name="phone" value="" placeholder="Phone Number" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <textarea name="message" id="mes-1" cols="30" rows="9" placeholder="Leave Message" required></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" name="sendMessage" type="submit">send message</button>
                                </p>
                            </form>
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
                                            <b class="desc">Address: Rm 1103, 11/F., Hang Cheong Centre,138 Bedford Rd., Tai Kok Tsui, Kln.</b>
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
                                            <i class="fa fa-fax" style="font-size: 22px;padding-right: 13px;"></i>
                                            <b class="desc">Fax: (852) 23081691</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="fa fa-whatsapp" style="font-size: 22px;padding-right: 13px;"></i>
                                            <b class="desc">Whatsapp: (852) 67696741</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">E-mail: poshun@netvigator.com</b>
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
    <script src="admin/vendor/toastr/js/toastr.min.js" type="text/javascript"></script>
    <script src="admin/js/plugins-init/toastr-init.js" type="text/javascript"></script>
</body>
</html>
