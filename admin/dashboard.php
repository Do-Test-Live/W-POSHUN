<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
if (!isset($_SESSION['userid'])) {
    header("Location: Login");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard | PO SHUN Admin</title>
    <?php include 'include/css.php'; ?>
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <?php include 'include/header.php'; ?>

    <?php include 'include/nav.php'; ?>

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card grd-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-2">
                                    <h2 class="text-white font-w600">
                                        <?php
                                        $row_count = $db_handle->numRows("SELECT * FROM category order by id asc");
                                        echo $row_count;
                                        ?>
                                    </h2>
                                    <span class="text-white">Category</span>
                                </div>
                                <div class="d-inline-block position-relative donut-chart-sale">
                                    <span class="donut1"
                                          data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}' style="color: white">6/8</span>
                                    <small class="text-primary">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M30 7.03697H21.4497V1.75781H27.7137V0H19.6918V7.03697H11.1417V12.3132H12.9572L13.1193 14.7549H8.50227C5.03494 14.7549 2.17072 17.3859 1.80038 20.7561C0.75531 21.1073 0 22.0953 0 23.2571C0 24.4244 0.762405 25.4164 1.81526 25.7632C2.1769 28.1582 4.24873 30 6.74286 30H27.0115L28.1845 12.3132H30V7.03697ZM8.50227 16.5127H16.2202C18.669 16.5127 20.7097 18.2881 21.1263 20.6188H3.59619C4.01276 18.2881 6.05324 16.5127 8.50227 16.5127ZM2.63809 22.3766H22.0841C22.5696 22.3766 22.9646 22.7717 22.9646 23.2569C22.9646 23.7424 22.5696 24.1372 22.0841 24.1372H2.63809C2.15263 24.1372 1.75781 23.7424 1.75781 23.2569C1.75781 22.7717 2.15263 22.3766 2.63809 22.3766ZM6.74286 28.2422C5.26886 28.2422 4.02351 27.2479 3.63968 25.8952H21.0825C20.6989 27.2479 19.4536 28.2422 17.9794 28.2422H6.74286ZM25.3665 28.2422H21.7738C22.3618 27.5517 22.7655 26.7002 22.907 25.7632C23.9598 25.4164 24.7224 24.4244 24.7224 23.2571C24.7224 22.0953 23.9671 21.1073 22.9221 20.7561C22.5517 17.3859 19.6877 14.7549 16.2202 14.7549H14.881L14.7189 12.3132H26.4228L25.3665 28.2422ZM28.2422 10.5553H12.8996V8.79478H28.2422V10.5553Z"
                                                      fill="#EA7A9A"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="30" height="30" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </small>
                                    <span class="circle bg-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card grd-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-2">
                                    <h2 class="text-white font-w600">
                                        <?php
                                        $row_count = $db_handle->numRows("SELECT * FROM product order by id asc");
                                        echo $row_count;
                                        ?>
                                    </h2>
                                    <span class="text-white">Product</span>
                                </div>
                                <div class="d-inline-block position-relative donut-chart-sale">
                                    <span class="donut1"
                                          data-peity='{ "fill": ["rgb(255, 255, 255)", "rgba(255, 255, 255, 0)"],   "innerRadius": 41, "radius": 10}' style="color: white">3/8</span>
                                    <small class="text-primary">
                                        <svg width="20" height="36" viewBox="0 0 20 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                                  fill="#EA7A9A"/>
                                        </svg>
                                    </small>
                                    <span class="circle bg-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <?php include 'include/footer.php'; ?>

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<?php include 'include/js.php'; ?>
</body>
</html>
