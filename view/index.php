<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/custom.css">
    <link rel="stylesheet" href="./view/assets/signup/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo/favicon.ico">
    <title>Bobby Coffee</title>

    <style>
        header {
            position: absolute;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>

<div class="content">
    <h2>Bobby Coffee</h2>
    <p>Would you like to start the day with a nice coffee?</p>
</div>

<div class="shop" id="shop">
    <div class="shop-header">
        <h3>Shop</h3>
        <h4>Blabla Coffee Drinks</h4>
    </div>
    <?php
    $sql = "select * from products order by id desc limit 5 ";
    $result = (new Connect())->select($sql);
    ?>
    <div class="shop-box">
        <?php
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            foreach ($result as $each) {
                $object = new ProductObject($each);
                ?>
                <div class="item-1">
                    <div class="card">
                        <a href="?controller=detail_product&id=<?php echo $object->get_id() ?>">
                            <div class="card-image">
                                <img src="<?php echo $object->get_photo() ?>">
                            </div>
                        </a>
                        <div class="card-body">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                            <label class="cash"><?php echo number_format($object->get_price(), 0, '', ',') ?>đ</label>
                            <h3><?php echo $object->get_name() ?></h3>
                            <!--                            <label>Lorem ipsum dolor sit amet.</label>-->
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
        <div>
            <span style="color: yellow">Hiện chưa có sản phẩm nào</span>
        </div>
        <?php } ?>
    </div>
</div>

<div class="contact" id="contact">
    <div class="contact-box">
        <div class="contact-image">
            <img src="./view/assets/img/bg-image.jpeg">
        </div>
    </div>
    <div class="contact-box">
        <div class="contact-body">
            <form>
                <h2>Contact Us</h2>
                <div class="form-content">
                    <input type="text" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="form-content">
                    <input type="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <button type="button">Send</button>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
</body>

</html>