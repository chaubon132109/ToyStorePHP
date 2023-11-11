<?php

function getProducts() {
    include_once "config.php";

    $sql = "SELECT oi.product_id, p.product_name, p.product_img, COUNT(oi.product_id) AS total_sold,p.product_img, p.product_img_1, p.product_img_2, p.description, p.product_age, p.product_gender, p.price,p.discount ,p.quantity, c.category_name
    FROM order_items oi
    INNER JOIN products p ON oi.product_id = p.product_id
    INNER JOIN categories c ON p.category_id = c.category_id
    GROUP BY oi.product_id, p.product_name, p.product_img
    ORDER BY total_sold DESC
    LIMIT 10";

    // Thực hiện truy vấn
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