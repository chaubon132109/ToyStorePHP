<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
    <style>
        tr td a button{
            margin: 0px 5px !important;
        }
    </style>
</head>
<body>
    <?php include_once "admin_temp.php"; ?>
    <div class="content_left">
        <div class="label_left">Quản lý đơn hàng</div>
        <br>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>order_id</th>
                        <th>user_id</th>
                        <th>Thời gian</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['order_id']; ?></td>
                            <td><?php echo $order['user_id']; ?></td>
                            <td><?php echo $order['order_date']; ?></td>
                            <td><?php echo $order['delivery_address']; ?></td>
                            <td><?php echo $order['total_amount']; ?></td>
                            <td><?php echo $order['status']; ?></td>
                            <td>
                                <a href="../controllers/admin_getOrderItem_controller.php?id=<?php echo $order['order_id']; ?>"><button class="delete" type="submit">Xem</button></a>
                                <a href="../controllers/admin_editOrderItem_controller.php?id=<?php echo $order['order_id']; ?>"><button class="delete" type="submit">Sửa</button></a>
                                <!-- <a href="../views/admin_deleteOrder_view.php?id=<?php echo $order['order_id']; ?>"><button class="delete" type="submit">Xóa</button></a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
