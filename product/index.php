<?php

include "../koneksi.php";

$sql = "SELECT * FROM products ORDER BY product_id DESC";

$result = $conn->query($sql);

// menyiapkan variabel user dalam bentuk array
$products = array();

// foreach data dari database ke dalam fetch assoc
while($row = $result->fetch_assoc()){
    $products[] = $row;
}

$total_data = count($products);

if($total_data >= 0) {
    echo json_encode(array(
        'message'    => "Berhasil menampilkan data product",
        'success'    => 200,
        'product'    => $products
    ));
} else {
    echo json_encode(array(
        'message'   => "Gagal menampilkan data product",
        'success'   => 500,
        'product'   => ''
    ));
}