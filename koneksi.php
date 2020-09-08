<?php
    $username       = "root"; // user yang kita gunakan di database
    $password       = ""; // kosong
    $hostname       = "localhost"; // server local
    $dbname         = "db_booking"; // nama database yang kita mau hubungkan
    // create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);
    // check connection
    if($conn->connect_error){
        die("connection failed" .$conn->connect_error);
    }
?>