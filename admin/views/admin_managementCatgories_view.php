<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>
    <div class="content_left">
        <div class="label_left">Quản lý danh mục</div>
        <div class="btn_add">
            <a href="../views/admin_addCategory_view.php"><button class="add" type="submit">Thêm</button></a>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>category_id</th>
                        <th>Tên</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $categories): ?>
                        <tr>
                            <td><?php echo $categories['category_id']; ?></td>
                            <td><?php echo $categories['category_name']; ?></td>
                            <td>
                                <a href="../controllers/admin_getProductCategory_controller.php?id=<?php echo $categories['category_id']; ?>"><button class="submit" type="submit">Xem</button></a>
                                <a href="../controllers/admin_editCategory_controller.php?id=<?php echo $categories['category_id']; ?>"><button class="update" type="submit">Sửa</button></a>
                                <a href="../views/admin_deleteCategory_view.php?id=<?php echo $categories['category_id']; ?>"><button class="delete" type="submit">Xóa</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
