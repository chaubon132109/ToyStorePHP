<?php
    include_once "config.php";
function getProducts($gender) {
    global $conn;

    $sql = "SELECT * FROM products WHERE product_gender = '$gender'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    } else {
        return [];
    }
}

?>