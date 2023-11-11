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