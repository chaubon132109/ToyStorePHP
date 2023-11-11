<?php
    include "../models/checkAddress_model.php";
    session_start();
    if (isset($_SESSION['user_id'])) {
        $address = $_POST['address'];
        addAddress($_SESSION['user_id'],$address);
        header("Location: cartToOrder_controller.php");
    } else {
        header("Location: ../views/login.php");
        exit();
    }
?>