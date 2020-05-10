<?php
    include "../../controller/db_connect.php"
?>

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

    <!-- ##### Top 10 Area Start ##### -->
    <section class="monthly-picks-area section-padding-100 bg-pattern">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Top 10 Review's</h2>
                </div>
            </div>
        </div>

        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="ramen-tab">
                <div class="row justify-content-md-center">
                    <div class="col-10">
                    <table class="table table-dark table-hover table-striped" id="table_ramen">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama Ramen</th>
                                    <th>Harga</th>
                                    <th>Nama Resto</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql1 = "select top 1 minReview from config";
                                    $minRev = mysqli_query($connection, $sql1);

                                    $sql2 = "select * 
                                                from ramen
                                                    inner join dibuatdi on dibuatdi.idRamen = ramen.idRamen
                                                    inner join restoran on restoran.idRestoran = dibuatdi.idRestoran
                                                    inner join review on review.idRamen = ramen.idRamen
                                                    inner join kota on kota.idKota = restoran.idKota
                                                    left outer join(
                                                        select ramen.idRamen, count(review.idReview) as 'total'
                                                            from review
                                                                inner join ramen on ramen.idRamen = review.idRamen
                                                            group by ramen.idRamen
                                                    ) as tR on tR.idRamen = ramen.idRamen
                                                where tR.total > '$minRev'
                                                order by tR.total asc";
                                    $semuaRamen = mysqli_query($connection, $sql2);
                                    
                                    $totalRamen = mysqli_num_rows($semuaRamen);
                                    
                                    // Ramen 
                                    $i = 1;
                                    while($i<=10 and $row=mysqli_fetch_array($semuaRamen)){
                                        echo "<tr>";
                                        echo "<td>" . $i .  "</td>";
                                        echo "<td>" . $row['namaRamen'] . "</td>";
                                        echo "<td>" . $row['harga'] . "</td>";
                                        echo "<td>" . $row['namaRestoran'] . "</td>";
                                        echo "<td>" . $row['rating'] . "</td>";
                                        echo "</tr>";

                                        $i += 1;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Top 10 Area End ##### -->
    <br>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="w3-container">
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
                </div>
            </div>
        </div>                                
    </div>
    
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