<?php
session_start();
include_once "../models/admin_login_model.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);

    if ($user != null) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        header('Location: admin_getindex_controller.php');
        exit();
    } else {
        echo "<script>alert('Tài khoản không chính xác!')</script>";
        include "../views/admin_login.php";
    }
} else {
    echo "<script>alert('Tài khoản không chính xác!')</script>";
    include "../views/admin_login.php";
}
?>
