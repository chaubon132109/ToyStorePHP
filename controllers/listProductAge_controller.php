<?php
include_once "../models/listProductAge_model.php";
if (isset($_GET['ageStart']) && isset($_GET['ageEnd'])) {
    $startAge = $_GET['ageStart'];
    $endAge = $_GET['ageEnd'];
    $products = getProducts($startAge, $endAge);

} else {
    $startAge = "";
    $endAge = "";
    $products = getAllProducts();
}
// Include view file
include_once "../views/listProducts_age.php";
?>