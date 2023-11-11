<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = $_POST['category_name'];

    include_once "../models/admin_addCategories_model.php";
    $result = addCategory($category_name);
    if ($result) {
        $_SESSION['message'] = "Thêm thành công.";
        echo '<script>alert("Thêm thành công !!!");</script>';
        header('Location: admin_managementCategories_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Thêm thất bại.";
        echo '<script>alert("Thêm thất bại !!!");</script>';
        // header('Location: admin_addCategories_controller.php');
        echo $_SESSION['message'];
        exit();
    }
}

// Hiển thị view
include_once "../views/admin_addCategory_view.php";
?>