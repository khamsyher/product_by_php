<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "onlineshop_c";

    $conn_db = mysqli_connect($server, $user, $password, $database);
    mysqli_query($conn_db, "SET CHARACTER SET 'utf8'");
    mysqli_query($conn_db, "SET SESSION collation_connection = 'utf8_unicode_ci'");
    if($conn_db->connect_error){
        die("connect error: ". $conn_db->connect_error);
    }else{
        // echo "Connect Database Success";
    }

?>