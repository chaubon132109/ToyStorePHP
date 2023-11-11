<?php
include_once "../models/admin_editOrderItem_model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];
    updateOrderItem($status,$order_id);
    header("Location: ../controllers/admin_managementOrders_controller.php");
    exit();
}
?>