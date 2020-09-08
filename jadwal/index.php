<?php

include "../koneksi.php";

$sql = "SELECT * FROM jadwal WHERE jadwal_status = 'tersedia'";

$result = $conn->query($sql);

// menyiapkan variabel jadwal dalam bentuk array
$jadwal = array();

// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $jadwal = $row;
}

if(!empty($jadwal)) {
    echo json_encode(array(
        'success'   => true,
        'jadwal'    => $jadwal
    ));
} else {
    echo json_encode(array(
        'success' => false,
        'jadwal' => ''
    ));
}