<?php 
    include "../models/cartToOrder_model.php";
    include "../models/cart_model.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        $date=date("Y-m-d H:i:s");
        $userId = $_SESSION['user_id'];
        $products = getCart($userId);
        $address = $_POST['address'];
        $note = $_POST['note'];
        $totalAmount = $_POST['total'];
        $shipping_method = $_POST['shipping_method'];
        $payment_method = $_POST['payment_method'];
        $order_id = addOrder($userId, $address, $note,$totalAmount,$shipping_method);
        savePayment($userId, $payment_method, $date, $totalAmount);
        foreach ($products as $item){
            saveOrderItems($order_id, $item['product_id'], $item['quantity'],$item['price']);
        }
        deleteCartByUserId($userId);
        header("Location: ../views/orderComplete.php");
    }else{
        header("Location: ../views/login.php");
    }
?>