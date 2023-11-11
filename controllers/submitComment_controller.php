<?php 
session_start();
$user_id = $_SESSION['user_id'];
$comment = $_POST['comment'];
$product_id = $_POST['product_id'];
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$datetime = date('Y-m-d H:i:s'); 

include_once "../models/submitComment_model.php";

if (addComment($comment, $user_id, $product_id, $datetime)) {

    header("Location: getProduct_controller.php?id=$product_id"); 
    exit(); 
} else {
    echo "Đã xảy ra lỗi khi thêm bình luận.";
}
?>
