<?php
include_once "config.php";

function getCategories()
{
    global $conn;

    $sql = "SELECT * FROM categories";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $catgeories = array();
        while ($row = $result->fetch_assoc()) {
            $catgeories[] = $row;
        }
        return $catgeories;
    } else {
        return array();
    }
}
function getCategoryName($category_id)
{
    global $conn;


    $sql = "SELECT category_name FROM categories WHERE category_id = $category_id LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['category_name'];
    } else {
        return null;
    }
}
