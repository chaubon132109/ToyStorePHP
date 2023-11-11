<?php
function updateUser($user_id,$name, $dateOfBirth, $phoneNumber, $gender) {
    include_once "config.php";

    $sql = "UPDATE users SET name = '$name', date_of_birth = '$dateOfBirth', phonenumber = '$phoneNumber',gender = '$gender' WHERE user_id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        return true; 
    } else {
        return false; 
    }
}

?>