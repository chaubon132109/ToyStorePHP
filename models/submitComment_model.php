<?php
function addComment($comment, $user_id, $product_id, $datetime) {
    include_once "config.php";

    $sql = "INSERT INTO comment_product (product_id, user_id, comment, datetime) 
            VALUES ('$product_id', '$user_id', '$comment', '$datetime')";

    if (mysqli_query($conn, $sql)) {
        return true; 
    } else {
        echo mysqli_error($conn);
        return false;
    }
}

?>