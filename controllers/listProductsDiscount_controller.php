<?php
include_once "../models/listProductsDiscount_model.php";

$products = getDiscountProducts();
// Include view file
include_once "../views/listProducts_discount.php";
?>
