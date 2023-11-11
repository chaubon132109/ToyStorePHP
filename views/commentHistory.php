<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem lịch sử bình luận</title>
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
            margin-bottom: 25px;
        }
        .product_name{
            padding-top: 60px;
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
            <h1>Lịch sử bình luận</h1>
            <?php if (empty($comments)): ?>
                <p>Không có bình luận.</p>
            <?php else: ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="order">
                            <label><strong><?= $count ?></strong></label>
                            <label>Thời gian : <?= $comment['datetime'] ?></label>
                    </div>
                    <?php $count++ ?>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col1"><img src="../public/img/products_img/<?= $comment['product_img'] ?>" alt=""></td>
                                <td class="col2">
                                    <div class="product_name">
                                        <?= $comment['product_name'] ?> 
                                    </div>
                                </td>
                                <td class="col3">
                                    <div class="price_discount">
                                        <?= $comment['comment'] ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>   
    </div>
    <?php include "../src/footer.html"; ?>
</body>
</html>
