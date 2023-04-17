<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (isset($_POST["addCategory"])) {
    $name = $db_handle->checkValue($_POST['category_name']);

    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $attach_files = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add-Category';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "../assets/images/category/image/" . $file_name);
            $image = "assets/images/category/image/" . $file_name;
        }
    }

    $icon = '';
    if (!empty($_FILES['icon']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['icon']['name'];
        $file_size = $_FILES['icon']['size'];
        $file_tmp = $_FILES['icon']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $attach_files = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add-Category';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "../assets/images/category/icon/" . $file_name);
            $icon = "assets/images/category/icon/" . $file_name;
        }
    }

    $inserted_at = date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `category`(`c_name`, `image`, `icon`, `inserted_at`) VALUES ('$name','$image','$icon','$inserted_at')");

    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Add-Category';
                </script>";
}

if (isset($_POST["addProduct"])) {
    $product_name = $db_handle->checkValue($_POST['product_name']);
    $product_code = $db_handle->checkValue($_POST['product_code']);
    $category_id = $db_handle->checkValue($_POST['category_id']);
    $description = $db_handle->checkValue($_POST['description']);

    $inserted_at = date("Y-m-d H:i:s");


    $products_image = '';
    if (!empty($_FILES['product_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['product_image']['name'];
        $file_size = $_FILES['product_image']['size'];
        $file_tmp = $_FILES['product_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $attach_files = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add-Product';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "../assets/images/products/" . $file_name);
            $products_image = "assets/images/products/" . $file_name;
        }
    }

    $insert = $db_handle->insertQuery("INSERT INTO `product`(`category_id`, `product_code`, `p_name`, `description`, `p_image`,  `inserted_at`) VALUES 
                                                                                                                ('$category_id','$product_code','$product_name','$description','$products_image','$inserted_at')");
    if ($insert) {
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Add-Product';
                </script>";
    }
}
