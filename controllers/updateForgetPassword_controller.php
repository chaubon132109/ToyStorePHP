<?php 
    include "../models/updatePassword_model.php";
    session_start();
    $password1 = $_POST['newpassword'];
    $a = $_POST['username'];
    updateForgetPassword($a,$password1);
    header("Location: ../views/login.php"); 
    exit(); 

?>