<?php
function getCategoryById($categoryId) {
    include_once "config.php";

    $sql = "SELECT * FROM categories WHERE category_id = '$categoryId'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return null; // Người dùng không tồn tại
    }
}
function updateUser($categoryId, $category_name) {
    include_once "config.php";

    $sql = "UPDATE categories SET category_name = '$category_name'";
    $sql .= " WHERE category_id = $categoryId";

    if (mysqli_query($conn, $sql)) {
        return true; // Cập nhật người dùng thành công
    } else {
        return false; // Cập nhật người dùng thất bại
    }
}
?>
