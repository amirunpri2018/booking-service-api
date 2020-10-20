<?php

include "koneksi.php";

$user_id = $_REQUEST['user_id'];

$sql = "SELECT * FROM users WHERE user_id='$user_id'";

$result = $conn->query($sql);
// menyiapkan variabel user dalam bentuk array
$user = array();
// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $user = $row;
}

if(!empty($user)) {
    echo json_encode(array(
        'message'   => "",
        'status'    => 200,
        'user'      => $user,
    ));
} else {
    echo json_encode(array(
        'message'   => "Gagal mendapatkan data user.",
        'status'    => 500,
        'user'      => ""
    ));
}