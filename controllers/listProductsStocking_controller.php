<?php
include_once "../models/listProductsStocking_model.php";


$products = getStockingProducts();
// Include view file
include_once "../views/listProducts_stocking.php";
?>