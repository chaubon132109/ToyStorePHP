<?php
include_once "config.php";
function deleteProduct($product_id) {
    global $conn;
    
    // Xóa các hàng liên quan trong bảng order_items
    $sqlDeleteOrderItems = "DELETE FROM order_items WHERE product_id = '$product_id'";
    mysqli_query($conn, $sqlDeleteOrderItems);

    // Xóa các hàng liên quan trong bảng comment_product
    $sqlDeleteCommentProduct = "DELETE FROM comment_product WHERE product_id = '$product_id'";
    mysqli_query($conn, $sqlDeleteCommentProduct);

    // Xóa các hàng liên quan trong bảng cart
    $sqlDeleteCart = "DELETE FROM cart WHERE product_id = '$product_id'";
    mysqli_query($conn, $sqlDeleteCart);

    // Tiếp tục xóa sản phẩm từ bảng products
    $sqlDeleteProduct = "DELETE FROM products WHERE product_id = '$product_id'";

    // Thực hiện truy vấn và kiểm tra kết quả
    if (mysqli_query($conn, $sqlDeleteProduct)) {
        return true; // Xóa sản phẩm thành công
    } else {
        return false; // Xóa sản phẩm thất bại
    }
}

?>
