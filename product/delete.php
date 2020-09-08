<?php

include "../koneksi.php";

$id = $_REQUEST['id'];

$sql = "DELETE FROM products WHERE product_id = '{$id}'";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil menghapus data product"
));

?>