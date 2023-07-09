<div class="modal fade" id="modal-signin" role="dialog">
    <div class="modal-dialog">
        <div class="signin">
            <div class="container-signin sign-in-container" id="container">
                <div class="form-container">
                    <form method="post" id="signin-form">
                        <div class="title-container mt-16">
                            <h1>Sign in</h1>
                        </div>
                        <div class="alert alert-success" id="div-notice-signin" style="display: none">

                        </div>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                            <a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <span>or use your account</span>
                        <div style="display: flex; flex-direction: initial">
                            <input type="email" placeholder="Email" name="email" style="float: right"/>

                        </div>
                        <div style="display: flex; flex-direction: initial">
                            <input type="password" placeholder="Password" name="password"/>
                        </div>
<!--                      <button style="margin-top: 7px;">Sign In</button>-->
                        <button style="margin-top: 7px;" name="signin" id="signin" class="form-submit">Sign In</button>
                        <a href="" >
                            <input type="checkbox" name="remember">
                        </a>
                        <a href="?controller=forgot_pw">Forgot your password?</a>
                    </form>
                    <div class="register-container">
                        <button name="signup" id="signup" class="signup1" > <a>You don't have account? Register</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/view/assets/js/validate.js"></script>
