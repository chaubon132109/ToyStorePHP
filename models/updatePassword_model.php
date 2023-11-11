<?php
function updatePassword($user_id, $password1) {
    include_once "config.php";
    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$hashedPassword' WHERE user_id = '$user_id'";
    if (mysqli_query($conn, $sql)) {
        return true;

    } else {
        return false; 
      
    }
}
function updateForgetPassword($a, $password1) {
    include_once "config.php";
    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$hashedPassword' WHERE username = '$a'";
    if (mysqli_query($conn, $sql)) {
        return true; 

    } else {
        return false; 
      
    }
}
?>