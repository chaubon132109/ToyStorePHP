<?php
    session_start();
    include "../models/cart_model.php";
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $items = getCart($user_id);
        include "../views/listCart.php";
    } else {
        header("Location: ../views/login.php"); 
        exit(); 
    }
?>