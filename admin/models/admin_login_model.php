<?php
include_once "../models/config.php";

function checkLogin($username, $password) {
    global $conn;

    $query = "SELECT username, password, role, name FROM users WHERE username = ? AND password = ?";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Lỗi truy vấn Prepared Statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password); // Gán giá trị cho tham số
    if (!$stmt->execute()) {
        die("Lỗi truy vấn: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $password = $row['password'];
        $role = $row['role'];
        $name = $row['name']; // Thêm dòng này để lấy giá trị của trường 'name'

        if ($role == 1) {
            $user = array(
                'username' => $username,
                'password' => $password,
                'role' => $role,
                'name' => $name
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
