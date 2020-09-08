<?php

include "../koneksi.php";

$name       = $_REQUEST['name'];
$price      = $_REQUEST['price'];
$created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO products(product_name, product_price, created_at) VALUES('{$name}', '{$price}', '{$created_at}')";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil menyimpan data product"
));

?>