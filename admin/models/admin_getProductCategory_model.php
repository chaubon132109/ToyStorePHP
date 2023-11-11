<?php

function getProducts($category_id) {
    include_once "config.php";

    $sql = "SELECT p.product_id, p.category_id, p.product_name, p.product_img, p.product_img_1, p.product_img_2, p.description, p.product_age, p.product_gender, p.price,p.discount ,p.quantity, c.category_name 
            FROM products p 
            INNER JOIN categories c ON p.category_id = c.category_id
            WHERE p.category_id = '$category_id'
            ORDER BY p.product_id ";

    $result = mysqli_query($conn, $sql);

    // Kiểm tra kết quả và trả về dữ liệu
    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    } else {
        return [];
    }
}

?>
