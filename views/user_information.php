<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
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
    </style>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        include "../src/scrollToTop.php"
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
            <h1>Thông Tin Cá Nhân</h1>
            <ul>
                <li>
                    <strong>Họ và tên:</strong> <?=$user['name'] ?>
                </li>
                <li>
                    <strong>Ngày sinh:</strong> <?=$user['date_of_birth'] ?>
                </li>
                <li>
                    <strong>Giới tính:</strong> <?=$user['gender'] ?>
                </li>
                <li>
                    <strong>Số điện thoại:</strong> <?=$user['phonenumber'] ?>
                </li>
                <li>
                    <strong>Địa chỉ giao hàng:</strong> <?php if(empty($user['address'])) {
                        echo "Chưa nhập thông tin";
                    } else {
                        echo $user['address'];
                    } ?>
                </li>
                <li>
                    <strong>Username:</strong> <?=$user['username'] ?>
                </li>
            </ul>
            <div class="updateInformation">
                <a href="../views/updateUserInformationForm.php?name=<?=$user['name'] ?>&dob=<?=$user['date_of_birth'] ?>&phonenumber=<?=$user['phonenumber'] ?>&gender=<?=$user['gender'] ?>"><button type="submit">Sửa thông tin cá nhân</button></a>
                <a href="../views/updateUserPasswordForm.php"><button type="submit">Đổi mật khẩu</button></a>
            </div>
        </div> 
    </div>
    <?php include "../src/footer.html"; ?>
</body>
</html>
