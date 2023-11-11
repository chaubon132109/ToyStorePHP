<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>

    <div class="content_left">
        <div class="label_left">Quản lý người dùng</div>
        <div class="btn_add">
            <a href="../views/admin_addUser_view.php"><button class="add" type="submit">Thêm</button></a>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>Họ và tên</th>
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Chức năng</th>
                        <th>Username</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['user_id']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['date_of_birth']; ?></td>
                            <td><?php echo $user['phonenumber']; ?></td>
                            <td><?php echo $user['gender']; ?></td>
                            <td><?php echo $user['address']; ?></td>
                            <td><?php if ($user['role']== 1){
                                echo "Admin";
                            }else{
                                echo "User";
                            }?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td>
                                <a href="../controllers/admin_editUser_controller.php?id=<?php echo $user['user_id']; ?>"><button class="update" type="submit">Sửa</button></a>
                                <a href="../controllers/admin_deleteUser_controller.php?id=<?php echo $user['user_id']; ?>"><button class="delete" type="submit">Xóa</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
