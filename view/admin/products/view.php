<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./view/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./view/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./view/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./view/admin/assets/images/favicon.ico"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require './view/admin/navbar.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php require './view/admin/side_bar.php' ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!--  Header -->
                <?php require './view/admin/header.php' ?>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Information Products</h4>
                            </p>
                            <table class="table" width="100%">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <td><img src="<?php echo $result->get_photo() ?>" style="border-radius: initial; width: 100px; height: 100px;"></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $result->get_name() ?></td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td><?php echo number_format($result->get_Price(), 0,'',',') ?>đ</td>
                                </tr>
                                    <th>Description</th>
                                    <td style="white-space: break-spaces;word-break: break-word;"><?php echo $result->get_description() ?></td>
                                </tr>
                                </tr>
                                    <th>Manufacturer</th>
                                    <td>
                                        <?php
                                        $sql2 = "select * from manufacturers where id='{$result->get_manufacturer_id()}'";
                                        $result2 = (new Connect())->select($sql2);
                                        $object = mysqli_fetch_array($result2);
                                        echo $object['name'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?controller=admin&action=edit_product&id=<?php echo $result->get_id() ?>" style="padding: 15px; text-decoration: none;"><i class="fa-regular fa-note-sticky"></i> Update</a>
                                        <a href="?controller=admin&action=delete_product&id=<?php echo $result->get_id() ?>" style="padding: 15px; text-decoration: none;"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php require './view/admin/footer.php' ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="./view/admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="./view/admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="./view/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="./view/admin/assets/js/off-canvas.js"></script>
<script src="./view/admin/assets/js/hoverable-collapse.js"></script>
<script src="./view/admin/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="./view/admin/assets/js/dashboard.js"></script>
<script src="./view/admin/assets/js/todolist.js"></script>
<!-- End custom js for this page -->
</body>
</html>