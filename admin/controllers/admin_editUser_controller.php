<?php
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    include_once "../models/admin_editUser_model.php";

    $user = getUserById($userId);

    if ($user) {
        include_once "../views/admin_editUser_view.php";
    } else {
        header('Location: admin_userManagement_controller.php');
        exit();
    }
} else {
    header('Location: admin_userManagement_controller.php');
    exit();
}
?>
