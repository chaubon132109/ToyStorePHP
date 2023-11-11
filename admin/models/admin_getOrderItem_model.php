<?php
function getOrderItems($order_id) {
    include_once "config.php";

    $sql = "SELECT oi.order_item_id, oi.order_id, oi.product_id, oi.quantity, p.price,p.discount 
            FROM order_items oi 
            INNER JOIN products p ON oi.product_id = p.product_id 
            WHERE oi.order_id = '$order_id'";

    // Thực hiện truy vấn
    $result = mysqli_query($conn, $sql);

    // Kiểm tra kết quả và trả về dữ liệu
    if ($result && mysqli_num_rows($result) > 0) {
        $orderItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $orderItems;
    } else {
        return [];
    }
}
?>
