<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./view/assets/form_order/css/bootstrap.min.css"/>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./view/assets/form_order/css/style.css"/>
    <link rel="stylesheet" href="./view/assets/css/custom_view_cart.css">
    <link rel="stylesheet" href="./view/assets/css/style.css">

    <title>Blabla Coffee</title>
    <style>
        header {
            position: relative;
            background: #333;
        }

        .shopping-cart {
            width: initial;
            height: initial;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form method="post" action="?controller=checkout">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Name</span>
                                    <input class="form-control" type="text" name="name_receiver" placeholder="Enter your name"
                                           value="<?php echo $object->get_fullname() ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Email</span>
                                    <input class="form-control" type="email" placeholder="Enter your email"
                                           value="<?php echo $object->get_email() ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="form-label">Phone</span>
                            <input class="form-control" name="phone_receiver" type="tel" placeholder="Enter your phone number"
                                   value="<?php echo $object->get_phone_number() ?>">
                        </div>
                        <div class="form-group">
                            <span class="form-label">Address receiver</span>
                            <textarea class="form-control" type="text" name="address_receiver"
                                      placeholder="Enter ZIP/Location"><?php echo $object->get_address() ?></textarea>
                        </div>
                        <div class="shopping-cart">
                            <!-- Title -->
                            <div class="title">
                                Products
                            </div>

                            <?php
                            $total = 0;
                            if (!empty($_SESSION['cart'])) {
                                $cart = $_SESSION['cart'];
                                foreach ($cart as $each) {
                                    ?>
                                    <!-- Product #1 -->
                                    <div class="item">
                                        <div class="image">
                                            <img src="<?php echo $each['photo'] ?>" alt="" height="63"/>
                                        </div>

                                        <div class="description">
                                            <span class="span-price"><?php echo number_format($each['price'], 0, '',
                                                    ',') ?></span>
                                            <span><?php echo $each['name'] ?></span>
                                        </div>

                                        <div class="tr">
                                            <div class="quantity">
                                                <span><?php echo $each['quantity'] ?></span>
                                            </div>
                                        </div>
                                        <div class="total-price">
                                            <span class="span-sum">
                                                <?php
                                                $sum = $each['quantity'] * $each['price'];
                                                $total += $sum;
                                                echo number_format($sum, 0, '', ',')
                                                ?>₫
                                            </span>
                                        </div>
                                    </div>
                                <?php }
                            } else {
                                echo "<span style='text-align: center'>";
                                echo "Không có sản phẩm nào trong giỏ hàng";
                                echo "</span>";
                            } ?>
                        </div>
                        <div class="form-btn">
                            <button class="submit-btn">Order now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>
</body>

</html>