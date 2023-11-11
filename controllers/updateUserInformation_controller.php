<?php
    include "../models/updateUserInformation_model.php";
    session_start();
    if (isset($_SESSION['user_id'])) {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $numberphone = $_POST['numberphone'];
        $gender = $_POST['gender'];
        $user_id = $_SESSION['user_id'];
        updateUser($user_id,$name, $dob, $numberphone, $gender);
        header("location: userInformationController.php");
    } else {
        header("Location: ../views/login.php"); 
        exit();
    }
?>