<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <div class="header">
    <div class="header_top">
        <div class="header_top--hotline">
            <i class="fa-solid fa-phone" style="color: #ffffff; line-height: 25px;"></i>
            <div class="phone_number">HOTLINE: 19001208</div>
        </div>
        <div class="header_top--store">
            <i class="fa-solid fa-location-pin" style="color: #ffffff; line-height: 25px;"></i>
            <div class="store_location">Hệ thống có 30 của hàng trên cả nước</div>
        </div>
    </div>
    <div class="header_mid">
        <a href="../views/homepage.php"><img class="header_mid_logo" src="../public/img/logo.png" alt=""></a>
        <div class="header_mid--search-bar">
            <form action="../controllers/searchProducts_controller.php" method="post">
                <input class="search_input" type="text" name="search_content" id="" placeholder="Tìm kiếm sản phẩm..">
                <button class="search_submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="header_account">
            <div class="login">
                <a href="../controllers/listCart_controller.php"><i class="fa-solid fa-cart-shopping"></i>
                    GIỎ HÀNG</a>
            </div>
            <div class="signup user">
                <a href="../controllers/userInformationController.php"><i class="fa-solid fa-user"></i>
                    NGƯỜI DÙNG</a>
                <ul class="submenu">
                    <li><a href="../controllers/userInformationController.php">Xem TTCN</a></li>
                    <li><a href="../controllers/orderHistory_controller.php">Xem đơn hàng</a></li>
                    <li><a href="../controllers/user_logout_controller.php">Đăng xuẩt</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <nav class="navbar">
            <ul >
                <li><a href="../views/homepage.php">TRANG CHỦ</a></li>
                <li><a href="../controllers/listProduct_controller.php">SẢN PHẨM</a></li>
                <li class="dropdown">
                    <a href="../controllers/listProductGender_controller.php">GIỚI TÍNH</a>
                    <div class="dropdown-content">
                        <a href="../controllers/productGender_controller.php?gender=Bé trai">Bé trai</a>
                        <a href="../controllers/productGender_controller.php?gender=Bé gái">Bé gái</a>
                        <a href="../controllers/productGender_controller.php?gender=Unisex">Unisex</a>
                    </div>
                </li>
                <li class="dropdown">
                <a href="../controllers/listProductAge_controller.php">ĐỘ TUỔI</a> 
                    <div class="dropdown-content">
                        <a href="../controllers/listProductAge_controller.php?ageStart=0&ageEnd=1">0-12 tháng</a>
                        <a href="../controllers/listProductAge_controller.php?ageStart=1&ageEnd=3">1-3 tuổi</a>
                        <a href="../controllers/listProductAge_controller.php?ageStart=3&ageEnd=6">3-6 tuổi</a>
                        <a href="../controllers/listProductAge_controller.php?ageStart=6&ageEnd=12">6-12 tuổi</a>
                        <a href="../controllers/listProductAge_controller.php?ageStart=12&ageEnd=40">Trên 12 tuổi</a>
                    </div>
                </li>
                <li><a href="../controllers/listProductsDiscount_controller.php">KHUYẾN MÃI</a></li>
                <li><a href="../controllers/listProductsStocking_controller.php">CÒN HÀNG</a></li>

            </ul>
        </nav>

    </div>
    </div>
</body>
</html>