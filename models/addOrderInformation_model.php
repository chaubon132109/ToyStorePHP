<?php
    include "config.php";
    function addOrder($userId, $address, $note,$totalAmount,$shipping_method) {
        global $conn;
        $orderDate = date("Y-m-d H:i:s");
        $status = "Đang xử lý"; 

        $sql = "INSERT INTO orders (user_id, order_date, delivery_address,shipping_method ,total_amount, note, status)
                VALUES ('$userId', '$orderDate', '$address', '$shipping_method', '$totalAmount','$note', '$status')";

        if (mysqli_query($conn, $sql)) {
            return mysqli_insert_id($conn); 
        } else {
            return false;
        }
    }
    function savePayment($userId, $payment_method, $date, $total) {
        global $conn;

        $sql = "INSERT INTO payment (user_id, payment_method, date, total)
                VALUES ('$userId', '$payment_method', '$date', '$total')";

        mysqli_query($conn, $sql);
    }
    function saveOrderItems($order_id, $product_id, $quantity) {
        global $conn;
    
        $sql = "INSERT INTO order_items (order_id, product_id, quantity)
                VALUES ('$order_id', '$product_id', '$quantity')" ;
    
        mysqli_query($conn, $sql);
        $updateSql = "UPDATE products SET quantity = quantity - '$quantity' WHERE product_id = '$product_id'";
        mysqli_query($conn, $updateSql);
    }
?>