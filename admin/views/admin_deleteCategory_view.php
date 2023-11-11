<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa danh mục</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>

    <div class="content_left">
        <div class="label_left">Xóa danh mục</div>
        <div class="message">
            <p>Bạn có chắc chắn muốn xóa danh mục này?</p>
            <div class="buttons">
                <a href="../controllers/admin_deleteCategory_controller.php?id=<?php echo $_GET['id']; ?>">
                    <button class="confirm" type="button">Xác nhận</button>
                </a>
                <a href="../controllers/admin_managementCategories_controller.php">
                    <button class="cancel" type="button">Hủy bỏ</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
