<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blabla Coffee</title>
</head>
<body>
    <?php require 'header.php'?>
    <div class="content">
        <h2>Blabla Coffee</h2>
        <p>Would you like to start the day with a nice coffee?</p>
    </div>

    <div class="menu" id="menu">
        <div class="menu-header">
            <h3>Menu</h3>
            <h4>Blabla Coffee Menu</h4>
        </div>
        <div class="menu-content">
            <div class="hot-coffees">
                <div class="hot-coffees-image">
                    <img src="./view/assets/img/hot-coffees.jpg" alt="">
                </div>
                <div class="hot-coffees-body">
                    <h2>Hot Coffees</h2>
                    <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, repellat!</label>
                </div>
            </div>
            <div class="cold-coffees">
                <div class="cold-coffees-image">
                    <img src="./view/assets/img/cold-coffees.jpg" alt="">
                </div>
                <div class="cold-coffees-body">
                    <h2>Cold Coffees</h2>
                    <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, repellat!</label>
                </div>
            </div>
            <div class="frappucino-coffees">
                <div class="frappucino-coffees-image">
                    <img src="./view/assets/img/frappuccino.jpg" alt="">
                </div>
                <div class="frappucino-coffees-body">
                    <h2>Frappucino Coffees</h2>
                    <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, repellat!</label>
                </div>
            </div>
        </div>
    </div>


    <div class="shop" id="shop">
        <div class="shop-header">
            <h3>Shop</h3>
            <h4>Blabla Coffee Drinks</h4>
        </div>
        <div class="shop-box">
            <div class="item-1">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/caramel-macchiato.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">4.45$</label>
                        <h3>Caramel Macchiato</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-2">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/flat-white.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">3.75$</label>
                        <h3>Flat White</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-3">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/chocolate-frappuccino.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">3.95$</label>
                        <h3>Chocolate Frappucino</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-4">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/frappe.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">2.79$</label>
                        <h3>Frappe</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-5">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/caffe-mocha.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">3.45$</label>
                        <h3>Caffe Mocha</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-6">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/vanilla-frappuccino.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">3.25$</label>
                        <h3>Vanilla Frappucino</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-7">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/white-chocolate-mocha.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">6.60$</label>
                        <h3>White Chocolate Mocha</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <div class="item-8">
                <div class="card">
                    <div class="card-image">
                        <img src="./view/assets/img/ice-latte.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">5.65$</label>
                        <h3>Ice Latte</h3>
                        <label>Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
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
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'footer.php'?>
</body>

</html>