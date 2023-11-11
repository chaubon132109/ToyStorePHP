<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa người dùng</title>
    <link rel="stylesheet" href="../public/css/admin_addUser.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <div class="return">
        <a href="../controllers/admin_userManagement_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
    </div>
    <div class="container">
        <h1>Sửa người dùng</h1>
        <form method="POST" action="../controllers/admin_updateUser_controller.php" onsubmit="return validateForm();">
            <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
            <div class="input-container">
                <div class="input">
                    <label class="label">Họ tên thành viên</label>
                    <input type="text" id ="name" class="input_text" name="name" value="<?php echo $user['name']; ?>">
                </div>
                <div class="input">
                    <label class="label">Ngày sinh</label>
                    <input type="date" id ="dob" class="input_text" name="dob" value="<?php echo $user['date_of_birth']; ?>">
                </div>
                <div class="input">
                    <label class="label">Số điện thoại</label>
                    <input type="text" id ="numberphone" class="input_text" name="numberphone" value="<?php echo $user['phonenumber']; ?>">
                </div>
                <div class="input">
                    <label class="label">Giới tính</label>
                    <select class="input_text" id ="gender" name="gender">
                        <option value="Nam" <?php if ($user['gender'] === 'Nam') echo 'selected'; ?>>Nam</option>
                        <option value="Nữ" <?php if ($user['gender'] === 'Nữ') echo 'selected'; ?>>Nữ</option>
                    </select>
                </div>
                <div class="input">
                    <label class="label">Tên đăng nhập</label>
                    <input type="text" id ="username" class="input_text" name="username" value="<?php echo $user['username']; ?>">
                </div>  
                <div class="input">
                    <label class="label">Role</label>
                    <select class="input_text" id ="role" name="role">
                        <option value="1" <?php if ($user['role'] == 1) echo 'selected'; ?>>Admin</option>
                        <option value="0" <?php if ($user['role'] == 0) echo 'selected'; ?>>User</option>
                    </select>
                </div>
                <div class="input">
                    <label class="label">Mật khẩu</label>
                    <input type="password" id ="password" class="input_text"  name="password" value="<?php echo $user['password']; ?>" placeholder="Nhập mật khẩu mới">
                </div> 
                <div class="input">
                    <label class="label">Nhập lại mật khẩu</label>
                    <input type="password" id ="checkpassword" class="input_text" name="checkpassword" placeholder="Nhập lại mật khẩu mới">
                </div> 
                <div class="input">
                    <label class="label"></label>
                    <button class="button" type="submit">Cập nhật</button>
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

        // Kiểm tra số điện thoại (chỉ chứa số và không vượt quá 10 chữ số)
        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(numberphone)) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập 10 chữ số.");
            return false;
        }

        // Kiểm tra tên đăng nhập (không chứa khoảng trắng và ký tự đặc biệt)
        var usernameRegex = /^[a-zA-Z0-9]+$/;
        if (!usernameRegex.test(username)) {
            alert("Tên đăng nhập không hợp lệ. Vui lòng không sử dụng khoảng trắng và ký tự đặc biệt.");
            return false;
        }

        // Kiểm tra mật khẩu (ít nhất 8 ký tự, có ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt)
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordRegex.test(password)) {
            alert("Mật khẩu không hợp lệ. Vui lòng nhập ít nhất 8 ký tự, bao gồm ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt.");
            return false;
        }

        // Kiểm tra mật khẩu nhập lại
        if (password !== checkpassword) {
            alert("Mật khẩu nhập lại không khớp.");
            return false;
        }

        // Nếu không có lỗi, cho phép submit form
        return true;
    }
    </script>

</html>
