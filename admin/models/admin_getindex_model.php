<?php
include_once "../models/config.php";

function getData()
{
    $data = array();

    // Lấy số lượng bản ghi từ các bảng
    $data['ordersCount'] = getTableCount("orders");
    $data['usersCount'] = getTableCount("users");
    $data['categoriesCount'] = getTableCount("categories");
    $data['productsCount'] = getTableCount("products");
    $data['commentsCount'] = getTableCount("comment_product");

    return $data;
}

function getTableCount($table, $condition = "")
{
    global $conn;
    $query = "SELECT COUNT(*) as count FROM " . $table;
    if (!empty($condition)) {
        $query .= " WHERE " . $condition;
    }
    $result = $conn->query($query);
    if ($result) {
        $row = $result->fetch_assoc();
        return $row['count'];
    } else {
        return 0;
    }
}
?>
