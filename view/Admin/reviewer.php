<?php
    include ("../../controller/db_connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Ramen Review</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../lib/admin/style.css">

    <!-- Bootstrap core CSS -->
    <link href="../lib/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core JavaScript -->
    <script src="../lib/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../lib/vendor/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Preloader -->
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
                                <form action="#" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search">
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
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(../lib/admin/img/bg-img/carousel1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Our Reviewer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Ramen Review Area Start ##### -->
    <section class="game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- *** Single Review Area *** -->
                    <!-- tabel daftar reviewer -->
                    <div>
                        <table class="table table-hover table-striped" id="table_reviewer">
                            <thead>
                                <tr>
                                    <th>idReviewer</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>E-Mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM pengguna WHERE nama != 'admin'";
                                    $resultReviewerList = mysqli_query($connection, $sql);
                                    while ($row = mysqli_fetch_array($resultReviewerList)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['idUser'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['nama'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "</tr>";
                                    // mysqli_close($connection);
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!--
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="../lib/admin/img/bg-img/reviewer1.jpg" alt="">
                        </div>
                        <div class="game-content">
                            <a href="" class="game-title">Neneng</a><!--Nama Restauant Ramen--
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!--Rating Area --
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="rating-area text-center">
                                    <h5>Total Review: 45 review</h5><!--Nilai--
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-100">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Ramen Review Area End ##### -->

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

</html>