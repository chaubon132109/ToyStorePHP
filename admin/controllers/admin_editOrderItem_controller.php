<?php
include_once "../models/admin_editOrderItem_model.php";

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    $status = getOrderItems($order_id);

    if ($status) {
        include_once "../views/admin_editOrderItem_view.php";
    } else {
        echo "$order_id";
    }
} else {
    echo "$order_id";
}
?>
