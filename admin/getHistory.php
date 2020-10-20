<?php

include "../koneksi.php";

$sql = "SELECT * FROM booking ORDER BY booking_id DESC";

$result = $conn->query($sql);
// menyiapkan variabel user dalam bentuk array
$bookings = array();
// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $bookings[] = $row;
}

$total_data = count($bookings);

if($total_data > 0) {
    echo json_encode(array(
        'message'   => "",
        'status'    => 200,
        'bookings'  => $bookings,
    ));
} else {
    echo json_encode(array(
        'message'   => "Gagal mendapatkan history data booking.",
        'status'    => 500,
        'bookings'  => ""
    ));
}