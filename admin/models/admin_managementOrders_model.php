<?php

function getOrders() {
    include_once "config.php";

    $sql = "SELECT o.order_id, o.user_id, o.order_date,o.delivery_address ,SUM(oi.quantity * (p.price*(1-p.discount))) AS total_amount, status
            FROM orders o
            INNER JOIN order_items oi ON o.order_id = oi.order_id
            INNER JOIN products p ON oi.product_id = p.product_id
            GROUP BY o.order_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $orders;
        } else {
            return [];
        }
    } else {
        echo "Lỗi truy vấn: " . mysqli_error($conn);
        return [];
    }
}


?>
