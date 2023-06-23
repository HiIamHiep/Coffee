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
                <?php require './view/admin/header.php'?>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Orders</h4>
<!--                            <a class="btn btn-gradient-primary" href="?controller=admin&action=create_product"><i class="fa-solid fa-plus"></i> Add new product</a>-->
                            <table class="table table-striped" >
                                <thead>
                                <tr>
                                    <th>Name receiver</th>
                                    <th>Phone receiver</th>
                                    <th>Address receiver</th>
                                    <th>Status</th>
                                    <th>Total price</th>
                                    <th>Customer order</th>
                                    <th>Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if ($result != null) {
                                foreach ($result as $each) {
                                    ?>
                                <tr>

                                    <td> <?php echo $each->get_name_receiver() ?> </td>
                                    <td> <?php echo $each->get_phone_receiver() ?> </td>
                                    <td> <?php echo $each->get_address_receiver() ?></td>
                                    <td> <?php
                                            switch ($each->get_status())
                                            {
                                                case 0:
                                                    echo "<span style='color: rgb(247, 202, 24)'>";
                                                    echo "Chưa duyệt";
                                                    echo "</span>";
                                                    break;
                                                case 1:
                                                    echo "<span style='color: rgba(0, 230, 64, 1)'>";
                                                    echo "Đã duyệt";
                                                    echo "</span>";
                                                    break;
                                                case 2:
                                                    echo "<span style='color: rgba(242, 38, 19, 1);'>";
                                                    echo "Đã hủy đơn";
                                                    echo "</span>";
                                                    break;
                                                default:
                                                    echo "Lỗi";
                                                    break;
                                            }
                                        ?>
                                    </td>
                                    <td> <?php echo $each->get_total_price() ?>đ</td>
                                    <td>
                                        <?php
                                        $customer = (new Customer())->find($each->get_customer_id());
                                        echo $customer->get_fullname();
                                        ?>
                                    </td>
                                    <td> <?php echo $each->get_created_at() ?> </td>
                                    <td> <a class="text" href="?controller=admin&action=order_detail&id=<?php echo $each->get_id() ?>"><i class="fa-solid fa-eye"></i> View</a> </td>
                                    <td>
                                        <?php if ($each->get_status() == 0 ) { ?>
                                            <a href="?controller=admin&action=confirm_order&id=<?php echo $each->get_id() ?>" style="text-decoration: none;">
                                                Confirm
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php }
                                }?>
                                </tbody>
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