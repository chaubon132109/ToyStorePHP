
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ quản trị</title>
    <link rel="stylesheet" href="../public/css/admin_home.css">
</head>
<body>
<?php
include_once "admin_temp.php";

// Kiểm tra xem biến $_SESSION['index'] có tồn tại không trước khi sử dụng
if (isset($_SESSION['index'])) {
    $data = $_SESSION['index'];
}
?>


<!-- Kiểm tra xem biến $data có tồn tại không trước khi sử dụng -->
<?php if (isset($data)): ?>
<div class="content_home">
    <div class="home_label">Trang chủ quản trị</div>
    <div class="home_index">
        <!-- Kiểm tra xem các giá trị trong mảng $data có tồn tại không trước khi truy cập -->
        <?php if (!empty($data['ordersCount'])): ?>
        <div class="flex oders_index">
            <i class="left fa-solid fa-bag-shopping"></i>
            <div class="right"><strong><?php echo $data['ordersCount']; ?></strong><br>Đơn hàng</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($data['usersCount'])): ?>
        <div class="flex users_index">
            <i class="left fa-regular fa-user"></i>
            <div class="right"><strong><?php echo $data['usersCount']; ?></strong><br>Người dùng</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($data['categoriesCount'])): ?>
        <div class="flex categories_index">
            <i class="left fa-solid fa-list"></i>
            <div class="right"><strong><?php echo $data['categoriesCount']; ?></strong><br>Danh mục</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($data['productsCount'])): ?>
        <div class="flex products_index">
            <i class="left fa-brands fa-product-hunt"></i>
            <div class="right"><strong><?php echo $data['productsCount']; ?></strong><br>Sản phẩm</div>
        </div>
        <?php endif; ?>

        <?php if (!empty($data['commentsCount'])): ?>
        <div class="flex comments_index">
            <i class="left fa-regular fa-comment"></i>
            <div class="right"><strong><?php echo $data['commentsCount']; ?></strong><br>Bình luận</div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
</body>
</html>