<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>
    <div class="content_left">
        <div class="label_left">Quản lý thanh toán</div>
        <br>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>payment_id</th>
                        <th>user_id</th>
                        <th>Phương thức thanh toán</th>
                        <th>Thời gian</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $payment): ?>
                        <tr>
                            <td><?php echo $payment['id']; ?></td>
                            <td><?php echo $payment['user_id']; ?></td>
                            <td><?php 
                                if($payment['payment_method'] == "cash"){
                                    echo "Tiền mặt";
                                } elseif($payment['payment_method'] == "momo"){
                                    echo "Momo";
                                }else{
                                    echo "Ngân hàng";
                                }
                            ?></td>
                            <td><?php echo $payment['date']; ?></td>
                            <td><?php echo $payment['total']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
