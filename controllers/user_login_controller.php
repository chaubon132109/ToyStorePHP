<?php
session_start();
include_once "../models/user_login_model.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);
    if ($user != null) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        if (isset($_SESSION['previous_page'])) {
            $previous_page = $_SESSION['previous_page'];
            unset($_SESSION['previous_page']); 
            header("Location: " . $previous_page);
            exit();
        } else {
            header("Location: ../views/index.php");
            exit();
        }
        exit();
    } else {
        echo "<script>alert('Tài khoản không chính xác!')</script>";
        include '../views/login.php';
    }
} else {
    echo "<script>alert('Tài khoản không chính xác!')</script>";
    include '../views/login.php';
}
?>
