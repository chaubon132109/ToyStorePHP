<?php
include_once "../models/admin_managementPayments_model.php";
$payments = getPayments();
include_once "../views/admin_managementPayments_view.php";
?>
