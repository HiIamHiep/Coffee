<header>
    <nav>
        <div class="logo">
            <a href="#">Blabla <span>Coffee</span></a>
        </div>
        <ul>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>
    </nav>

    <nav>
        <ul class="header-right">
            <?php if(!empty($_SESSION['name'])) { ?>
            <li class="item"><a href="?controller=signin"><?php echo $_SESSION['name'] ?></a></li>
            <?php } else { ?>
            <li class="item"><a href="?controller=signin">Login</a></li>
            <?php } ?>
            <li class="item"><a href="?controller=view_cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </nav>


</header>