<?php
function addUser($name, $dateOfBirth, $phoneNumber, $gender, $role, $un, $pw) {

    include_once "config.php";
    $hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, date_of_birth, phonenumber, gender, role, username, password) 
            VALUES ('$name', '$dateOfBirth', '$phoneNumber', '$gender', '$role', '$un', '$hashedPassword')";


    if (mysqli_query($conn, $sql)) {
        return true; // Thêm người dùng thành công
    } else {
        return false; // Thêm người dùng thất bại
    }
}


?>