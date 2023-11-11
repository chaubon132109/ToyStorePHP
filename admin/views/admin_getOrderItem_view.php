<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>
    <div class="content_left">
        <div style ="margin-bottom : 20px;" class="return">
            <a style = "text-decoration : none; color : blue;" href="../controllers/admin_managementOrders_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
        </div>
        <div class="label_left">Chi tiết đơn hàng</div>
        <br>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>order_id</th>
                        <th>product_id</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalAmount = 0;
                    foreach ($orderItems as $orderItem): 
                        $subtotal = $orderItem['quantity'] * ($orderItem['price'] * (1-$orderItem['discount']));
                        $totalAmount += $subtotal;
                        $discount = $orderItem['discount']*100;
                    ?>
                        <tr>
                            <td><?php echo $orderItem['order_id']; ?></td>
                            <td><?php echo $orderItem['product_id']; ?></td>
                            <td><?php echo $orderItem['quantity']; ?></td>
                            <td><?php echo $orderItem['price']; ?></td>
                            <td><?php echo $discount."%"; ?></td>
                            <td><?php echo $subtotal; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="5" style="text-align: right;"><strong>Tổng tiền:</strong></td>
                        <td><?php echo $totalAmount; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>
