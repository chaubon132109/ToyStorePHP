<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_img = $_POST['product_img'];
    $product_img_1 = $_POST['product_img_1'];
    $product_img_2 = $_POST['product_img_2'];
    $description = $_POST['description'];
    $product_age = $_POST['product_age'];
    $product_gender = $_POST['product_gender'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $quantity = $_POST['quantity'];

    if (!empty($product_id) && !empty($product_name) && !empty($category_id) && !empty($product_img) && !empty($product_img_1) && !empty($product_img_2) && !empty($description) && !empty($product_age) && !empty($product_gender) && !empty($price) && !empty($quantity)) {
        include_once "../models/admin_editProduct_model.php";
        $updated = updateProduct($product_id, $product_name, $category_id, $product_img, $product_img_1, $product_img_2, $description, $product_age, $product_gender, $price,$discount ,$quantity);

        if ($updated) {
            header("Location: admin_managementProducts_controller.php");
            exit();
        } else {
            $error_message = "Có lỗi xảy ra. Không thể cập nhật thông tin sản phẩm.";
        }
    } else {
        $error_message = "Vui lòng điền đầy đủ thông tin sản phẩm.";
    }
} else {
    // Người dùng truy cập trực tiếp file này mà không gửi dữ liệu POST
    header("Location: admin_managementProducts_controller.php");
    exit();
}
?>
