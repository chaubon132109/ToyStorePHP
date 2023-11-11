<?php
    include "../models/checkAddress_model.php";
    session_start();
    include "../models/cart_model.php";
    include "../models/getUserInformation.php";
    if (isset($_SESSION['user_id'])) {
        if(checkAddress($_SESSION['user_id'])){
            $items = getCart($_SESSION['user_id']);
            $user = getUserById($_SESSION['user_id']);
            include "../views/cartToOrderInformation.php";
        }else{
            include "../views/addAddressCart.php";
        }
    } else {
        header("Location: ../views/login.php"); 
        exit();
    }
?>