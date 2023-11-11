<?php
    include '../models/forgetPassword_model.php';
    $numberphone = $_POST['numberphone'];
    $a = $_POST['username'];
    if(checkNumberphone($numberphone, $a)){
        include '../views/editPassword.php';
    }else{
        echo "<script>alert('Sai thông tin !!!')</script>";
        include '../views/forgetPassword.php';
    }
?>