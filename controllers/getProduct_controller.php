<?php
include_once "../models/getProduct_model.php";
$product_id = $_GET['id'];
$product = getProductById($product_id);
$comments = getCommentById($product_id);
// Include view file
include_once "../views/product_infor.php";
?>
