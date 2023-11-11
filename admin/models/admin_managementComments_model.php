<?php
include_once "config.php";

function getComments()
{
    global $conn;

    $sql = "SELECT * FROM comment_product";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $comments = array();
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
        return $comments;
    } else {
        return array();
    }
}