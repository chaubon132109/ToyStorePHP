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
        .content_signup{
    width: 45%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 20px;
    margin-bottom: 20px;
    }
    .content_signup-label{
        font-weight: 600;
        font-size: 20;
    }
    .label{
        display: inline-block;
        font-weight: 600;
        width: 25%;
    }
    .input{
        margin-top: 15px;
        margin-bottom  : 15px;
    }
    .input_text{
        padding: 15px;
        width: 60%;
    }
    #sex{
        width: 30%;
    }
    button.button_update{
    margin-top: 10px;
    padding: 10px;
    width: 60%;
    background-color: red;
    color: aliceblue;
    font-weight: 600;
    border: none;
    font-size: 20px;
    cursor: pointer;
}
    </style>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        include "../src/scrollToTop.php";
        $name = $_GET['name'];
        $dob = $_GET['dob'];
        $phonenumber = $_GET['phonenumber'];
        $gender = $_GET['gender'];
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
            <div class="input-container">
                <form action="../controllers/updateUserInformation_controller.php" method="post">
                    <div class="input">
                        <label class="label">Họ tên thành viên</label>
                        <input type="text" value = "<?=$name?>" class="input_text" name="name" id="name" placehoder="Nhập họ tên">
                    </div>
                    <div class="input">
                        <label class="label">Ngày sinh</label>
                        <input type="date" value = "<?=$dob?>" class="input_text" name="dob" id="dob" placehoder="Nhập ngày sinh">
                    </div>
                    <div class="input">
                        <label class="label">Số điện thoại</label>
                        <input type="text" value = "<?=$phonenumber?>" class="input_text" name="numberphone" id="numberphone" placehoder="Nhập số điện thoại">
                    </div>
                    <div class="input">
                        <label class="label">Giới tính</label>
                        <select class="input_text" name="gender" id="sex">
                            <option <?php if($gender == "Nam"){echo "selected";}else{echo "";}  ?> value="Nam">Nam</option>
                            <option <?php if($gender == "Nữ"){echo "selected";}else{echo "";} ?> value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="input">
                        <label class="label"></label>
                        <button class="button_update" type="submit">Sửa</button>
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <?php include "../src/footer.html"; ?>
</body>
</html>
