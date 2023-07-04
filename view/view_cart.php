<?php
if (session_status() == 0) {
    session_start();
} elseif (session_status() == 1) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/custom_view_cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Bobby Coffee</title>
    <style>
        .pc-menu {
            position: relative;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<body style="background: gray">
<div class="shopping-cart" style="overflow: scroll;">
    <!-- Title -->
    <div class="title">
        Shopping Bag
    </div>

    <?php
    $total =0;
    if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    foreach ($cart

             as $each) {
        ?>
        <!-- Product #1 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"><i class="fa-regular fa-heart"></i></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="<?php echo $each['photo'] ?>" alt="" height="63"/>
            </div>

            <div class="description">
                <span class="span-price"><?php echo number_format($each['price'], 0, '', ',') ?>đ</span>
                <span><?php echo $each['name'] ?></span>
            </div>

            <div class="tr">
                <div class="quantity">
                    <button
                            data-id='<?php echo $each['id']; ?>'
                            class="btn-update-quantity" ;
                            data-type='0' ;
                    >
                        -
                    </button>
                    <span class="span-quantity"><?php echo $each['quantity'] ?></span>
                    <button
                            data-id='<?php echo $each['id']; ?>'
                            class="btn-update-quantity" ;
                            data-type='1' ;
                    >
                        +
                    </button>
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
            <div class="buttons">
                <button
                        class="btn-delete" style="font-size: 20px; "
                        data-id="<?php echo $each['id'] ?>">
                    <i class="fa-solid fa-delete-left"></i>
                </button>
            </div>
        </div>
    <?php } ?>
    <div class="item" style="display: flex; justify-content: flex-end">
        <div class="total-price">
            Total Price:
            <span id="total-price">
                    <?php if (!empty($total)) {
                        echo number_format($total, 0, '', ',');
                    } ?>
                    </span>₫
            <a href="?controller=customer_order" style="color: darkgreen; font-weight: bold">Order now</a>
        </div>
    </div>
</div>
<?php } else {
    echo "<span style='text-align: center'>";
    echo "Không có sản phẩm nào trong giỏ hàng";
    echo "</span>";
} ?>

</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".btn-update-quantity").click(function () {
            let btn = $(this);
            let id = btn.data('id');
            let type = parseInt(btn.data('type'));
            $.ajax({
                url: '?controller=update_quantity',
                type: 'GET',
                // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: {id, type},
            })
                .done(function () {
                    let parent_tr = btn.parents('.tr');
                    let price = btn.closest('.item').find('.span-price').text().replace(/[^\d.]/g, '');
                    let quantity = parent_tr.find('.span-quantity').text();
                    if (type == 1) {
                        quantity++;
                    } else {
                        quantity--;
                    }
                    if (quantity == 0) {
                        btn.closest('.item').remove();
                    } else {
                        parent_tr.find('.span-quantity').text(quantity);
                        let sum = price * quantity;
                        btn.closest('.item').find('.total-price .span-sum').text(new Intl.NumberFormat('vi-VN', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(Math.floor(sum)));
                    }

                    getTotal();
                });
        });
        $(".btn-delete").click(function () {
            let btn = $(this);
            let id = btn.data('id');
            $.ajax({
                url: '?controller=delete_product',
                type: 'GET',
                // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: {id},
            })
                .done(function () {
                    btn.closest('.item').remove();
                    getTotal();
                    alert("Xóa thành công sản phẩm");
                })
        });
    });

    function getTotal() {
        let total = 0;
        $(".span-sum").each(function () {
            // console.log($(this));
            let value = $(this).text().replace(/đ|,|\./gi, ""); // Loại bỏ chữ "đ", dấu phẩy và dấu chấm
            console.log(value);
            if (!isNaN(parseFloat(value))) {
                total += parseFloat(value);
            }
            console.log(total);

        });
        let formattedTotal = total.toLocaleString(); // Định dạng thành số tiền
        $("#span-total").text(formattedTotal);
        $("#total-price").text(formattedTotal);

    }
</script>
</body>
<?php require 'footer.php' ?>
</body>

</html>