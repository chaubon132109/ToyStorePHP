<?php
    session_start();
    $product_id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'];
    include_once '../models/editQuantity_model.php';
    updateQuantity($product_id,$user_id ,$quantity);
    echo '<scipt>alert("Cập nhật thành công")</scipt>';
    header('location: listCart_controller.php');
?>