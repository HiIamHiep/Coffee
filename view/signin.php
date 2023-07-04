<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./view/assets/login/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(./view/assets/login/images/bg.jpg);">
<?php
if (isset($_SESSION['error'])) {
    echo "<span style='color: red'>";
    echo $_SESSION['error'];
    unset($_SESSION['error']);
    echo "</span>";
}
if (isset($_SESSION['success'])) {
    echo "<span style='color: greenyellow'>";
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    echo "</span>";
}
if (isset($_SESSION['alert'])) {
    echo "<span style='color: indianred'>";
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    echo "</span>";
}
?>
<?php require "header.php" ?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sign In</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="?controller=signin&action=dosignin" method="post" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password"
                                   name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="?controller=forgot_pw" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; You don't have account &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="?controller=signup" class="px-2 py-2 mr-md-1 rounded"><span
                                    class="ion-logo-facebook mr-2"></span>Sign Up</a>
                        <!--	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./view/assets/login/js/jquery.min.js"></script>
<script src="./view/assets/login/js/popper.js"></script>
<script src="./view/assets/login/js/bootstrap.min.js"></script>
<script src="./view/assets/login/js/main.js"></script>

</body>
</html>

