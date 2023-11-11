<?php 
include "admin_deleteProduct_model.php";
function deleteCategory($categoryId) {
    include_once "config.php";
    global $conn;
    $sqlGetProducts = "SELECT product_id FROM products WHERE category_id = '$categoryId'";
    $result = mysqli_query($conn, $sqlGetProducts);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $productId = $row['product_id'];
            deleteProduct($productId);
        }

        $sqlDeleteCategory = "DELETE FROM categories WHERE category_id = '$categoryId'";

        if (mysqli_query($conn, $sqlDeleteCategory)) {
            return true; // Xóa danh mục thành công
        } else {
            return false; // Xóa danh mục thất bại
        }
    } else {
        return false; // Không thể lấy thông tin sản phẩm
    }
}

?>
