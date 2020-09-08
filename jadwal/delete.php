<?php

include "../koneksi.php";

$id = $_REQUEST['id'];

$sql = "DELETE FROM jadwal WHERE jadwal_id = '{$id}'";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil menghapus data jadwal"
));

?>