<?php
include_once "config.php";
function getProductById($product_id) {
    global $conn; 
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        return $product;
    } else {
        return null; // Sản phẩm không tồn tại
    }
}

function getAllCategories() {
    global $conn; 
    $sql = "SELECT * FROM categories";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $categories = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        return $categories;
    } else {
        return array(); // Không có danh mục nào
    }
}
function updateProduct($product_id, $product_name, $category_id, $product_img, $product_img_1, $product_img_2, $description, $product_age, $product_gender, $price,$discount ,$quantity) {
    global $conn; 

    $sql = "UPDATE products SET ";
    $sql .= "product_name = '$product_name', ";
    $sql .= "category_id = '$category_id', ";
    $sql .= "product_img = '$product_img', ";
    $sql .= "product_img_1 = '$product_img_1', ";
    $sql .= "product_img_2 = '$product_img_2', ";
    $sql .= "description = '$description', ";
    $sql .= "product_age = '$product_age', ";
    $sql .= "product_gender = '$product_gender', ";
    $sql .= "price = '$price', ";
    $sql .= "discount = '$discount', ";
    $sql .= "quantity = '$quantity' ";
    $sql .= "WHERE product_id = '$product_id'";

    // Thực hiện truy vấn và kiểm tra kết quả
    if (mysqli_query($conn, $sql)) {
        return true; // Cập nhật sản phẩm thành công
    } else {
        return false; // Cập nhật sản phẩm thất bại
    }
}
?>
