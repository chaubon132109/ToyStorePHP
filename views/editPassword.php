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
     ?>
     <div class="container">
        <div class="personal-info">
            <div class="input-container">
                <form action="../controllers/updateForgetPassword_controller.php" method="post" onsubmit="return validateForm()">
                    <input type="hidden" name="username" value = "<?=$a?>">
                    <div class="input">
                        <label class="label">Mật khẩu mới : </label>
                        <input type="password" class="input_text" name="newpassword" id="newpassword" placehoder="Nhập mật khẩu mới">
                    </div>
                    <div class="input">
                        <label class="label">Xác nhận mật khẩu: </label>
                        <input type="password" class="input_text" name="confirmpassword" id="confirmpassword" placehoder="Nhập lại mật khẩu">
                    <div class="input">
                        <label class="label"></label>
                        <button class="button_update" type="submit">Đổi mật khẩu</button>
                    </div>   
                </form>
            </div>
        </div>
        </div>
    </div>
    <?php include "../src/footer.html"; ?>
</body>

</html>
<script>
    function validateForm() {
        var newPassword = document.getElementById("newpassword").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        // Kiểm tra mật khẩu mới phải có ít nhất 1 chữ thường, 1 chữ hoa, 1 số và 1 ký tự đặc biệt
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/;
        if (!passwordRegex.test(newPassword)) {
            alert("Mật khẩu mới không hợp lệ. Mật khẩu phải có ít nhất 1 chữ thường, 1 chữ hoa, 1 số và 1 ký tự đặc biệt.");
            return false;
        }

        // Kiểm tra xác nhận mật khẩu phải giống mật khẩu mới
        if (newPassword !== confirmPassword) {
            alert("Xác nhận mật khẩu không khớp.");
            return false;
        }

        // Hiển thị thông báo xác nhận đổi mật khẩu
        var confirmation = confirm("Bạn có chắc chắn muốn đổi mật khẩu?");
        if (!confirmation) {
            return false;
        }

        // Nếu tất cả điều kiện đều hợp lệ và người dùng đồng ý, form sẽ được submit
        return true;
    }
</script>

