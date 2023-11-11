<?php
function addProduct($product_name, $category_id, $product_img, $product_img_2, $description,$product_age,$product_gender,$price,$discount,$quantity) {
    include_once "config.php";

    $sql = "INSERT INTO products (product_name, category_id, product_img, product_img_2, description, product_age, product_gender, price,discount ,quantity) 
    VALUES ('$product_name', '$category_id', '$product_img', '$product_img_2', '$description', '$product_age', '$product_gender', '$price','$discount' ,'$quantity')";

    if (mysqli_query($conn, $sql)) {
        return true; // Thêm sản phẩm thành công
    } else {
        return false; // Thêm sản phẩm thất bại
    }
}

function getCategories() {
    include_once "config.php";

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
?>
