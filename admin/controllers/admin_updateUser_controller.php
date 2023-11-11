<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['user_id'];
    $name = $_POST['name'];
    $dateOfBirth = $_POST['dob'];
    $phoneNumber = $_POST['numberphone'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once "../models/admin_editUser_model.php";

    $result = updateUser($userId, $name, $dateOfBirth, $phoneNumber, $gender, $role, $username, $password);

    if ($result) {
        $_SESSION['message'] = "Cập nhật thông tin người dùng thành công.";
        header('Location: admin_userManagement_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Cập nhật thông tin người dùng thất bại.";
        header('Location: admin_editUser_controller.php?id=' . $userId);
        exit();
    }
}
?>
