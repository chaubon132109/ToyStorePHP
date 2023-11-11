<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <link rel="stylesheet" href="../public/css/admin_addUser.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <div class="return">
        <a href="../controllers/admin_managementCategories_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
    </div>
    <div class="container">
        <h1>Thêm danh mục</h1>
        <form method="POST" action="../controllers/admin_addCategories_controller.php">
            <div class="input-container">
                <div class="input">
                    <label class="label">Tên danh mục</label>
                    <input required type="text" class="input_text" name="category_name" id="categories_name" placehoder="Nhập tên danh mục">
                </div>
                <div class="input">
                    <label class="label"></label>
                    <button class="button" type="submit">THÊM</button>
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
