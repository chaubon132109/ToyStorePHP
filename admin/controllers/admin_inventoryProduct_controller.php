<?php

// Gọi hàm từ admin_managementProducts_model.php để lấy danh sách sản phẩm
include_once "../models/admin_inventoryProduct_model.php";
$products = getProducts();

// Hiển thị view và truyền dữ liệu
include_once "../views/admin_managementProducts_view.php";
?>
