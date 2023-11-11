<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body>
    <div class="login_admin">
        <h1 style = "text-align : center; padding-top: 25px">
            ĐĂNG NHẬP QUẢN TRỊ
        </h1>
        <div class="content_login">
            <form action="../controllers/admin_login_controller.php" method="post">
                <div class="username-label">Tài khoản *</div>
                <input type="text" name="username" id="username" placehoder="Nhập tài khoản">
                <div class="password-label">Mật khẩu *</div>
                <input type="password" name="password" id="password" placehoder="Nhập mật khẩu">
                <button class="button_login" type="submit">ĐĂNG NHẬP</button>
            </form>
        </div>
    </div>
</body>
</html>