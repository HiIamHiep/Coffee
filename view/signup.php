<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/view/assets/img/logo/favicon.ico" type="image/png">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="./view/assets/signup/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./view/assets/signup/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <style>
        header {
            background-color: #333;
            opacity: .7;
        }
    </style>
</head>
<body>
    <?php require 'header.php'?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <?php
//            session_start();
            if(isset($_SESSION['error'])){
                echo "<span style='color: red'>";
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                echo "</span>";
            }
            ?>
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="?controller=signup&action=dosignup">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="name" placeholder="First Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="name" placeholder="Last Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa-solid fa-cake-candles"></i></label>
                                <input type="date" name="birth_date" id="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <div style="display: flex; flex-direction: row;">
                                    <span>Male</span>
                                    <input type="radio" name="gender" value="0"/>
                                    <span>Female</span>
                                    <input type="radio" name="gender" value="1"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>-->
<!--                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>-->
<!--                            </div>-->
                            <div class="form-group">
                                <label for="email"><i class="fa-solid fa-phone"></i>></label>
                                <input type="text" name="phone_number" id="email" placeholder="Phone number"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" checked/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./view/assets/signup/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="?controller=signin" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="./view/assets/signup/vendor/jquery/jquery.min.js"></script>
    <script src="./view/assets/signup/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>