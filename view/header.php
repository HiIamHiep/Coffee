<style>
    .header-right .item {
        position: relative;
    }
    .header-right .item .dropdown-menu {
        position: absolute;
        display: none;
        list-style: none;
        border: 1px solid #333;
        z-index: 1000;
        min-width: 220px;
        padding: 5px 0;
        margin: 2px 0 0;
        right: -55px;
        font-size: 14px;
        text-align: left;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,0.15);
        border-radius: 4px;
        /*-webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);*/
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    }

    .header-right .item .dropdown-menu .nav-item-lv2 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .header-right .item .dropdown-menu .nav-item-lv2 a {
        /*font-size: 20px;*/
        color: #333;
    }

    .header-right .item:hover .dropdown-menu {
        display: block;
    }
</style>
<header>
    <nav>
        <div class="logo">
            <a href="?controller=base">Bobby<span>Coffee</span></a>
        </div>
        <ul>
            <li><a href="#menu">Menu</a></li>
            <li><a href="?controller=product">Shop</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>
    </nav>

    <nav>
        <ul class="header-right">
            <?php if(!empty($_SESSION['name'])) { ?>
            <li class="item"><a><?php echo $_SESSION['name'] ?></a>
                <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="?controller=profile" class="nav-link">View information</a></li>
                    <li class="nav-item-lv2"><a href="?controller=signout" class="nav-link">Sign out</a></li>
                </ul>
            </li>
            <?php } else { ?>
            <li class="item"><a href="?controller=signin">Login</a>
                <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="?controller=signup" class="nav-link">Sign Up</a></li>
                </ul>
            </li>
            <?php } ?>
            <li class="item"><a href="?controller=view_cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </nav>

</header>