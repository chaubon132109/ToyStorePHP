<?php
    include "config.php";
    function addCart($user_id, $product_id, $quantity,$price) {
        global $conn;

        $sql = "INSERT INTO cart (user_id, product_id, quantity,price)
                VALUES ('$user_id', '$product_id', '$quantity', '$price')";

        if (mysqli_query($conn, $sql)) {
            return true; 
        } else {
            return false;
        }
    }
    function getCart($user_id) {
        global $conn;
    
        $sql = "SELECT p.product_img,p.product_name, o.quantity,o.price,p.discount, o.product_id,p.quantity as con
                FROM cart o
                INNER JOIN products p ON o.product_id = p.product_id
                WHERE user_id = $user_id";
    
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
    
    function deleteItemCart($user_id, $product_id) {
        global $conn;
    
        $sql = "DELETE FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
    
        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>