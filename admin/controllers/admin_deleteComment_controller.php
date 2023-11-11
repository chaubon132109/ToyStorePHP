<?php
include_once "../models/admin_deleteComment_model.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $comment_id = $_GET['id'];
    $result = deleteComment($comment_id);

    if ($result) {
        $_SESSION['message'] = "Xóa thành công.";
        header('Location: admin_managementComments_controller.php');
        exit();
    } else {
        $_SESSION['message'] = "Xóa thất bại.";
        echo $_SESSION['message'];
        exit();
    }
} else {
    header('Location: admin_managementComments_controller.php');
    exit();
}
?>
