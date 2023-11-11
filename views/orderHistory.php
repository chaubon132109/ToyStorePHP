<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem lịch sử mua hàng</title>
    <link rel="stylesheet" href="../public/css/list_product.css">
    <style>
        h1{
            margin-bottom: 30px;
        }
        /* CSS cho menu bên trái */
        .sidebar {
            width: 400px;
            float: left;
            min-height: 500px;
        }
        
        .category-menu {
            list-style-type: none;
            padding: 0;
        }
        
        .category-menu li {
            margin-bottom: 15px;
        }
        
        .category-menu li a {
            font-size: 20px;
            color: black;
        }

        .category-menu li:hover a {
            color: #f04e47;

        }
        /* CSS cho thông tin cá nhân bên phải */
        .personal-info {
            margin-top: 50px;
            margin-left: 50px;
            width: calc(100% - 200px);
            float: left;
            padding-left: 20px;
        }
        
        .personal-info ul {
            list-style-type: none;
            padding: 0;
        }
        
        .personal-info li {
            margin-bottom: 30px;
        }
        .updateInformation a button {
            padding : 20px 40px;
            background-color: #f04e47;
            border : none;
            font-weight: 600;
            font-size: 16px;
            color: #fff;
            margin-right: 20px;
        }
        .updateInformation a button:hover {
            cursor: pointer;
        }
        .product_img{
            width: 120px;
            height: 120px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 50px;
            border-bottom: 2px solid black;

        }
        table tr {
            border-top: 1px solid #ccc;
            height: 120px;
        }
        table tr:last-child {
        }
        .col1 {
            width: 120px;
        }

        .col3 {
            width: 480px;
            text-align: right;
            padding-right: 20px;
        }
        .price_discount{
            font-weight: 600;
            color: #f04e47;
            padding-bottom: 10px;
        }
        .old_price{
            text-decoration: line-through;
            color : grey;
        }
        .col2 {
           padding-left: 20px;
            vertical-align: top;
        }
        .action a{
            /* text-decoration: none; */
            color: blue;

        }
        .action a:active{
            color: blue;
        }
        /* .navbar ul{
            height: 40px !important;
            } */
        .col1 img{
            padding-top: 25px;
            height: 120px;
        }
        .product_name{
            padding-top: 25px;
            margin-bottom: 25px;
            font-weight: 600;
        }
        label{
            margin-top: 20px;
            padding: 25px;
        }
        .order{
            display: flex;
            justify-content: space-between;
        }
        .total{
            font-size: 24px;
            color: #f04e47;
            text-align: right;
            padding-right: 20px;

        }
        .right{
            margin-right: 20px;
            font-weight: 600;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        include "../src/scrollToTop.php";
        $count = 1;
     ?>
     <div class="container">
        <div class="sidebar">
            <ul class="category-menu">
                <li style="border-bottom:none;padding:0px;">
                    <a style="margin-bottom:15px;font-size:20px;color:red;" href="../controllers/listProduct_controller.php">NGƯỜI DÙNG</a>
                </li>
                <li>
                    <a href="../controllers/userInformationController.php">Xem TTCN</a>
                </li>
                <li>
                    <a href="../controllers/orderHistory_controller.php">Xem lịch sử mua hàng</a>
                </li>
                <li>
                    <a href="../controllers/commentHistory_controller.php">Xem lịch sử bình luận</a>
                </li>
            </ul>
        </div>
        <div class="personal-info">
            <h1>Thông tin đơn hàng</h1>
            <?php if (empty($userOrders)): ?>
                <p>Không có đơn hàng.</p>
            <?php else: ?>
                <?php foreach ($userOrders as $orderDetails): ?>
                    <?php 
                    $order = $orderDetails['order'];
                    $orderItems = $orderDetails['orderItems'];
                    ?>
                    <div class="order">
                        <div class="left">
                            <label><strong><?= $count ?></strong></label>
                            <label>Thời gian : <?= $order['order_date'] ?></label>
                            <label><?= $order['delivery_address'] ?></label>
                        </div>
                        <div class="right">
                            Tình trạng đơn hàng :  <?= $order['status'] ?>
                        </div>
                    </div>
                    <?php $count++ ?>
                <?php if (empty($orderItems)): ?>
                    <p>Không có mặt hàng trong đơn hàng.</p>
                <?php else: ?>
                    <table>
                        <tbody>
                            <?php foreach ($orderItems as $item): ?>
                                <tr>
                                <td class = "col1"><a href="../controllers/getProduct_controller.php?id=<?=$item['product_id']?>"><img src="../public/img/products_img/<?= $item['product_img'] ?>" alt=""></a></td>
                                <td class = "col2">
                                    <div class="product_name">
                                        <a href="../controllers/getProduct_controller.php?id=<?=$item['product_id']?>"><?= $item['product_name'] ?></a>
                                    </div>
                                    <div class="action">
                                        Số lượng : <?= $item['quantity'] ?>
                                    </div>
                                </td>
                                <td class ="col3">
                                    <?php if ($item['discount'] != 0): ?>
                                        <div class="price_discount">
                                            <?= $item['price'] * (1 - $item['discount']) ?> VND
                                        </div>
                                        <div class="old_price">
                                            <?= $item['price'] ?> VND
                                        </div>
                                    <?php else: ?>
                                        <div class="price_discount">
                                            <?= $item['price'] ?> VND
                                        </div>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="2"></td>
                                <td class = "total"><lable style = "font-size : 14px; color : black;">Tổng tiền (Đã bao gồm phí vận chuyển) :</lable> <?=$order['total_amount']?> VND</td>
                            </tr>
                        </tbody>
                    </table>
                <?php endif; ?>

                <?php endforeach; ?>
                <?php endif; ?>

        </div>
        
    </div>
    <?php include "../src/footer.html"; ?>
</body>
</html>
