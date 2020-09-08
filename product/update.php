<?php

include "../koneksi.php";

$id         = $_REQUEST['id'];
$name       = $_REQUEST['name'];
$price      = $_REQUEST['price'];
$updated_at = date('Y-m-d H:i:s');

$sql = "UPDATE products SET product_name = '{$name}', 
                        product_price = '{$price}', 
                        updated_at = '{$updated_at}'
                        WHERE product_id = '{$id}'";

$result = $conn->query($sql);

echo json_encode(array(
    'success'   => true,
    'message'   => "Berhasil mengubah data product"
));

?>