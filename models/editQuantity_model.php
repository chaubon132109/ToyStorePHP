<?php
function updateQuantity($product_id,$user_id ,$quantity) {
    include_once "config.php";
    $sql = "UPDATE cart SET quantity = '$quantity' WHERE user_id = '$user_id' && product_id ='$product_id'";
    if (mysqli_query($conn, $sql)) {
        return true; 

    } else {
        return false; 
      
    }
}

?>