<?php
include_once "config.php";

function deleteUser($userId) {
    global $conn;
    echo $userId;
    // Xóa dữ liệu từ bảng comment_product có liên quan đến user_id
    $sql = "DELETE FROM comment_product WHERE user_id = '$userId'";
    mysqli_query($conn, $sql);

    // Xóa mặt hàng trong bảng order_items có order_id liên quan
    $sql = "DELETE FROM order_items WHERE order_id IN (SELECT order_id FROM orders WHERE user_id = '$userId')";
    mysqli_query($conn, $sql);
    
    // Xóa dữ liệu từ bảng orders có liên quan đến user_id
    $sql = "DELETE FROM orders WHERE user_id = '$userId'";
    mysqli_query($conn, $sql);
    // Xóa dữ liệu từ bảng cart có liên quan đến user_id
    $sql = "DELETE FROM cart WHERE user_id = '$userId'";
    mysqli_query($conn, $sql);
    // Xóa dữ liệu từ bảng payment có liên quan đến user_id
    $sql = "DELETE FROM payment WHERE user_id = '$userId'";
    mysqli_query($conn, $sql);
    // Xóa người dùng từ bảng users
    $sql = "DELETE FROM users WHERE user_id = '$userId'";
    mysqli_query($conn, $sql);

    // Kiểm tra và trả về kết quả
    if (mysqli_affected_rows($conn) > 0) {
        return true; // Xóa người dùng thành công
    } else {
        return false; // Xóa người dùng thất bại
    }
}
?>
