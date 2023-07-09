<div id="modal-signup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="main">

            <!-- Sign up form -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <div class="modal-header">
                                <h2 class="form-title">Sign up</h2>
                                <div class="alert alert-success" id="div-notice-signup" style="display: none">

                                </div>
                            </div>
                            <div class="modal-body">
                                <form method="post" class="register-form" id="register-form">
                                    <div class="form-group" >
                                        <input type="text" name="first_name" id="name" placeholder="First Name" />
                                    </div>
                                    <div class="form-group" >
                                        <input type="text" name="last_name" id="name" placeholder="Last Name" />
                                    </div>
                                    <div class="form-group" >
                                        <label for="email"><i class="fa-solid fa-cake-candles"></i></label>
                                        <input type="date" name="birth_date" id="email" />
                                    </div>
                                    <div class="form-group" >
                                        <input type="email" name="email" id="email" placeholder="Your Email" />
                                    </div>
                                    <div class="form-group" >
                                        <div style="display: flex; flex-direction: row;">
                                            <span>Male</span>
                                            <input type="radio" name="gender" value="0"/>
                                            <span>Female</span>
                                            <input type="radio" name="gender" value="1"/>
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <input type="password" name="password" id="password" placeholder="Password" />
                                    </div>
                                    <div class="form-group" >
                                        <input type="password" name="re_password" placeholder="re_password" />
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
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"
                                               checked/>
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree
                                            all statements in <a href="#" class="term-service">Terms of service</a></label>
                                    </div>
                                    <div class="form-group form-button">
                                        <button name="signup" id="signup" class="form-submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="signup-image">
                            <figure><img src="./view/assets/signup/images/signup-image.jpg" alt="sing up image">
                            </figure>
                            <a href="?controller=signin" class="signup-image-link">I am already member</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

</div>
<!-- JS -->

<script src="./view/assets/signup/vendor/jquery/jquery.min.js"></script>
<script src="./view/assets/signup/js/main.js"></script>