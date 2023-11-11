<?php
    session_start();
    include_once "../models/getUserInformation.php";

    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $user = getUserById($id);
        include_once "../views/user_information.php";
    } else {

        header("Location: ../views/login.php"); 
        exit();
    }
?>