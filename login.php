<!-- <?php
        include 'main-header.php';
        ?> -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- Mirrored from cyclonethemes.com/demo/html/suchana/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:24 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>Suchana - Blog, News & Magazine HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>


<body>
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center bg-orange">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Login/Register Page</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page" href="login.php">Login/Register Page</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="login">
        <div class="container">
            <?php
            if (isset($_GET['msg'])) {
            ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <p class="alert-danger"><?php echo $_GET['msg'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="login-form">
                        <form action="login_action.php" method="POST">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Login</h2>
                                        <p>Register if you don't have an account.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="Name1" placeholder="Enter email id">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="email1" placeholder="Enter correct password">
                                </div>

                                <div class="col-xs-12">
                                    <div class="comment-btn mar-bottom-20">
                                        <button class="btn btn-blog">Login</button>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer pull-left">
                                        <input type="checkbox" name="vehicle2" value="Car"> Remember Me?
                                    </div>
                                    <div class="login-accounts pull-right">
                                        <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="register-form">
                        <form method="POST" action="register_action.php">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Register</h2>
                                        <p>Enter your details to be a member.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="name" class="form-control" id="Name" required="required" placeholder="Enter full name">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" required="required" placeholder="abc@xyz.com">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="date1" required="required" placeholder="Enter PhoneNumber">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Select Password :</label>
                                    <input type="password" name="password" class="form-control" id="date" required="required" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Confirm Password :</label>
                                    <input type="password" name="confirm_password" class="form-control" id="phnumber" required="required" placeholder="Re-enter Password">
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" required="required" value="Car"> I agree to the <a href="#" required = "required">terms and conditions.</a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn mar-top-30">
                                        <button type="submit" class="btn btn-blog">Register Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt_instagram mar-bottom-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_12.jpg" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div>
    </div>

    <?php
    include 'main-footer.php';
    ?>

    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- search popup -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!--*Scripts*-->
    <!-- Latest jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Plugin Jquery -->
    <script src="js/plugin.js"></script>
    <!-- custom nav jquery -->
    <script src="js/custom-nav.js"></script>
    <!-- main default Jquery -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/suchana/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:24 GMT -->

</html>