<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>

</head>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Review!</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../lib/user/styleSearch.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorSearch/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fontsSearch/font-awesome-/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fontsSearch/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendorSearch/noui/nouislider.min.css">
    <!--===============================================================================================-->

</head>

<body>
    

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="admin.html"><img src="../lib/Admin/img/core-img/Ramenku.jpg" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="#" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                    <button type="submit" class="btn"></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                                <a href="login.html"><span>LOGOUT</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="make-review.php">Home</a></li>
                                    <li><a href="ramen-review.php">Ramen</a></li>
                                    <li><a href="restaurant-review.php">Restaurant</a></li>
                                    <li><a href="reviewer.php">Reviewer</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div class="w3-container ">
    <div class="w3-panel  w3-medium">
      <h2>ADD NEW RAMEN REVIEW</h2>
    </div>
<div class="kotak">
    <form action="/action_page.php">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title">
                        Review Adder
                    </span>
    
                    <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                        <span class="label-input100">Nama Ramen</span>
                        <input class="input100" type="text" name="name" placeholder="Masukann Nama Ramen">
                    </div>
    
                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                        <span class="label-input100">Masukan Nama Restaurant</span>
                        <input class="input100" type="text" name="name" placeholder="Masukan Nama Restaurant">
                    </div>
    
                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                        <span class="label-input100">Harga</span>
                        <input class="input100" type="text" name="phone" placeholder="Masukan Harganya">
                    </div>

                    <div class="wrap-input100 input100-select bg1">
                        <span class="label-input100">Masukan Rating!</span>
                        <div>
                            <select class="js-select2" name="service">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                    </div>
                    
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br></br>
      </form>
</div>
    <br>
     
    </section>
    <!-- ##### Top 10 Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../lib/user/jsSearch/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../lib/user/jsSearch/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../lib/user/jsSearch/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../lib/user/jsSearch/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../lib/user/jsSearch/active.js"></script>
</body>
    
    
    </body>