<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/custom_detail_product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Blabla Coffee</title>
    <style>
        header {
            position: relative;
            background: #333333;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<div class = "card-wrapper">
    <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
            <div class = "img-display">
                <div class = "img-showcase">
                    <img src = "<?php echo $object->get_photo() ?>" alt = "coffee image">
<!--                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">-->
<!--                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">-->
<!--                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">-->
                </div>
            </div>
<!--            <div class = "img-select">-->
<!--                <div class = "img-item">-->
<!--                    <a href = "#" data-id = "1">-->
<!--                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class = "img-item">-->
<!--                    <a href = "#" data-id = "2">-->
<!--                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class = "img-item">-->
<!--                    <a href = "#" data-id = "3">-->
<!--                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class = "img-item">-->
<!--                    <a href = "#" data-id = "4">-->
<!--                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <!-- card right -->
        <div class = "product-content">
            <h2 class = "product-title"><?php echo $object->get_name() ?></h2>
            <a href = "?controller=product" class = "product-link">visit coffee shop</a>
            <div class = "product-rating">
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star-half-alt"></i>
                <span>4.7(21)</span>
            </div>

            <div class = "product-price">
<!--                <p class = "last-price">Old Price: <span>$257.00</span></p>-->
                <p class = "new-price">Price: <span><?php echo number_format($object->get_price(),0,'',',') ?>đ</span></p>
            </div>

            <div class = "product-detail">
                <h2>about this product: </h2>
                <p><?php echo $object->get_description() ?></p>
                <ul>
<!--                    <li>Color: <span>Black</span></li>-->
<!--                    <li>Available: <span>in stock</span></li>-->
<!--                    <li>Category: <span>Shoes</span></li>-->
                    <li>Shipping Area: <span>All over the world</span></li>
                    <li>Shipping Fee: <span>Free</span></li>
                </ul>
            </div>

            <div class = "purchase-info">
                <button
                        data-id='<?php echo $object->get_id() ?>'
                        class="btn-add-to-cart add_to_cart btn__text btn"
                        style="cursor: pointer; background: green;"
                >Add to Cart<i class = "fas fa-shopping-cart"></i>
                </button>
                <a href="?controller=add_to_cart&id=<?php echo $object->get_id() ?>" class = "btn">Buy Now</a>
            </div>

            <div class = "social-links">
                <p>Share At: </p>
                <a href = "#">
                    <i class = "fab fa-facebook-f"></i>
                </a>
                <a href = "#">
                    <i class = "fab fa-twitter"></i>
                </a>
                <a href = "#">
                    <i class = "fab fa-instagram"></i>
                </a>
                <a href = "#">
                    <i class = "fab fa-whatsapp"></i>
                </a>
                <a href = "#">
                    <i class = "fab fa-pinterest"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>
<script src="./view/assets/product_detail/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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