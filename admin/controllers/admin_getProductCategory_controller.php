<?php
    include "../models/admin_getProductCategory_model.php";
    $category_id = $_GET['id'];
    $products = getProducts($category_id);
    // Hiển thị view và truyền dữ liệu
    include_once "../views/admin_managementProducts_view.php";
?>