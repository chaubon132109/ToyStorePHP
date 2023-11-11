<?php 
    include "../models/addOrderInformation_model.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        $date=date("Y-m-d H:i:s");
        $userId = $_SESSION['user_id'];
        $product_id = $_SESSION['product_id'];
        $quantity = $_SESSION['quantity'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $totalAmount = $_POST['total'];
        $shipping_method = $_POST['shipping_method'];
        $payment_method = $_POST['payment_method'];

        $order_id = addOrder($userId, $address, $note,$totalAmount,$shipping_method);
        savePayment($userId, $payment_method, $date, $totalAmount);
        saveOrderItems($order_id, $product_id, $quantity);
        // Delete the session variables
        unset($_SESSION['product_id']);
        unset($_SESSION['quantity']);
        header("Location: ../views/orderComplete.php");
    }else{
        header("Location: ../views/login.php");
    }
?>