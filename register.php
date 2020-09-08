<?php

session_start();

include "koneksi.php"; // include koneksi ke database

$full_name  = $_REQUEST['full_name']; 
$username   = $_REQUEST['username']; 
$password   = md5($_REQUEST['password']); 
$no_hp      = $_REQUEST['no_hp'];
$level      = "user";
$status     = "active";
$created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO users(username, fullname, password, status, level, no_hp, created_at) VALUES(
    '{$username}', 
    '{$full_name}', 
    '{$password}', 
    '{$status}', 
    '{$level}', 
    '{$no_hp}',
    '{$created_at}'
)";
$result = $conn->query($sql);


if($result) {
    echo json_encode(array(
        'message' => 'Berhasil melakukan register',
        'status' => 200
    ));
} else {
    echo json_encode(array(
        'message' => 'Gagal melakukan register',
        'status' => 400
    ));
}