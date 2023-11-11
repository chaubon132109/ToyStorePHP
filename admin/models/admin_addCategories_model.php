<?php
function addCategory($category_name) {
    include_once "config.php";

    $sql = "INSERT INTO categories (category_name) 
            VALUES ('$category_name')";

    if (mysqli_query($conn, $sql)) {
        return true; // Thêm người dùng thành công
    } else {
        return false; // Thêm người dùng thất bại
    }
}

?>
