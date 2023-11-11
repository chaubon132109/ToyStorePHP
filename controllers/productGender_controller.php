<?php
include_once "../models/listProductGender_model.php";
$gender = $_GET['gender'];

$products = getProducts($gender);
// Include view file
include_once "../views/listProducts_gender.php";
?>