<?php
    require('db_connect.php');
    session_start();

    if(isset($_POST['submit']) ){
        $review = $_POST['angkareview'];
        $rating = $_POST['angkarating'];

        $sql1 = "delete from config";
        mysqli_query($connection, $sql1);

        $sql2 = "insert into config (minReview, rating) values ('$review', '$rating')";

        //echo "<h1>" .$review. "</h1>";
        //echo "<h1>" .$rating. "</h1>";

        mysqli_query($connection, $sql2);


        echo 
            "<script> 
                alert('Perubahan Sukses!');
                window.location.href='../view/Admin/admin.php';
            </script>";
    }
?>