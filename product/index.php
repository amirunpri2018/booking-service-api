<?php

include "../koneksi.php";

$sql = "SELECT * FROM product ORDER BY product_id DESC";

$result = $conn->query($sql);

// menyiapkan variabel jadwal dalam bentuk array
$product = array();

// foreach data dari database ke dalam fetch asasoc
while($row = $result->fetch_assoc()){
    $product = $row;
}

if(!empty($product)) {
    echo json_encode(array(
        'success'   => true,
        'product'    => $product
    ));
} else {
    echo json_encode(array(
        'success' => false,
        'product' => ''
    ));
}