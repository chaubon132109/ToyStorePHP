<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng thành công</title>
    <style>
         .navbar ul{
            height: 40px !important;
            }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .contain{
            margin-top: 100px;
            margin-bottom: 100px;
        }
        h1 {
            color: #2ecc71;
            margin-bottom: 20px;
        }
        p{
            line-height: 40px;
        }
        .contain a button{
            cursor: pointer;
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #f04e47;
            border: none;
            font-weight: 600;
        }
    </style>
</head>
<?php
        include "../src/header_logined.php";
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
        include "../src/scrollToTop.php"
    ?>
<body>
    <div class="contain">
        <h1>Đặt hàng thành công!</h1>
        <p>Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đã được ghi nhận.</p>
        <p>Chúng tôi sẽ xử lý đơn hàng của bạn và gửi thông tin cập nhật về trạng thái đơn hàng qua email.</p>
        <p>Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi.</p>
        <a href="../views/index.php"><button type="button">Quay về trang chủ</button></a>
    </div>
</body>
<?php
        include "../src/footer.html";
    ?>
</html>
