<?php
    session_start();
    require('db_connect.php');

    if(isset($_POST['submit1'])){
        $id = $_SESSION['idUser'];
        $time = date("Y-m-d H:i:s");

        $regRamenDrop = $_POST['regRamenDropdown'];
        $regRestoDrop = $_POST['regRestoranDropdown'];
        $regRestoName = $_POST['regRestoranName'];
        $regRestoCity = $_POST['regRestoranCity'];
        $regRamenPrice = $_POST['regRamenPrice'];
        $regKotaDrop = $_POST['regKotaDropdown'];
        $regRamenRate = $_POST['regRamenRating'];
        $regRamenRev = $_POST['regRamenReview'];

        if(!empty($regRestoDrop)){
            if(!empty($regKotaDrop)){
                $query1 = "select distinct idRamen from ramen where namaRamen = '$regRamenDrop'";
                $ramen = mysqli_query($connection, $query1);
                $hasilRamen = "";
                while($row = mysqli_fetch_array($ramen)){
                    // echo "<h1>" . $row['idRamen'] . "</h1>";
                    $hasilRamen = $row['idRamen'];
                }

                $query2 = "select distinct idRestoran from restoran where namaRestoran = '$regRestoDrop";
                $resto = mysqli_query($connection, $query2);

                $query3 = "select distinct idKota from kota where namaKota = '$regKotaDrop'";
                $kota = mysqli_query($connection, $query3);

                $query4 = "insert into review(idReview, idUser, idRamen, review, tglReview, rating) values('', '$id', '$hasilRamen', '$regRamenRev', '$time', '$regRamenRate')";
                mysqli_query($connection, $query4);

                echo 
                    "<script> 
                        alert('Berhasil menyimpan Review Ramen, Terimakasih!');
                        window.location.href='../view/User/user.php';
                    </script>";
            }
            else{
                $cariKota = "select * from kota where namaKota = '$regRestoCity'";
                $hasilCariKota = mysqli_query($connection, $cariKota);

                if(mysql_num_rows($hasilCariKota) > 0){
                    echo 
                        "<script type='text/javascript'>
                            alert('Nama Kota sudah terdaftar');
                            window.location.href='../view/User/make-review.php';
                         </script>";
                }
                else{
                    $qInsKota = "insert into kota(idKota, idNegara, namaKota) values('', '', '$regRestoCity')";
                    mysqli_query($connection, $qInsKota); 

                    $query1 = "select distinct idRamen from ramen where namaRamen = '$regRamenDrop'";
                    $ramen = mysqli_query($connection, $query1);
                    $hasilRamen = "";
                    while($row = mysqli_fetch_array($ramen)){
                        // echo "<h1>" . $row['idRamen'] . "</h1>";
                        $hasilRamen = $row['idRamen'];
                    }

                    $query2 = "select distinct idRestoran from restoran where namaRestoran = '$regRestoCity";
                    $resto = mysqli_query($connection, $query2);

                    $query3 = "select distinct idKota from kota where namaKota = '$regKotaDrop'";
                    $kota = mysqli_query($connection, $query3);

                    $query4 = "insert into review(idReview, idUser, idRamen, review, tglReview, rating) values('', '$id', '$hasilRamen', '$regRamenRev', '$time', '$regRamenRate')";
                    mysqli_query($connection, $query4);

                    echo 
                        "<script> 
                            alert('Berhasil menyimpan Review Ramen, Terimakasih!');
                        window.location.href='../view/User/user.php';
                    </script>";
                }
            }
        }
        else{
            $query1 = "select distinct idRamen from ramen where namaRamen = '$regRamenDrop'";
                    $ramen = mysqli_query($connection, $query1);
                    $hasilRamen = "";
                    while($row = mysqli_fetch_array($ramen)){
                        // echo "<h1>" . $row['idRamen'] . "</h1>";
                        $hasilRamen = $row['idRamen'];
                    }

                    $query2 = "select distinct idRestoran from restoran where namaRestoran = '$regRestoCity";
                    $resto = mysqli_query($connection, $query2);

                    $query3 = "select distinct idKota from kota where namaKota = '$regKotaDrop'";
                    $kota = mysqli_query($connection, $query3);

                    $query4 = "insert into review(idReview, idUser, idRamen, review, tglReview, rating) values('', '$id', '$hasilRamen', '$regRamenRev', '$time', '$regRamenRate')";
                    mysqli_query($connection, $query4);

                    echo 
                        "<script> 
                            alert('Berhasil menyimpan Review Ramen, Terimakasih!');
                        window.location.href='../view/User/user.php';
                    </script>";
        }


    }
    else if(isset($_POST['submit2'])){
        $id = $_SESSION['idUser'];
        $time = date("Y-m-d H:i:s");

        $nRamenName = $_POST['nRamenName'];
        $nRamenPrice = $_POST['nRamenPrice'];
        $nRestoName = $_POST['nRestoranName'];
        $nRestoCity = $_POST['nRestoranCity'];
        $nRestoDrop = $_POST['regRestoranDropdown'];
        $nKotaDrop = $_POST['nKotaDropdown'];
        $nRamenRate = $_POST['nRamenRating'];
        $nRamenRev = $_POST['nRamenReview'];

        $insRamen = "insert into Ramen(idRamen, namaRamen, harga) values('', '$nRamenName', '$nRamenPrice')";
        mysqli_query($connection, $insRamen);

        
        $cariRamen = "select distinct idRamen from ramen where namaRamen = '$nRamenName'";
        $hasilRamen = "";
        while($row = mysqli_fetch_array($cariRamen)){
            $hasilRamen = $row['idRamen'];
        }

        $insKota = "insert into kota(idKota, idNegara, namaKota) values('', 0, '$nRestoCity')";
        mysqli_query($connection, $insKota);

        $cariKota = "select distinct idKota from Kota where namaKota = 'nRestoCity'";
        $kota = mysqli_query($connection, $cariKota);
        $hasilKota = "";
        while($row = mysqli_fetch_array($kota)){
            $hasilKota = $row['idKota'];
        }

        $insResto = "insert into Restoran(idRestoran, idKota, namaRestoran) values('', '$hasilKota', '$nRestoName')";
        $cariResto = "select distinct idRestoran from restoran where namaRestoran = '$nRestoName'";
        $hasilResto = "";
        while($row = mysqli_fetch_array($cariResto)){
            $hasilResto = $row['idRestoran'];
        }

        $insDD = "insert into dibuatdi(idRamen, idRestoran) values('$hasilRamen', '$hasilResto')"


        $query1 = "select distinct idRamen from ramen where namaRamen = '$regRamenDrop'";
                $ramen = mysqli_query($connection, $query1);
                $hasilRamen = "";
                while($row = mysqli_fetch_array($ramen)){
                    // echo "<h1>" . $row['idRamen'] . "</h1>";
                    $hasilRamen = $row['idRamen'];
                }

                $query2 = "select distinct idRestoran from restoran where namaRestoran = '$regRestoDrop";
                $resto = mysqli_query($connection, $query2);

                $query3 = "select distinct idKota from kota where namaKota = '$regKotaDrop'";
                $kota = mysqli_query($connection, $query3);

                $query4 = "insert into review(idReview, idUser, idRamen, review, tglReview, rating) values('', '$id', '$hasilRamen', '$regRamenRev', '$time', '$regRamenRate')";
                mysqli_query($connection, $query4);

                echo 
                    "<script> 
                        alert('Berhasil menyimpan Review Ramen, Terimakasih!');
                        window.location.href='../view/User/user.php';
                    </script>";
    }
?>