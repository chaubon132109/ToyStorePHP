<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem sản phẩm khuyến mãi</title>
    <link rel="stylesheet" href="../public/css/list_product.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        include "../src/scrollToTop.php";
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
     ?>
     <div class="container">
        <!-- <div class="sidebar">
            <ul class="category-menu">
            </ul>
        </div> -->
        <div class="product-details">
        <h5 style = "font-size : 24px; color: red; text-decoration : solid; margin-bottom : 25px">Khuyến mãi</h5>
            <ul class="product_grid">
            <?php
                // Số sản phẩm hiển thị trên mỗi trang
                $productsPerPage = 12;

                // Tổng số sản phẩm
                $totalProducts = count($products);

                // Tính số trang
                $totalPages = ceil($totalProducts / $productsPerPage);

                // Xác định trang hiện tại
                $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

                // Tính chỉ số bắt đầu và kết thúc của sản phẩm trên trang hiện tại
                $start = ($currentpage - 1) * $productsPerPage;
                $end = min($start + $productsPerPage - 1, $totalProducts - 1);

                // Lấy danh sách sản phẩm cho trang hiện tại
                $currentProducts = array_slice($products, $start, $end - $start + 1);
            ?>
                <?php foreach ($currentProducts as $product): ?>
                    <li class="item product product-item-info product-item col-lg-4 col-md-4 col-sm-4 col-xs-6 first-row-item first-sm-item first-xs-item disable_hover_effect">
                        <div class="catalog-product-item">
                            <div class="product-top">
                                <a href="../controllers/getProduct_controller.php?id=<?=$product['product_id']?>" style="padding-bottom: 100%;" class="product photo product-item-photo" tabindex="-1">
                                    <img src="../public/img/products_img/<?=$product['product_img']?>" alt="" class="img-responsive product-image-photo img-thumbnail">
                                    <div class="product-image-photo"></div>
                                </a>
                                <span class="product-label sale-label"><span>-<?php echo ($product['discount']*100)."%"?></span></span>
                            </div>
                            <div class="product details product-item-details" style = "width : 100%;">
                                <div class="products-grid-name" style="min-height: 86px;">
                                    <h5 class="name product-item-name" style = "height: 70px;">
                                        <a class="product-item-link" href="../controllers/getProduct_controller.php?id=<?=$product['product_id']?>" s><?=$product['product_name']?></a>
                                    </h5>
                                    <div>
                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="41634" data-price-box="product-id-41634">
                                            <span class="special-price">
                                                <span class="price-container price-final_price tax weee">
                                                    <span class="price-wrapper" ><span class="price" style = "font-size:14px; "><?=$product['price']*(1-$product['discount'])?>&nbsp;VNĐ</span></span>
                                                </span>
                                            </span>
                                            <span class="old-price">
                                                <span class="price-container price-final_price tax weee">
                                                    <span class="price-wrapper" ><span class="price" style = "font-size:14px; "><?=$product['price']?>&nbsp;VNĐ</span></span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="available-products">
                                            <div class="box-check-saleable saleable-no sale-id-41634">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php include "../src/footer.html"; ?>
</body>
</html>