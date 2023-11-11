<?php
include_once "config.php";

function getPayments()
{
    global $conn;

    $sql = "SELECT * FROM payment";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $payments = array();
        while ($row = $result->fetch_assoc()) {
            $payments[] = $row;
        }
        return $payments;
    } else {
        return array();
    }
}