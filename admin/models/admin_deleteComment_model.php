<?php
include_once "config.php";

function deleteComment($comment_id) {
    global $conn;

    $sql = "DELETE FROM comment_product WHERE comment_id = '$comment_id'";


    mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        return true; // Xóa sản phẩm thành công
    } else {
        return false; // Xóa sản phẩm thất bại
    }
}
?>