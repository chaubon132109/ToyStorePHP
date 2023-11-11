<?php
session_start();
$previous_page = $_SESSION['previous_page'];


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
if ($previous_page != null) {
    header("Location: " . $previous_page);
    exit();
} else {
    header("Location: ../views/index.php");
    exit();
}
?>
