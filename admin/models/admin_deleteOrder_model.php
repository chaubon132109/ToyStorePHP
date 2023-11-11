<?php
include_once "config.php";

function deleteOrder($order_id) {
    global $conn;

    $sql = "DELETE FROM order_items WHERE order_id = '$order_id'";
    mysqli_query($conn, $sql);

    // Xóa đơn hàng trong bảng orders
    $sql = "DELETE FROM orders WHERE order_id = '$order_id'";
    mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        return true; // Xóa sản phẩm thành công
    } else {
        return false; // Xóa sản phẩm thất bại
    }
}
?>