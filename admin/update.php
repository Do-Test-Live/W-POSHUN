<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();

date_default_timezone_set("Asia/Hong_Kong");

if (!isset($_SESSION["userid"])) {
    echo "<script>
                window.location.href='Login';
                </script>";
}

if (isset($_POST['updateCategory'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['c_name']);
    $status = $db_handle->checkValue($_POST['status']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `category` WHERE id='{$id}'");
            unlink("../".$data[0]['image']);
            move_uploaded_file($file_tmp, "../assets/images/category/image/" . $file_name);
            $image = "assets/images/category/image/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $image = '';
    if (!empty($_FILES['icon']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['icon']['name'];
        $file_size = $_FILES['icon']['size'];
        $file_tmp = $_FILES['icon']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `category` WHERE id='{$id}'");
            unlink("../".$data[0]['icon']);
            move_uploaded_file($file_tmp, "../assets/images/category/icon/" . $file_name);
            $image = "assets/images/category/icon/" . $file_name;
            $query .= ",`icon`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update category set c_name='$name', status='$status'" . $query . " where id={$id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Category';
                </script>";
}


if (isset($_POST['updateProduct'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $p_name = $db_handle->checkValue($_POST['p_name']);
    $product_code = $db_handle->checkValue($_POST['p_code']);
    $product_description = $db_handle->checkValue($_POST['description']);
    $product_category = $db_handle->checkValue($_POST['product_category']);
    $status = $db_handle->checkValue($_POST['status']);

    $image = '';
    $query = '';
    if (!empty($_FILES['p_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['p_image']['name'];
        $file_size = $_FILES['p_image']['size'];
        $file_tmp = $_FILES['p_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `product` WHERE id='{$id}'");
            unlink("../".$data[0]['p_image']);
            move_uploaded_file($file_tmp, "../assets/images/products/" . $file_name);
            $image = "assets/images/products/" . $file_name;
            $query .= ",`p_image`='" . $image . "'";
        }
    }

    $updated_at = date("Y-m-d H:i:s");

    $data = $db_handle->insertQuery("UPDATE `product` SET `category_id`='$product_category',`product_code`='$product_code',`p_name`='$p_name',`description`='$product_description',
                     `status`='$status',`updated_at`='$updated_at'" . "$query" . " WHERE id={$id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Product';
                </script>";
}
