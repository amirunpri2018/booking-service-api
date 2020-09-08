<?php

include "../koneksi.php";

$id         = $_REQUEST['id'];
$tanggal    = $_REQUEST['tanggal'];
$status     = $_REQUEST['status'];
$seat       = $_REQUEST['seat'];
$updated_at = date('Y-m-d H:i:s');

$sql = "UPDATE jadwal SET jadwal_tanggal = '{$tanggal}', 
                        jadwal_status = '{$status}', 
                        jadwal_seat = '{$seat}',
                        updated_at = '{$updated_at}'
                        WHERE jadwal_id = '{$id}'";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil mengubah data jadwal"
));

?>