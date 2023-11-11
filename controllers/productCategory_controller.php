<?php
    $category_id = $_GET['id'];
    include_once "../models/categories_model.php";
    include_once "../models/listProductCategory_model.php";

    $categories = getCategories();
    $products = getProducts($category_id);
    $categoryName = getCategoryName($category_id);
    // Include view file
    include_once "../views/listProducts_category.php";
?>