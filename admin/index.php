<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css?ver=<?php rand(); ?>">
    <title>Radix</title>
</head>

<body>

    <div class="container">
        <!-- Login form start -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group">
                    <div class="card rounded-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">
                            Sign in to Account
                        </h1>
                        <hr class="my-3">
                        <form action="#" method="post" id="login-form" class="px-3">

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-mail" required>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                                    <label for="customCheck" class="custom-control-label">Remember me</label>
                                </div>
                                <div class="forgot float-right">
                                    <a href="#" id="forgot-link">Forgot Password?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="form-group">
                                <input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Hello Friends!</h1>
                        <hr class="my-3 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start your journey with us!</p>
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login form end -->
        <!-- Register form start -->
        <div class="row justify-content-center wrapper" id="register-box" style="display: none">
            <div class="col-lg-10 my-auto">
                <div class="card-group">
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
                        <hr class="my-3 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">To keep connected with us please login with your personal info.</p>
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">Sign In</button>
                    </div>
                    <div class="card rounded-right p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">
                            Create Account
                        </h1>
                        <hr class="my-3">
                        <form action="#" method="post" id="register-form" class="px-3">

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-user fa-lg"></i>
                                    </span>
                                </div>
                                <input type="text" name="name" id="rname" class="form-control rounded-0" placeholder="Full Name" required>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="E-mail" required>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="rpassword" id="rpassword" class="form-control rounded-0" placeholder="Password" required minlength="5">
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="rcpassword" id="rcpassword" class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="form-group">
                                <input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register form end -->
        <!-- Forgot form start -->
        <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group">
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Reset Password</h1>
                        <hr class="my-3 bg-light myHr" />
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">Back</button>
                    </div>
                    <div class="card rounded-right p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">
                            Forgot Your Password
                        </h1>
                        <hr class="my-3">
                        <p class="lead text-center text-secondary">
                            To reset your password, enter the registered e-mail address and we will send you the rest instructions om your e-mail!
                        </p>
                        <form action="#" method="post" id="forgot-form" class="px-3">

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="E-mail" required>
                            </div>
                            <p style="color: #dc3545; margin-bottom: 16px;"></p>

                            <div class="form-group">
                                <input type="submit" value="Reset Password" id="forgot-btn" class="btn btn-primary btn-lg btn-block myBtn">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot form end -->
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/auth.js"></script>
</body>

</html>