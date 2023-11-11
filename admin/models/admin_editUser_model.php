<?php
function getUserById($userId) {
    include_once "config.php";

    $sql = "SELECT * FROM users WHERE user_id = $userId";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return null; // Người dùng không tồn tại
    }
}
function updateUser($userId, $name, $dateOfBirth, $phoneNumber, $gender, $role, $us, $pw) {
    include_once "config.php";

    $sql = "UPDATE users SET name = '$name', date_of_birth = '$dateOfBirth', phonenumber = '$phoneNumber', gender = '$gender', role = '$role', username = '$us'";
    
    if (!empty($password)) {
        $sql .= ", password = '$password'";
    }
    
    $sql .= " WHERE user_id = $userId";

    if (mysqli_query($conn, $sql)) {
        return true; // Cập nhật người dùng thành công
    } else {
        return false; // Cập nhật người dùng thất bại
    }
}
?>
