<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (isset($_POST["add_cat"])) {
    $name = $db_handle->checkValue($_POST['cat_name']);
    $image = '';
    if (!empty($_FILES['cat_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['cat_image']['name'];
        $file_size = $_FILES['cat_image']['size'];
        $file_tmp  = $_FILES['cat_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $attach_files = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add-Category';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "assets/cat_img/" . $file_name);
            $image = "assets/cat_img/" . $file_name;
        }
    }

    $inserted_at = date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `category`(`c_name`, `image`,  `inserted_at`) VALUES ('$name','$image','$inserted_at')");

    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Add-Category';
                </script>";
}

if (isset($_POST["add_product"])) {
    $product_name = $db_handle->checkValue($_POST['product_name']);
    $product_name_en = $db_handle->checkValue($_POST['product_name_en']);
    $product_code = $db_handle->checkValue($_POST['product_code']);
    $product_weight = $db_handle->checkValue($_POST['product_weight']);
    $product_category = $db_handle->checkValue($_POST['product_category']);
    $selling_price = $db_handle->checkValue($_POST['selling_price']);
    $cost = $db_handle->checkValue($_POST['cost']);
    $product_status = $db_handle->checkValue($_POST['product_status']);
    $product_description = $db_handle->checkValue($_POST['product_description']);
    $product_description_en = $db_handle->checkValue($_POST['product_description_en']);
    $inserted_at = date("Y-m-d H:i:s");

    $products_image='';
    $arr = array();
    if (!empty($_FILES['product_image']['name'][0])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        foreach ($_FILES['product_image']['name'] as $key => $tmp_name) {

            $file_name = $RandomAccountNumber.$key."_" . $_FILES['product_image']['name'][$key];
            $file_size = $_FILES['product_image']['size'][$key];
            $file_tmp = $_FILES['product_image']['tmp_name'][$key];
            $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
                $products_image = '';
            } else {
                move_uploaded_file($file_tmp, "assets/products_image/" .$file_name);
                $arr[] = "assets/products_image/" . $file_name;
            }
        }
        $products_image = implode(',', $arr);
    } else {
        $products_image = '';
    }

    $insert = $db_handle->insertQuery("INSERT INTO `product` (`category_id`, `product_code`,`product_weight`, `p_name`,`p_name_en`,`product_price`, `description`,`description_en`, `p_image`,`status`, `inserted_at`,`cost`) VALUES 
                ('$product_category','$product_code','$product_weight','$product_name','$product_name_en','$selling_price','$product_description','$product_description_en','$products_image','$product_status','$inserted_at','$cost')");
    if($insert){
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Add-Product';
                </script>";
    }


}
