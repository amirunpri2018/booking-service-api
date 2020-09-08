<?php

session_start();

include "koneksi.php"; // include koneksi ke database

$username = $_REQUEST['username']; // input username dari request aplikasi
$password = md5($_REQUEST['password']); // input password dari request aplikasi dan enkripsi password

// cek di table users apakah ada username dan password yang sesuai
$sql = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1";
$result = $conn->query($sql);

// menyiapkan variabel user dalam bentuk array
$users = array();

// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $users = $row;
}

if(!empty($users)) {
    $_SESSION['user_id'] = $users['user_id'];
    echo json_encode(array(
        'message' => 'Berhasil melakukan login',
        'status' => 200,
        'user' => $users
    ));
} else {
    echo json_encode(array(
        'message' => 'Gagal melakukan login',
        'status' => 500,
        'user' => array(
            'id' => 0,
            'username' => '',
            'password' => ''
        )
    ));
}