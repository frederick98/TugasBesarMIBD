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
    <title>Welcome ADMIN!</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../lib/admin/style.css">

</head>

<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="admin.php"><img src="../lib/admin/img/core-img/Ramenku.jpg" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="../../controller/search_bar.php" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="   Search">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                                <a href="../index.php"><span>LOG OUT</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
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
                                    <li><a href="admin.php">Home</a></li>
                                    <li><a href="ramen-review.php">Ramen</a></li>
                                    <li><a href="restaurant-review.php">Restaurant</a></li>
                                    <li><a href="reviewer.php">Reviewer</a></li>
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
      <h2>Admin Control Page</h2>
    </div>
<div class="kotak">
    <form method="POST" action="../../controller/admin_control.php">
        <label for="box">Menentukan berapa minimal review buat ramen biar masuk top 10 = </label>
            <select id="review" name="angkareview">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        <br></br>
        <label for="lname">Masukin rentang rating buat user (angka saja) = </label>
        <select id="rating" name="angkarating">
            <option value="1"selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br></br>
        <button class="button" name="submit" style="vertical-align:middle"><span>Submit</span></button>
      </form>
</div>
    <br>
         <!-- ##### Top 10 Area Start ##### -->
    <section class="monthly-picks-area section-padding-100 bg-pattern">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="left-right-pattern"></div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Top 10 Review's</h2>
                </div>
            </div>
            <div class = "urutanrating">
                <label for="lname">Memilih Rating </label>
                <select id="rating" name="angkarating">
                    <option value="satu"selected>1.0</option>
                    <option value="dua">2.0</option>
                    <option value="tiga" >3.0</option>
                    <option value="empat">4.0</option>
                    <option value="lima">5.0</option>
                    <option value="enam">6.0</option>
                    <option value="tujuh">7.0</option>
                    <option value="delapan">8.0</option>
                    <option value="sembilang">9.0</option>
                    <option value="sepuluh">10</option>
                </select>
            </div>
            <br>
        </div>

        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="ramen-tab">
                <!-- Top 10 Ramen Slideshow -->
                <div class="popular-games-slideshow owl-carousel">

                    <!-- Ramen -->
                    <div class="single-games-slide">
                        <img src="../lib/admin/img/bg-img/beef-ramen.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Beef Ramen</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Ramen Ya! Bandung</a>
                            </div>
                        </div>
                    </div>

                    <!--Input top 10 tingal copas dari yang ramen-->

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Top 10 Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../lib/admin/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../lib/admin/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../lib/admin/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../lib/admin/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../lib/admin/js/active.js"></script>
</body>
    
    
    </body>