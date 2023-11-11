<?php
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    include_once "../models/admin_editCategory_model.php";

    $category = getCategoryById($categoryId);

    if ($category) {
        include_once "../views/admin_editCategory_view.php";
    } else {
        header('Location: admin_managementCategories_controller.php');
        exit();
    }
} else {
    header('Location: admin_managementCategories_controller.php');
    exit();
}
?>
