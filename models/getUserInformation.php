<?php
include_once "config.php";
function getUserById($user_id) {
    global $conn; 
    $sql = "SELECT * FROM users
            WHERE user_id = $user_id";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return null; 
    }
}