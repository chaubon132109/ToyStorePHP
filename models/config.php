<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "toystore";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối MySQL thất bại: " . $conn->connect_error);
}

?>