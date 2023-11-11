<?php
include_once "config.php";
function getProductById($product_id) {
    global $conn; 
    $sql = "SELECT p.product_id, p.category_id, p.product_name, p.product_img, p.product_img_1, p.product_img_2, p.description, p.product_age, p.product_gender, p.price,p.discount ,p.quantity, c.category_name 
            FROM products p 
            INNER JOIN categories c ON p.category_id = c.category_id
            WHERE p.product_id = $product_id";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        return $product;
    } else {
        return null; // Sản phẩm không tồn tại
    }
}
function getCommentById($product_id) {
    global $conn; 
    $sql = "SELECT p.comment_id, c.product_name, d.name, p.comment, p.datetime 
            FROM comment_product p 
            INNER JOIN products c ON p.product_id = c.product_id
            INNER JOIN users d ON p.user_id = d.user_id
            WHERE p.product_id = $product_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $comments = array(); 
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
        return $comments;
    } else {
        return array();
    }
}

?>