<?php
    require('db_connect.php');
    session_start();

    $_SESSION['name'] = "";

    if(isset($_POST['top-search'])){
        // masukin value POST ke variable
        $search = $_POST['top-search'];

        // check record dari tabel
        $query = "select * 
                    from ramen
                        inner join dibuatdi on ramen.idRamen = dibuatdi.idRamen
                        inner join restoran on restoran.idRestoran = dibuatdi.idRestoran
                        inner join review on review.idRamen = ramen.idRamen
                        inner join pengguna on pengguna.idUser = review.idUser            
                    where review like '%'$search'%' or namaRestoran like '%'$search'%' or namaRamen like '%'$search'%' or nama like '%'$search'%' or username like '%'$search'%'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        /*

        if($count > 0){
            $row = mysqli_fetch_array($result);
            if($row['kategori'] == 0){
                $_SESSION['name'] = $row['nama'];
                echo 
                    "<script> 
                        alert('Welcome, Admin!');
                        window.location.href='../view/Admin/admin.php';
                    </script>";
            }
            else{
                $_SESSION['name'] = $row['nama'];
                echo 
                    "<script> 
                        alert('Welcome, User!');
                        window.location.href='../view/index.php';
                    </script>";
            }
        }
        else{
            echo 
                "<script type='text/javascript'> 
                    alert('Username / Password invalid!');
                    window.location.href='../view/User/login.php';
                </script>";
        }
        */
    }
?>