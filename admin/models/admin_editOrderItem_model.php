<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "toystore";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Kết nối MySQL thất bại: " . $conn->connect_error);
    }
    function getOrderItems($order_id) {
    global $conn;

    $sql = "SELECT status
            FROM orders
            WHERE order_id = '$order_id'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $status = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $status;
    } else {
        return [];
    }
}

function updateOrderItem($status,$order_id) {
    global $conn;

    // Thực hiện truy vấn cập nhật thông tin mặt hàng
    $sql = "UPDATE orders SET status = '$status' WHERE order_id = '$order_id'";
    mysqli_query($conn, $sql);
}
?>

