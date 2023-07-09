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
        /*min-width: 200px;*/
        padding: 5px 0;
        margin: 2px 0 0;
        /*right: -55px;*/
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
<?php
    include "signup.php";
    include "signin.php";
?>
<header class="pc-menu">
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

            <li class="item" id="name-user" <?php if(empty($_SESSION['name'])) {  echo "style='display: none'"; } ?>><a><?php if(!empty($_SESSION['name'])) { echo $_SESSION['name']; }  ?></a>
                <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="?controller=profile" class="nav-link">View information</a></li>
                    <li class="nav-item-lv2"><a href="?controller=signout" class="nav-link">Sign out</a></li>
                </ul>
            </li>
                <li class="item" id="menu-guest" <?php if(!empty($_SESSION['name'])) {  echo "style='display: none'"; } ?>>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-signin">Login</button>
                <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-signup">Sign Up</button></li></ul>
            </li>
            <li class="item"><a href="?controller=view_cart"><i class="fa-solid fa-cart-shopping" ></i></a></li>
        </ul>
    </nav>
</header>
<header class="menu-mobile">
    <div class="navbar">
        <a onclick="showSidebar()" style="cursor: pointer; padding: 10px 10px;"><i class="fa-solid fa-bars"></i></a>
        <div class="logo">
            <a href="?controller=base">Bobby<span>Coffee</span></a>
        </div>
        <a><i class="fa-solid fa-magnifying-glass"></i></a>
    </div>

    <div class="navigation-menu" id="navigation-menu">
        <ul class="nav" >
            <li class="nav-item">
                <div class="logo">
                    <a href="?controller=base">Bobby<span>Coffee</span></a>
                    <a style=" font-size: 20px; cursor: pointer; margin-left: 25px" onclick="hiddenSidebar()"><i class="fa-solid fa-x"></i></a>
                </div>
            </li>
            <li class="nav-item" id="name-user" <?php if(empty($_SESSION['name'])) {  echo "style='display: none'"; } ?>><a href="?controller=profile" class="nav-link"><?php echo $_SESSION['name'] ?></a></li>
            <li class="nav-item" id="menu-guest" <?php if(!empty($_SESSION['name'])) {  echo "style='display: none'"; } ?>><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-signin">Login</button></li>
            <li class="nav-item" id="menu-guest" <?php if(!empty($_SESSION['name'])) {  echo "style='display: none'"; } ?>><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-signup">Sign up</button></li>
            <li class="nav-item"><a href="?controller=product" class="nav-link">Shop</a>
                <!-- <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="" class="nav-link">Oxford</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Loafer</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Derby</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Boots</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Sneaker- sandal</a></li>
                </ul> -->
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a>
                <!-- <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="" class="nav-link">Wallet</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Belt</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Dress Sock</a></li>
                </ul> -->
            </li>
            <!-- <li class="nav-item"><a href="#" class="nav-link">Collection</a>
                <ul class="dropdown-menu">
                    <li class="nav-item-lv2"><a href="" class="nav-link">The flex</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">The new gen</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Timeless</a></li>
                    <li class="nav-item-lv2"><a href="" class="nav-link">Wedding shoes</a></li>
                </ul>
            </li> -->
            <?php if(!empty($_SESSION['name'])) { ?>
            <li class="nav-item"><a href="?controller=signout" class="nav-link">Sign out</a>
            <?php } ?>
        </ul>
    </div>

</header>
<script>
    function hiddenSidebar() {
        document.getElementById("navigation-menu").style.display = "none";
    }

    function showSidebar() {
        document.getElementById("navigation-menu").style.display = "block";
    }
</script>