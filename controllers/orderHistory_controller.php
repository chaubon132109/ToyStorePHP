<?php 
    session_start();
    include "../models/orderHistory_model.php";
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $userOrders = getUserOrders($user_id); 
        include "../views/orderHistory.php";
    } else {
        header("Location: ../views/login.php");
        exit(); 
    }
?>
