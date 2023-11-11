<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm admin</title>
    <link rel="stylesheet" href="../public/css/admin_addUser.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">

</head>
<body>
    <div class="return">
        <a href="../controllers/admin_userManagement_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
    </div>
    <div class="container">
        <h1>Thêm người dùng</h1>
        <form method="POST" action="../controllers/admin_addUser_controller.php" onsubmit="return validateForm();">
        <div class="input-container">
                <div class="input">
                    <label class="label">Họ tên thành viên</label>
                    <input  type="text" class="input_text" name="name" id="name" placehoder="Nhập họ tên">
                    <div id="nameError" class="error"></div>
                </div>
                <div class="input">
                    <label class="label">Ngày sinh</label>
                    <input  type="date" class="input_text" name="dob" id="dob" placehoder="Nhập ngày sinh">
                    <div id="dobError" class="error"></div>
                </div>
                <div class="input">
                    <label class="label">Số điện thoại</label>
                    <input  type="text" class="input_text" name="numberphone" id="numberphone" placehoder="Nhập số điện thoại">
                    <div id="numberphoneError" class="error"></div>

                </div>
                <div class="input">
                    <label class="label">Giới tính</label>
                    <select class="input_text" name="gender" id="gender">
                        <option selected value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="input">
                    <label class="label">Tên đăng nhập</label>
                    <input  type="text" class="input_text" name="username" id="username" placehoder="Nhập tên đăng nhập">
                    <div id="usernameError" class="error"></div>

                </div>  
                <!-- <div class="input">
                    <label class="label">Role</label>
                    <select class="input_text" name="role" id="role">
                        <option value="1">Admin</option>
                        <option selected value="0">User</option>
                    </select>
                </div> -->
                <div class="input">
                    <label class="label">Mật khẩu</label>
                    <input  type="password" class="input_text" name="password" id="password" placehoder="Nhập mật khẩu">
                      <div id="passwordError" class="error"></div>

                </div> 
                <div class="input">
                    <label class="label">Nhập lại mật khẩu</label>
                    <input  type="password" class="input_text" name="checkpassword" id="checkpassword" placehoder="Nhập lại mật khẩu">
                      <div id="checkpasswordError" class="error"></div>
                </div> 
                <div class="input">
                    <label class="label"></label>
                    <button class="button" type="submit">THÊM</button>
                </div> 
                
            </div>
        </form>
    </div>
</body>
<script>
    function validateForm() {
        // Lấy giá trị từ các trường input
        var name = document.getElementById("name").value;
        var dob = document.getElementById("dob").value;
        var numberphone = document.getElementById("numberphone").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var checkpassword = document.getElementById("checkpassword").value;

        var nameError = document.getElementById("nameError");
        var dobError = document.getElementById("dobError");
        var numberphoneError = document.getElementById("numberphoneError");
        var usernameError = document.getElementById("usernameError");
        var passwordError = document.getElementById("passwordError");
        var checkpasswordError = document.getElementById("checkpasswordError");
        // Xóa thông báo cũ
        nameError.innerHTML = "";
        dobError.innerHTML = "";
        numberphoneError.innerHTML = "";
        usernameError.innerHTML = "";
        passwordError.innerHTML = "";
        checkpasswordError.innerHTML = "";
        // Kiểm tra tên
        if (name === "") {
            nameError.innerHTML = "Vui lòng nhập họ tên";
            return false;
        }
        
        // Kiểm tra ngày sinh
        if (dob === "") {
            dobError.innerHTML = "Vui lòng nhập ngày sinh";
            return false;
        }
        
        // Kiểm tra số điện thoại
        if (numberphone === "") {
            numberphoneError.innerHTML = "Vui lòng nhập số điện thoại";
            return false;
        }
        if (numberphone.length !== 10 || isNaN(numberphone)) {
            numberphoneError.innerHTML = "Số điện thoại không hợp lệ";
            return false;
        }
        
        // Kiểm tra tên đăng nhập
        if (username === "") {
            usernameError.innerHTML = "Vui lòng nhập tên đăng nhập";
            return false;
        }
        if (username.includes(" ")) {
            usernameError.innerHTML = "Tên đăng nhập không được chứa khoảng trống";
            return false;
        }
        
        // Kiểm tra mật khẩu
        if (password === "") {
            passwordError.innerHTML = "Vui lòng nhập mật khẩu";
            return false;
        }
        // Kiểm tra mật khẩu phải có ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordRegex.test(password)) {
            passwordError.innerHTML = "Mật khẩu phải có ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt";
            return false;
        }
        
        // Kiểm tra mật khẩu nhập lại
        if (checkpassword === "") {
            checkpasswordError.innerHTML = "Vui lòng nhập lại mật khẩu";
            return false;
        }
        if (checkpassword !== password) {
            checkpasswordError.innerHTML = "Mật khẩu nhập lại không khớp";
            return false;
        }
        
        return true; // Form hợp lệ, có thể submit
        }
    </script>
</html>
