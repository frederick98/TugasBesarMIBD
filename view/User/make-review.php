<?php
    session_start();
    include "../../controller/db_connect.php";
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
    <title>Tambah Review Ramen</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../lib/user/style.css">

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
                            <a href="user.php"><img src="../lib/user/img/core-img/Ramenku.jpg" alt=""></a>
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
                                <a href="../index.php"><span>Log Out</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
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
                                    <li><a href="user.php">Home</a></li>
                                    <li><a href="ramen-review.php">Ramen</a></li>
                                    <li><a href="restaurant-review.php">Restaurant</a></li>
                                    <li><a href="reviewer.php">Our Reviewer</a></li>
                                    <li><a href="make-review.php">Make Your own Review</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
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
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(../lib/user/img/bg-img/carousel1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Make Your Own Review</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Ramen Review Area Start ##### -->
    <div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="../../controller/submit_form.php" method="POST">
				<span class="contact100-form-title">
					You know some registered Ramen? Fill here.
				</span>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Choose Ramen's name</span>
					<div>
						<select class="js-select2" name="ramenDropdown">
							<option>-</option>
							<?php
                                // ambil daftar ramen dari database
                                $sql = "select namaRamen from Ramen";
                                $result = mysqli_query($connection, $sql);

                                while($row = mysqli_fetch_array($result)){
                                    $ramen = $row['namaRamen'];
                                    echo "<option>" . $ramen . "</option>";
                                }
                            ?>
						</select>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Same Restaurant Name? Choose here</span>
                    <select class="js-select2" name="restoranDropdown">
						<option>-</option>
						<?php
                            // ambil daftar ramen dari database
                            $sql = "select namaRestoran from restoran";
                            $result = mysqli_query($connection, $sql);

                            while($row = mysqli_fetch_array($result)){
                                $restoran = $row['namaRestoran'];
                                echo "<option>" . $restoran . "</option>";
                            }
                        ?>
					</select>
                    <br>
					<span class="label-input100">Different Restaurant? insert here</span>
                    <input class="input100" type="text" name="restoranName" placeholder="Enter Restaurant Name">
                    <span class="label-input100">Enter New Restaurant City</span>
					<input class="input100" type="text" name="restoranCityInsert" placeholder="Enter Restaurant City">
                    <span class="label-input100">Different place, different Ramen's Price? insert the price</span>
					<input class="input100" type="text" name="ramenPrice" placeholder="Enter Ramen Price">
				
                    <span class="label-input100">Choose Restaurant's City</span>
					<div>
						<select class="js-select2" name="kotaDropdown">
							<option>-</option>
                            <?php
                                // ambil daftar restoran dari database
                                $sql = "select distinct namaKota 
                                            from restoran 
                                                inner join kota on kota.idKota = restoran.idKota";
                                $result = mysqli_query($connection, $sql);

                                while($row = mysqli_fetch_array($result)){
                                    $restoran = $row['namaKota'];
                                    echo "<option>" . $restoran . "</option>";
                                }
                            ?>
						</select>
						<!-- <div class="dropDownSelect2"></div> -->
					</div>
                </div>

				
                
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Ramen Picture</span>
					<button class="contact100-form-btn">
						<span>
							Enter Your Picture Here
						</span>
					</button>
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Score Restaurant Review</span>
					<button class="contact100-form-btn">
						<span>
							Enter Your Picture Here
						</span>
					</button>
				</div> -->

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Score Ramen Review</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Score ">
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Score Restaurant Review</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Your Score">
				</div> -->

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">What your review</span>
					<textarea class="input100" name="ramenReview" placeholder="Your review here..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

            <br>
            <br>
            <br>

            <form class="contact100-form validate-form" action="../../controller/submit_form1.php" method="POST">
				<span class="contact100-form-title">
					Completely New Ramen? Let us know by filling below!
				</span>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Ramen Name</span>
					<input class="input100" type="text" name="ramenName" placeholder="Enter Ramen Name">
				</div>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Ramen price</span>
					<input class="input100" type="text" name="ramenPrice" placeholder="Enter Ramen Price">
				</div>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Restaurant Name</span>
                    <input class="input100" type="text" name="restoranName" placeholder="Enter Restaurant Name">
                    <span class="label-input100">Enter New Restaurant City</span>
					<input class="input100" type="text" name="restoranCityInsert" placeholder="Enter Restaurant City">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Check if the restaurant has registered</span>
					<div>
						<select class="js-select2" name="restoranDropdown">
							<option>-</option>
                            <?php
                                // ambil daftar restoran dari database
                                $sql = "select namaRestoran from Restoran";
                                $result = mysqli_query($connection, $sql);

                                while($row = mysqli_fetch_array($result)){
                                    $restoran = $row['namaRestoran'];
                                    echo "<option>" . $restoran . "</option>";
                                }
                            ?>
						</select>
						<!-- <DIV CLASS="DROPDOWNSELECT2"></DIV> -->
                    </div>
                    <span class="label-input100">Choose Restaurant's City</span>
					<div>
						<select class="js-select2" name="kotaDropdown">
							<option>-</option>
                            <?php
                                // ambil daftar restoran dari database
                                $sql = "select distinct namaKota 
                                            from restoran 
                                                inner join kota on kota.idKota = restoran.idKota";
                                $result = mysqli_query($connection, $sql);

                                while($row = mysqli_fetch_array($result)){
                                    $restoran = $row['namaKota'];
                                    echo "<option>" . $restoran . "</option>";
                                }
                            ?>
						</select>
						<!-- <div class="dropDownSelect2"></div> -->
					</div>
                </div>
                
                <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Ramen Picture</span>
					<button class="contact100-form-btn">
						<span>
							Enter Your Picture Here
						</span>
					</button>
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Score Restaurant Review</span>
					<button class="contact100-form-btn">
						<span>
							Enter Your Picture Here
						</span>
					</button>
				</div> -->

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Pick Ramen's Rating</span>
                    <select class="js-select2" name="ramenRatingDropdown">
						<option>-</option>
                        <?php
                             // ambil daftar restoran dari database
                            $sql = "select rating 
                                        from config";
                            $result = mysqli_query($connection, $sql);

                            while($row = mysqli_fetch_array($result)){
                                $restoran = $row['namaKota'];
                                echo "<option>" . $restoran . "</option>";
                            }
                        ?>
					</select>
					<!-- <input class="input100" type="text" name="email" placeholder="Enter Your Score "> -->
				</div>

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Score Restaurant Review</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Your Score">
				</div> -->

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">What your review</span>
					<textarea class="input100" name="ramenReview" placeholder="Your review here..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
    <!-- ##### Ramen Review Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../lib/user/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../lib/user/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../lib/user/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../lib/user/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../lib/user/js/active.js"></script>
</body>

</html>