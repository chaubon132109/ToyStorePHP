<?php
include_once "../models/config.php";

function checkLogin($username, $password1) {
    global $conn;
    $query = "SELECT user_id, username, password, role, name FROM users WHERE username = ?";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Lỗi truy vấn Prepared Statement: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    if (!$stmt->execute()) {
        die("Lỗi truy vấn: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        if (password_verify($password1, $hashedPassword) || $password1 ==$row['password']) {
            $username = $row['username'];
            $password = $row['password'];
            $role = $row['role'];
            $name = $row['name']; 
            $user_id = $row['user_id'];
            $user = array(
                'username' => $username,
                'password' => $password,
                'role' => $role,
                'name' => $name,
                'user_id' => $user_id
            );
            return $user;
        } else {
            return null;
        }
    } else {
        return null;
    }
}
?>
