<?php 
    include "../models/updatePassword_model.php";
    session_start();
    if (isset($_SESSION['user_id'])) {
        $password = $_POST['newpassword'];
        $user_id = $_SESSION['user_id'];
        updatePassword($user_id,$password);
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
        header("Location: ../views/index.php");
    } else {
        header("Location: ../views/login.php"); 
        exit();
}
?>