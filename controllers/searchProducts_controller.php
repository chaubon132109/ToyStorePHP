<?php

include_once "../models/searchProducts_model.php";
$searchContent = $_POST['search_content'];

// $categories = getCategories();
$products = getSearchProducts($searchContent);
// Include view file
include_once "../views/list_product.php";
?>