<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['username']) || $_SESSION['role'] == 0) {
    // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    header('Location: admin_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin_index.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <header>
        <SPAN>TOYSTROE <strong> ADMIN</strong></SPAN>
        <span>Xin chào, <?php echo $_SESSION['name']; ?></span>
    </header>

    <div class="menu">
        <ul>
            <li><img class="logo" src="../public/img/logo.png" alt=""></li>
            <li><a href="../controllers/admin_getindex_controller.php"><i class="icon-admin fa-solid fa-house"></i>Trang chủ quản trị</a></li>
            <li><a href="../controllers/admin_userManagement_controller.php"><i class="icon-admin fa-regular fa-user"></i>Quản lý người dùng</a></li>
            <li><a href="../controllers/admin_managementCategories_controller.php"><i class="icon-admin fa-solid fa-list"></i>Quản lý danh mục</a></li>
            <li><a href="../controllers/admin_managementProducts_controller.php"><i class="icon-admin fa-brands fa-product-hunt"></i>Quản lý sản phẩm</a></li>
            <li><a href="../controllers/admin_managementComments_controller.php"><i class="icon-admin fa-regular fa-comment"></i>Quản lý bình luận</a></li>
            <li><a href="../controllers/admin_managementOrders_controller.php"><i class="icon-admin fa-solid fa-cart-shopping"></i>Quản lý đơn hàng</a></li>
            <li><a href="../controllers/admin_managementPayments_controller.php"><i class="icon-admin fa-solid fa-money-bill"></i>Quản lý thanh toán</a></li>
            <li><a href="../controllers/admin_logout_controller.php"><i class="icon-admin fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a></li>
        </ul>
    </div>
</body>
</html>