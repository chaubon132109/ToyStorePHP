<?php
session_start();

// Xóa tất cả các biến session
$_SESSION = array();

// Xóa cookie session nếu có
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Hủy phiên session
session_destroy();

// Chuyển hướng đến trang đăng nhập
header("Location: ../views/admin_login.php");
exit();
?>
