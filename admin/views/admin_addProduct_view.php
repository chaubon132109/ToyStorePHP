<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="../public/css/admin_addProduct.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        .wrapper {
            height: 100%;
            overflow-y: scroll;
            padding-right: 17px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="return">
        <a href="../controllers/admin_managementProducts_controller.php"><i class="fa-solid fa-arrow-left"></i>   QUAY LẠI</a>
    </div>
    <div class="container">
        <h1>Thêm sản phẩm</h1>
        <form method="POST" action="../controllers/admin_addProduct_controller.php">
            <div class="input-container">
                <div class="input">
                    <label class="label">Tên sản phẩm</label>
                    <input required type="text" class="input_text" name="product_name" id="product_name" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="input">
                    <label class="label">Danh mục</label>
                    <select required name="category_id" id="category_id" class="input_select">
                        <option value="" disabled selected>Chọn danh mục</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input">
                    <label class="label">Ảnh chính</label>
                    <input required type="text" class="input_text" name="product_img" id="product_img" placeholder="Nhập đường dẫn ảnh chính">
                </div>
                <div class="input">
                    <label class="label">Ảnh 1</label>
                    <input required type="text" class="input_text" name="product_img_1" id="product_img_1" placeholder="Nhập đường dẫn ảnh 1">
                </div>
                <div class="input">
                    <label class="label">Ảnh 2</label>
                    <input required type="text" class="input_text" name="product_img_2" id="product_img_2" placeholder="Nhập đường dẫn ảnh 2">
                </div>
                <div class="input">
                    <label class="label">Mô tả</label>
                    <textarea required name="description" id="description" class="input_textarea" placeholder="Nhập mô tả"></textarea>
                </div>
                <div class="input">
                    <label class="label">Độ tuổi</label>
                    <input required type="number" class="input_text" name="product_age" id="product_age" placeholder="Nhập độ tuổi">
                </div>
                <div class="input">
                    <label class="label">Giới tính</label>
                    <select required name="product_gender" id="product_gender" class="input_select">
                        <option value="" disabled selected>Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="UNISEX">UNISEX</option>
                    </select>
                </div>
                <div class="input">
                    <label class="label">Giá</label>
                    <input required type="number" class="input_text" name="price" id="price" placeholder="Nhập giá">
                </div>
                <div class="input">
                    <label class="label">Số lượng</label>
                    <input required type="number" class="input_text" name="quantity" id="quantity" placeholder="Nhập số lượng">
                </div>
                <div class="input">
                    <label class="label">Giảm giá</label>
                    <input required type="number" class="input_text" name="discount" id="discount" placeholder="Nhập giảm giá">
                </div>
                <div class="input">
                    <label class="label"></label>
                    <button class="button" type="submit">THÊM</button>
                </div> 
            </div>
        </form>
    </div>
</div>
</body>
<!-- <script>
        window.addEventListener('DOMContentLoaded', function () {
            var body = document.getElementsByTagName('body')[0];
            body.style.height = window.innerHeight + 'px';
        });
    </script> -->
</html>
