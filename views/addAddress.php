<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm địa chỉ giao hàng</title>
    <style>
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
    </style>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
        include "../src/scrollToTop.php"
    ?>
    <h1>Thêm địa chỉ giao hàng</h1>
    <form class="form-address" action="addAddress_controller.php" method="POST">
        <label for="address">Địa chỉ giao hàng:</label>
        <input type="text" id="address" name="address" required>
        <input class ="submit" type="submit" value="Gửi">
    </form>
    <?php
        include "../src/footer.html"
    ?>
</body>
</html>