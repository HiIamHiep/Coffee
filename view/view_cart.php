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
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/custom_view_cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Blabla Coffee</title>
    <style>
        header {
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
            <span class="span-price"><?php echo number_format($each['price'], 0, '', ',') ?></span>
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
                <span><?php echo $each['quantity'] ?></span>
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
                $total = $sum;
                echo number_format($sum, 0, '', ',')
                ?>₫
            </span>
        </div>
        <div class="buttons">
            <button class="like-btn" style="font-size: 20px; "><i class="fa-solid fa-delete-left"></i></button>
        </div>
    </div>
</div>
<div class="item" style="display: flex; justify-content: flex-end">
    <div class="total-price">
                    <span class="span-total"> Total Price:
                    <?php if (!empty($sum)) {
                        echo number_format($sum, 0, '', ',');
                    } ?>₫
                    </span>
        <a href="?controller=customer_order">Order now</a>
    </div>
</div>
<?php }
} else {
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
                    let parent = btn.parent();
                    console.log(parent.text());
                    // let parent_tr = btn.parents('tr');
                    let price = parent_tr.find('.span-price').val();
                    let quantity = parent_tr.find('.span-quantity').text();
                    if (type == 1) {
                        quantity++;
                    } else {
                        quantity--;
                    }
                    if (quantity == 0) {
                        parent_tr.remove();
                    } else {
                        parent_tr.find('.span-quantity').text(quantity);
                        let sum = price * quantity;
                        parent_tr.find('.span-sum').text(sum);
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
                    btn.parents('tr').remove();
                    getTotal();
                })
        });
    });

    function getTotal() {
        let total = 0;
        $(".span-sum").each(function () {
            total += parseFloat($(this).text());
        });
        $("#span-total").text(total);
        $("#total-price").text(total);

    }
</script>
</body>
<?php require 'footer.php' ?>
</body>

</html>