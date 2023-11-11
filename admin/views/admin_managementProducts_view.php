<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="../public/css/admin_border_product.css">
    <style>
        tr td a button{
            margin: 0px 10px !important;
        }
    </style>
</head>
<body>
    <?php include_once "admin_temp.php"; ?>

    <div class="content_left">
        <div class="label_left">Quản lý sản phẩm</div>
        <div class="btn_add">
            <a href="../controllers/admin_inventoryProduct_controller.php"><button class="add" type="submit">Hàng tồn</button></a>
            <a href="../controllers/admin_bestSellerProduct_controller.php"><button class="add" type="submit">Hàng bán chạy</button></a>
            <a href="../controllers/admin_addProduct_controller.php"><button class="add" type="submit">Thêm</button></a>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>product_id</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Độ tuổi</th>
                        <th>Giới tính</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $itemsPerPage = 10; // Số sản phẩm muốn hiển thị trên mỗi trang
                    $totalItems = count($products); // Tổng số sản phẩm
                    $totalPages = ceil($totalItems / $itemsPerPage); // Số trang
                    $currentpage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang 1
                    $start = ($currentpage - 1) * $itemsPerPage; // Vị trí bắt đầu
                    $end = $start + $itemsPerPage - 1; // Vị trí kết thúc
                    if ($end >= $totalItems) {
                        $end = $totalItems - 1;
                    }

                    for ($i = $start; $i <= $end; $i++) {
                        $product = $products[$i];
                        ?>
                        <tr>
                            <td><?php echo $product['product_id']; ?></td>
                            <td><?php echo $product['product_name']; ?></td>
                            <td><?php echo $product['category_name']; ?></td>
                            <td><?php echo $product['product_img']."<br>".$product['product_img_1']."<br>".$product['product_img_2']; ?></td>
                            <td>
                                <div class="description">
                                    <div class="excerpt">
                                        <?php
                                        $description = $product['description'];
                                        $excerpt = substr($description, 0, 50); // Độ dài phần tóm tắt
                                        echo $excerpt;
                                        ?>
                                    </div>
                                    <div class="full-description" style="display: none;">
                                        <?php echo $description; ?>
                                    </div>
                                    <a href="#" class="read-more">Xem thêm</a>
                                </div>
                            </td>
                            <td><?php echo $product['product_age']; ?></td>
                            <td><?php echo $product['product_gender']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $product['discount']; ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td>
                                <a href="../controllers/admin_editProduct_controller.php?id=<?php echo $product['product_id']; ?>"><button class="update" type="submit">Sửa</button></a>
                                <a href="../views/admin_deleteProduct_view.php?id=<?php echo $product['product_id']; ?>"><button class="delete" type="submit">Xóa</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <?php for ($page = 1; $page <= $totalPages; $page++) { ?>
                <a href="../controllers/admin_managementProducts_controller.php?page=<?php echo $page; ?>"><?php echo $page; ?></a>
            <?php } ?>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var readMoreLinks = document.getElementsByClassName("read-more");

            for (var i = 0; i < readMoreLinks.length; i++) {
                readMoreLinks[i].addEventListener("click", function(e) {
                    e.preventDefault();

                    var descriptionDiv = this.parentNode;
                    var excerptDiv = descriptionDiv.getElementsByClassName("excerpt")[0];
                    var fullDescriptionDiv = descriptionDiv.getElementsByClassName("full-description")[0];

                    if (excerptDiv.style.display === "none") {
                        excerptDiv.style.display = "block";
                        fullDescriptionDiv.style.display = "none";
                        this.textContent = "Xem thêm";
                    } else {
                        excerptDiv.style.display = "none";
                        fullDescriptionDiv.style.display = "block";
                        this.textContent = "Thu gọn";
                    }
                });
            }
        });
    </script>
</body>
</html>
