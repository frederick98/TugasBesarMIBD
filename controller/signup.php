<?php
    require('db_connect.php');

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');

    if(!empty($username)){
        if(!empty($password)){
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "tugasbesarmibdramen";

            // create connection
            $connection = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if(mysqli_connect_error()){
                die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
            }
            else{
                $query = "select * from pengguna where username = '$username'";
                $result = mysqli_query($connection, $query);
                if(mysqli_num_rows($result) > 0){
                    echo
                        "<script type = 'text/javascript'>
                            alert('Username has taken!');
                            window.location.href = '../view/User/signup.php';
                        </script>";
                }
                else{
                    $sql = "insert into pengguna (idUser, username, password, nama, email, kategori) values ('', '$username', '$password', '$name', '$email', '1')";
                    if($connection->query($sql)){
                        echo    
                            "<script type = 'text/javascript'>
                                alert('Successfully registered, please login!');
                                window.location.href = '../view/User/login.php';
                            </script>";
                    }
                    else{
                        echo 
                            "Error: " . $query . "" . $connection->error;
                    }
                    $connection->close();
                }
            }
        }
        else{
            echo
                "<script type = 'text/javascript'>
                    alert('Password should not be empty!');
                    window.location.href = '../view/User/signup.php';
                </script>";
            die();
        }
    }
    else{
        echo
            "<script type = 'text/javascript'>
                alert('Username should not be empty!');
                window.location.href = '../view/User/signup.php';
            </script>";
        die();
    }
?>