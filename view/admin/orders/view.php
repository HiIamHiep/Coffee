<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Order Products</h4>
                            <p class="card-description">Mã đơn hàng<code><?php echo $id ?></code>
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Photo </th>
                                    <th> Price </th>
                                    <th> Quantity </th>
                                    <th> Total price </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0 ?>
                                <?php foreach ($result as $each) { ?>
                                <tr>
                                    <td> <?php echo $each['name'] ?> </td>
                                    <td> <img src="<?php echo $each['photo'] ?>" style="border-radius: initial; height: 100px; width: 100px;" > </td>
                                    <td> <?php echo number_format($each['price'], 0, '', ',') ?>đ </td>
                                    <td> <?php echo $each['quantity'] ?> </td>
                                    <td> <?php
                                        $sum = $each['quantity'] * $each['price'];
                                        $total += $sum;
                                        echo number_format($sum,0, '', ',');
                                        ?>
                                        đ
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <h1 style="float: right">Tổng tiền hóa đơn: <?php echo number_format($total, 0, '', ',') ?>đ</h1>
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