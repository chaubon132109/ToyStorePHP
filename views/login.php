<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../public/css/login.css">
    <style>
        .navbar ul{
            height: 40px !important;
            }
    </style>
</head>
<body>
    <?php
        include("../src/header.html");
    ?>
    <div class="content_login">
        <div class="">
            Đăng nhập để mua hàng và sử dụng những tiện ích mới nhất từ Mykingdom
        </div>
        <div class="content_login-signup">
            Bạn chưa có tài khoản?
            <a href="../views/signup.php" class="content_login-toSignUp">ĐĂNG KÝ TÀI KHOẢN</a>
        </div>
        <form action="../controllers/user_login_controller.php" method="post">
            <div class="username-label">Tài khoản *</div>
            <input type="text" name="username" id="username" placehoder="Nhập tài khoản">
            <div class="password-label">Mật khẩu *</div>
            <input type="password" name="password" id="password" placehoder="Nhập mật khẩu">
            <div class="forget_password">
                Quên mật khẩu? Khôi phục mật khẩu <a href="../views/forgetPassword.php">Tại đây</a>
            </div>
            <button class="button_login" type="submit">ĐĂNG NHẬP</button>
        </form>
    </div>
    <?php
        include("../src/footer.html");
    ?>
</body>
</html>