<?php
include_once "../models/admin_userManagement_model.php";

// Kiểm tra đăng nhập
if (isset($_POST['username']) && isset($_POST['password']) !== true) {
    header("Location: ..views/admin_login.php");
    exit;
}

// Lấy danh sách người dùng
$users = getUsers();

// Include view file
include_once "../views/admin_userManagement_view.php";
?>

