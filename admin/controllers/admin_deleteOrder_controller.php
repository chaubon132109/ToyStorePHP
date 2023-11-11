<?php
include_once "../models/admin_deleteOrder_model.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['id'];
    $result = deleteOrder($order_id);

    if ($result) {
        $_SESSION['message'] = "Xóa thành công.";
        header('Location: admin_managementOrders_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Xóa thất bại.";
        echo $_SESSION['message'];
        exit();
    }
} else {
    header('Location: admin_managementOrders_controller.php');
    exit();
}
?>
