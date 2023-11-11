<?php
include_once "../models/admin_getOrderItem_model.php";
$orderItems = getOrderItems($_GET['id']);

include_once "../views/admin_getOrderItem_view.php";
?>
