<?php
    session_start();
    include "../models/cart_model.php";
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    deleteItemCart($user_id, $id);
    header("Location: " . $_SESSION['previous_page']);
?>