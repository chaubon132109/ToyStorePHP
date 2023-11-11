<?php
    session_start();
    include "../models/cart_model.php";
    include "../models/getProduct_model.php";
    if (isset($_SESSION['user_id'])) {
        $product_id = $_POST['id'];
        $quantity = $_POST['quantity2'];
        $user_id = $_SESSION['user_id'];
        $product = getProductById($product_id);
        $price = $product['price'];
        addCart($user_id, $product_id, $quantity,$price); 
        echo "<script>alert('Thêm sản phẩm thành công vào giỏ hàng !!!');</script>";
        header("Location: ".$_SESSION['previous_page']);
    } else {
        header("Location: ../views/login.php"); 
        exit(); 
    }
?>