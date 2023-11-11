<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh mục</title>
    <link rel="stylesheet" href="../public/css/admin_addUser.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <div class="return">
        <a href="../controllers/admin_managementCategories_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
    </div>
    <div class="container">
        <h1>Sửa danh mục</h1>
        <form method="POST" action="../controllers/admin_updateCategory_controller.php">
            <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
            <div class="input-container">
                <div class="input">
                    <label class="label">Tên danh mục</label>
                    <input type="text" id ="name" class="input_text" name="name" value="<?php echo $category['category_name']; ?>">
                </div>
                <div class="input">
                    <label class="label"></label>
                    <button class="button" type="submit">Cập nhật</button>
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
