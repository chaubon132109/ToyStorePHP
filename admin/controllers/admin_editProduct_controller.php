<?php
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    include_once "../models/admin_editProduct_model.php";

    $product = getProductById($productId);
    $categories = getAllCategories();
    if ($product) {
        include_once "../views/admin_editProduct_view.php";
    } else {
        header('Location: admin_managementProducts_controller.php');
        exit();
    }
} else {
    header('Location: admin_managementProducts_controller.php');
    exit();
}
?>