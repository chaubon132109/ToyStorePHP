<?php
include_once "../models/categories_model.php";
include_once "../models/products_model.php";
$gender = "";

$products = getProducts();
// Include view file
include_once "../views/listProducts_gender.php";
?>