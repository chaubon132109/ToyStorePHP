<?php
    include "config.php";
    function getUserOrders($user_id) {
        global $conn;
    
        $orderQuery = "SELECT * FROM orders WHERE user_id = $user_id";
        $orderResult = mysqli_query($conn, $orderQuery);
        $userOrders = array();
    
        while ($order = mysqli_fetch_assoc($orderResult)) {
            $order_id = $order['order_id'];
            $orderItemsQuery = "SELECT order_items.*, products.product_name, products.product_img,products.price,products.discount
                                FROM order_items
                                JOIN products ON order_items.product_id = products.product_id
                                WHERE order_items.order_id = $order_id";
            $orderItemsResult = mysqli_query($conn, $orderItemsQuery);
            $orderItems = array();
    
            while ($item = mysqli_fetch_assoc($orderItemsResult)) {
                $orderItems[] = $item;
            }
    
            $orderDetails = array(
                'order' => $order,
                'orderItems' => $orderItems
            );
    
            $userOrders[] = $orderDetails;
        }
    
        return $userOrders;
    }
?>