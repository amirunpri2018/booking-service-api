<?php

include "../koneksi.php";

$tanggal    = $_REQUEST['tanggal'];
$status     = $_REQUEST['status'];
$seat       = $_REQUEST['seat'];
$created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO jadwal(jadwal_tanggal, jadwal_status, jadwal_seat, created_at) VALUES('{$tanggal}', '{$status}', '{$seat}', '{$created_at}')";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil menyimpan data jadwal"
));

?>