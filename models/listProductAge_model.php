<?php
    include_once "config.php";
function getProducts($ageStart,$ageEnd) {
    global $conn;

    $sql = "SELECT * FROM products WHERE product_age >= $ageStart AND product_age <= $ageEnd";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    } else {
        return [];
    }
}
function getAllProducts() {
    global $conn;

    $sql = "SELECT * FROM products";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    } else {
        return [];
    }
}
?>