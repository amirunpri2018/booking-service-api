<?php

include "koneksi.php";

$tanggal = $_POST['tanggal'];

$sql = "SELECT * FROM booking WHERE booking_jadwal='$tanggal'";

$result = $conn->query($sql);
// menyiapkan variabel user dalam bentuk array
$bookings = array();
// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $bookings[] = $row;
}
$total_data = count($bookings);
if($total_data >= 5) {
    echo json_encode(array(
        'message'    => "Antrian hari ini sudah penuh, silahkan pilih hari lainnya",
        'status'    => 404,
    ));
} else {
    echo json_encode(array(
        'message'   => "Tanggal tersedia. Silahkan booking sekarang.",
        'status'   => 200
    ));
}