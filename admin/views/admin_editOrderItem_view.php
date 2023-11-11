<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa đơn hàng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php 
        include_once "admin_temp.php"; 
        $i = 1;
    ?>
    <div class="content_left">
        <div class="return">
        <a style="text-decoration : none; color : blue;" href="../controllers/admin_managementOrders_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
        </div>
        <div class="label_left">Sửa trạng thái đơn hàng</div>
        <!-- Form để cập nhật thông tin đơn hàng -->
        <form method="POST" action="../controllers/admin_updateOrderItem_controller.php">
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
            
            <!-- Hiển thị danh sách mặt hàng cần cập nhật -->
            <?php foreach ($status as $a) { ?>
                <div>
                    <br>
                    <label for="">Trạng thái đơn hàng : </label>
                    <input type="text" name="status" value="<?php echo $a['status']; ?>">
                    <br><br>
                </div>
            <?php } ?>

            <!-- Nút Submit để cập nhật đơn hàng -->
            <button type="submit" name="update_order_items">Cập nhật đơn hàng</button>
        </form>

    </div>
</body>
</html>
