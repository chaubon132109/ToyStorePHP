<?php
    include "../models/checkAddress_model.php";
    session_start();
    $_SESSION['quantity'] = $_POST['quantity'];
    $_SESSION['product_id'] = $_POST['id'];
    if (isset($_SESSION['user_id'])){
        if(checkAddress($_SESSION['user_id'])){
            header("Location: buynowController.php");
        }else{
            include "../views/addAddress.php";
        }
    }else{
        header("Location: ../views/login.php" );
    }
?>