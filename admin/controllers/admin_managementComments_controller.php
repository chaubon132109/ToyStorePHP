<?php

// Gọi hàm từ admin_managementOrders_model.php để lấy danh sách đơn hàng
include_once "../models/admin_managementComments_model.php";
$comments = getComments();

// Hiển thị view và truyền dữ liệu
include_once "../views/admin_managementComments_view.php";
?>
