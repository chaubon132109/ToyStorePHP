<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    include_once "../models/admin_deleteCategory_model.php";
    $result = deleteCategory($categoryId);

    if ($result) {
        $_SESSION['message'] = "Xóa danh mục thành công.";
        echo '<script>alert('.$_SESSION['message'].');</script>';
        header('Location: admin_managementCategories_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Xóa danh mục thất bại.";
        echo '<script>alert('.$_SESSION['message'].');</script>';
        echo $_SESSION['message'];
        exit();
    }
} else {
    header('Location: admin_managementCategories_controller.php');
    exit();
}
?>
