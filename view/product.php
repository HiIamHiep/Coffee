<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/custom_show_product.css">
    <link rel="stylesheet" href="./view/assets/css/custom.css">
    <link rel="stylesheet" href="./view/assets/signup/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Shop</title>
    <style>
        header {
            position: relative;
            background: #333;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Featured Product</h3>
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            <?php
                if ($result != NULL) {
                    foreach ($result as $each) {
                ?>
            <div class="item col-md-6 col-lg-4 col-xl-3">
                <a href="?controller=detail_product&id=<?php echo $each->get_id() ?>">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <img src="<?php echo $each->get_photo() ?>">
                </a>
                <ul>
                    <li>
                            <button
                                    data-id='<?php echo $each->get_id() ?>'
                                    class="btn-add-to-cart add_to_cart btn__text "
                                    style="cursor: pointer;"
                            >
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                    </li>
                    <!--                            <li><a href="#"><i class="fas fa-plus"></i></a></li>-->
                </ul>
            </div>
            <div class="part-2">
                <h3 class="product-title"><?php echo $each->get_name() ?></h3>
                <!--                        <h4 class="product-old-price">$79.99</h4>-->
                <h4 class="product-price"><?php echo number_format($each->get_price(), 0, '', ',') ?>đ</h4>
            </div>
        </div>
    </div>

    <?php } } else { ?>
        <div>
            <span style="text-align: center">Hiện chưa có sản phẩn nào</span>
        </div>
    <?php } ?>

    </div>
    </div>
</section>

<?php require 'footer.php' ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-add-to-cart').click(function () {
            let id = $(this).data('id');
            $.ajax({
                url: '?controller=add_to_cart&id={id}',
                type: 'GET',
                data: {id},
            })
                .done(function (response) {
                    if (response) {
                        alert('Thêm sản phẩm thành công');
                    } else {
                        alert('Thêm sản phẩm thất bại');
                    }
                });
        });
    });

</script>
</body>

</html>