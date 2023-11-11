<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['name'];
    include_once "../models/admin_editCategory_model.php";

    $result = updateUser($category_id, $category_name);

    if ($result) {
        $_SESSION['message'] = "Cập nhật thông tin người dùng thành công.";
        header('Location: admin_managementCategories_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Cập nhật thông tin người dùng thất bại.";
        header('Location: admin_editCategories_controller.php?id=' . $userId);
        exit();
    }
}
?>
