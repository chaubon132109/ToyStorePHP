<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    include_once "../models/admin_addProduct_model.php";
    $result = addProduct($product_name, $category_id, $product_img, $product_img_2, $description,$product_age,$product_gender,$price,$discount,$quantity);
    
    if ($result) {
        $_SESSION['message'] = "Thêm sản phẩm thành công.";
        echo '<script>alert("Thêm thành công !!!");</script>';
        header('Location: admin_managementProducts_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Thêm sản phẩm thất bại.";
        echo '<script>alert("Thêm thành công !!!");</script>';
        header('Location: admin_addProduct_controller.php');
        exit();
    }
}

include_once "../models/admin_addProduct_model.php";
$categories = getCategories();
// Hiển thị view
include_once "../views/admin_addProduct_view.php";
?>
