<?php
include_once "../models/products_model.php";
include_once "../models/categories_model.php";
$categories = getCategories();
$products = getProducts();
// Include view file
include_once "../views/list_product.php";
?>

