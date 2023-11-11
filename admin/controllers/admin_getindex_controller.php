<?php
session_start();
include_once "../models/admin_getindex_model.php";

$_SESSION['index'] = getData(); 
// Truyền dữ liệu vào view
header('Location: ../views/admin_index.php');
exit();
?>
