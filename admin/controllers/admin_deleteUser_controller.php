<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];
    include_once "../models/admin_deleteUser_model.php";
    $result = deleteUser($userId);

    if ($result) {
        $_SESSION['message'] = "Xóa người dùng thành công.";
        header('Location: admin_userManagement_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Xóa người dùng thất bại.";
        header('Location: admin_userManagement_controller.php');
        exit();
    }
} else {
    header('Location: admin_userManagement_controller.php');
    echo "1";
    exit();
}
?>
