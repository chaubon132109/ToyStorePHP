<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $dateOfBirth = $_POST['dob'];
    $phoneNumber = $_POST['numberphone'];
    $gender = $_POST['gender'];
    $role = 1;
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once "../models/admin_addUser_model.php";
    $result = addUser($name, $dateOfBirth, $phoneNumber, $gender, $role, $username, $password);
    if ($result) {
        $_SESSION['message'] = "Thêm người dùng thành công.";
        echo '<script>alert("Thêm thành công !!!");</script>';
        header('Location: admin_userManagement_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Thêm người dùng thất bại.";
        echo '<script>alert("Thêm thành công !!!");</script>';
        header('Location: admin_addUser_controller.php');
        exit();
    }
}

// Hiển thị view
include_once "../views/admin_addUser_view.php";
?>
