<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số điện thoại</title>
    <style>
        .navbar ul{
            height: 40px !important;
            }
        h1{
            padding-top: 50px;
            text-align: center;
        }
        form.form-address{
            min-height: 200px;
            padding-top: 100px;
            text-align: center;
        }
        form.form-address input{
            padding: 10px;
            width: 300px;
        }
        .submit{
            width: 100px !important;
            background-color: #f04e47;
            border : none;
            font-weight: 600;
            font-size: 16px;
            color: #fff;
        }
        .submit:hover{
            background-color: green;
            cursor: pointer;
        }
        .input{
            margin: 0px 35%;
            display: flex;
            justify-content: space-between;
            line-height: 40px;
            margin-bottom: 20px !important;
        }
        .input input{
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <?php
        include "../src/header.html";
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
    ?>
    <h1>Nhập số điện thoại xác nhận</h1>
    <form class="form-address" action="../controllers/checkNumberphone_controller.php" method="POST">
        <div class="input">
            <label for="numberphone">Số điện thoại đăng ký:</label>
            <input type="text" id="numberphone" name="numberphone" required>
        </div>
        <div class="input">  
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <input class ="submit" type="submit" value="Gửi">
    </form>
    <?php
        include "../src/footer.html"
    ?>
</body>
</html>