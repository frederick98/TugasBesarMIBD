<?php
    require('db_connect.php');
    session_start();

    $_SESSION['name'] = "";

    if(isset($_POST['username']) and isset($_POST['pass'])){
        // masukin value POST ke variable
        $username = $_POST['username'];
        $password = $_POST['pass'];

        // check record dari tabel
        $query = "select * from pengguna where username='$username' and password='$password'";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

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
    }
?>