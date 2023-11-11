<?php
include_once "../models/admin_deleteProduct_model.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $product_id = $_GET["id"];
    $result = deleteProduct($product_id);

    if ($result) {
        header('Location: admin_managementProducts_controller.php');
        exit();
    } else {
        exit();
    }
}
?>
