<?php
    session_start();
    include "../models/getProduct_model.php";
    include "../models/getUserInformation.php";
    if (isset($_SESSION['user_id'])) {
        $product = getProductById($_SESSION['product_id']);
        $user = getUserById($_SESSION['user_id']);
        $quantity = $_SESSION['quantity'];
        include "../views/orderInformation.php";
    } else {
        header("Location: ../views/login.php");
        exit();
    }
?>