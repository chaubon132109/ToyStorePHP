<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $dateOfBirth = $_POST['dob'];
    $phoneNumber = $_POST['numberphone'];
    $gender = $_POST['gender'];
    $role = 0;
    $username = $_POST['username'];
    $password = $_POST['password'];


    include_once "../models/user_signup_model.php";
    $result = addUser($name, $dateOfBirth, $phoneNumber, $gender, $role, $username, $password);

    if ($result) {
        echo "<script>alert('Đăng ký thành công!!')</script>";
        include '../views/login.php';
        exit();
    } else {
        echo "<script>alert('Đăng ký thất bại!!')</script>";
        include '../views/signup.php';
        exit();
    }
}

// Hiển thị vieư
include_once "../views/login.php";
?>