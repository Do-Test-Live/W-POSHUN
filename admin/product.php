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
    <title>Product | PO SHUN Admin</title>
    <!-- Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"
            integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
            <!-- Product List -->
            <div class="row">
                <?php if (isset($_GET['productID'])) { ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="Update" enctype="multipart/form-data">

                                        <?php $data = $db_handle->runQuery("SELECT * FROM product where id={$_GET['productID']}"); ?>

                                        <input type="hidden" value="<?php echo $data[0]["id"]; ?>" name="id" required>
                                        <div class="form-group col-md-12">
                                            <label class="col-sm-3 col-form-label">Product Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="p_name"
                                                       placeholder="Category Name"
                                                       value="<?php echo $data[0]["p_name"]; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="col-sm-3 col-form-label">Product Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="p_code"
                                                       placeholder="Product Code"
                                                       value="<?php echo $data[0]["product_code"]; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Product Description *</label>
                                            <textarea class="form-control" rows="4" id="comment"
                                                      name="description"
                                                      required><?php echo $data[0]["description"]; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Select Product Category *</label>
                                            <select class="form-control default-select" id="sel1"
                                                    name="product_category" required>
                                                <?php
                                                $cat_id = $data[0]["category_id"];
                                                $cat_new = $db_handle->runQuery("SELECT * FROM `category` where id= $cat_id");
                                                $row = $db_handle->numRows("SELECT * FROM `category` where id= $cat_id");
                                                for ($j = 0; $j < $row; $j++) {
                                                    ?>
                                                    <option value="<?php echo $cat_new[$j]["id"]; ?>"><?php echo $cat_new[$j]["c_name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                $cat = $db_handle->runQuery("SELECT * FROM `category`");
                                                $row_count = $db_handle->numRows("SELECT * FROM `category`");
                                                for ($i = 0; $i < $row_count; $i++) {
                                                    ?>
                                                    <option value="<?php echo $cat[$i]["id"]; ?>"><?php echo $cat[$i]["c_name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Status *</label>
                                            <select class="default-select  form-control wide" name="status"
                                                    required>
                                                <option value="1" <?php echo ($data[0]["status"] == 1) ? "selected" : ""; ?>>
                                                    Active
                                                </option>
                                                <option value="0" <?php echo ($data[0]["status"] == 0) ? "selected" : ""; ?>>
                                                    Deactivate
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Product Image</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="p_image"/>
                                                            <label class="custom-file-label">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <img src="../<?php echo $data[0]["p_image"]; ?>" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="col-sm-6 mx-auto">
                                                <button type="submit" class="btn btn-primary w-25"
                                                        name="updateProduct">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Insert Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $query="SELECT * FROM category,product where product.category_id = category.id order by product.id desc";
                                        $product = $db_handle->runQuery($query);
                                        $row_count = $db_handle->numRows($query);

                                        for ($i = 0; $i < $row_count; $i++) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i + 1; ?></td>
                                                <td><?php echo $product[$i]["c_name"]; ?></td>
                                                <td><?php echo $product[$i]["p_name"]; ?></td>
                                                <td><?php echo $product[$i]["product_code"]; ?></td>
                                                <td><?php echo $product[$i]["description"]; ?></td>
                                                <td><a href="../<?php echo $product[$i]["p_image"]; ?>"
                                                       target="_blank">Image</a></td>
                                                <?php
                                                $date = date_create($product[$i]["inserted_at"]);
                                                $date_formatted = date_format($date, "d F y, g:i A");
                                                ?>
                                                <td><?php echo $date_formatted; ?></td>
                                                <?php
                                                if ($product[$i]["status"] == 1) {
                                                    ?>
                                                    <td>Active</td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td>Deactive</td>
                                                    <?php
                                                }
                                                ?>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="Product?productID=<?php echo $product[$i]["id"]; ?>"
                                                           class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                    class="fa fa-pencil"></i></a>
                                                        <a onclick="productDelete(<?php echo $product[$i]["id"]; ?>);"
                                                           class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
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
<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<script>
    function productDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'get',
                    url: 'Delete',
                    data: {
                        productId: id
                    },
                    success: function (data) {
                        if (data.toString() === 'P') {
                            Swal.fire(
                                'Not Deleted!',
                                'Your have store in this category.',
                                'error'
                            ).then((result) => {
                                window.location = 'Product';
                            });
                        } else {
                            Swal.fire(
                                'Deleted!',
                                'Your product has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location = 'Product';
                            });
                        }
                    }
                });
            } else {
                Swal.fire(
                    'Cancelled!',
                    'Your Product is safe :)',
                    'error'
                ).then((result) => {
                    window.location = 'Product';
                });
            }
        })
    }

    CKEDITOR.replace('description');
</script>
</body>
</html>
