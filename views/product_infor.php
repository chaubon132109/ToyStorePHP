<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .navbar ul{
      height: 40px !important;
    }
    .trust-seal-list{
        list-style: none;
        padding: 0px;
        margin-bottom: 20px;
    }
    .trust-seal-list li{
        border : 1px solid black;
        padding : 10px;
    }
    .productInfor_contain{
        margin-left: 250px;
        margin-right: 250px;
        margin-top : 50px;
        margin-bottom : 50px;
        padding : 30px;
        background-color: #fff;
    }
    .product-details {
      display: flex;
      gap: 60px;
      /* justify-content: space-between; */
    }

    .product-images {
      width: 380px;
      position: relative;
      overflow: hidden;
    }

    .product-images img {
      width: auto;
      height: 380px;
      max-width: 380px;
      max-height: 380px;
      object-fit: contain;
    }

    .product-info {
      width: 50%;
    }

    .product-info h2 {
      margin-top: 0;
    }

    .product-info p {
      margin-bottom: 20px;
    }
    .price_new{
        font-weight : 600;
        color: red;
    }
    .price_old{
        text-decoration: line-through;
        color: #888;    
    }
    .discount{
        font-weight : 600;
        color: green;
    }
    #quantity{
        width: 50px;
        height : 30px;
        margin: 0px 20px;
        text-align: center;
    }
    .product-description {
      margin-top: 20px;
    }

    .product-buttons {
      margin-top: 20px;
    }
    .infor{
        margin: 20px 0px;
    }
    .product-buttons button {
      cursor: pointer;
      margin-right: 10px;
      padding: 10px 40px;
      background-color: red;
      color: #fff;
      font-weight : 600;
      border :none;
    }
    .quantity{
        cursor: pointer;
        padding: 10px 20px;
        border : none;
        border-radius : 5px;
        background-color : #beb6b6;
    }
    .slide-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 100%; /* Tỷ lệ khung hình vuông (1:1) */
      overflow: hidden;
    }

    .slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: none;
    }

    .prev-button1,
    .next-button1 {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      background-color: transparent;
      border: none;
      color: #000;
      cursor: pointer;
    }

    .prev-button1 {
      left: 10px;
    }

    .next-button1 {
      right: 10px;
    }
    .custom-table {
      width: 100%;
    }

    .custom-table th, .custom-table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .custom-table th {
      background-color: #f2f2f2;
    }
     /* CSS cho phần bình luận */
     .comment-form {
      margin-bottom: 20px;
    }

    .comment-form textarea {
      width: 100%;
      height: 100px;
    }

    .comment {
      margin-bottom: 20px;
    }

    .comment-list {
      list-style: none;
      padding: 0;
    }

    .comment {
      margin-bottom: 20px;
      padding-bottom :20px;
      border-bottom: 1px solid grey;
    }

    .comment .author {
      font-weight: bold;
    }

    .comment .timestamp {
      font-style: italic;
      font-size: 0.8em;
      color: #888;
      margin-left: 50px;
    }

    .comment .content {
      margin-top: 20px;
      padding-left :20px;
    }
    .submit_comment{
        padding:10px;
        width: 150px;
        background-color : blue;
        font-weight: 600;
        color: white;
        border:none;
    }
  </style>
</head>
<body>
<?php
        session_start();
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
          include "../src/header.html";
        }
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
     ?>
    <div class="productInfor_contain">
        <div class="product-details">
            <div class="product-images">
            <div class="slide-container">
                <div class="slide">
                <img src="../public/img/products_img/<?=$product['product_img']?>" alt="Image 1">
                </div>
                <div class="slide">
                <img src="../public/img/products_img/<?=$product['product_img_1']?>" alt="Image 2">
                </div>
                <div class="slide">
                <img src="../public/img/products_img/<?=$product['product_img_2']?>" alt="Image 3">
                </div>
            </div>
            <button class="prev-button1" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next-button1" onclick="changeSlide(1)">&#10095;</button>
            </div>
            <div class="product-info">
            <h2><?=$product['product_name']?></h2>
            <?php if ($product['discount'] != 0): ?>
              <p class="infor price_new">
                  Giá khuyến mãi: <?= $product['price'] * (1 - $product['discount']) ?>
              </p>
              <p class="infor price_old">
                  Giá gốc: <?= $product['price'] ?>
              </p>
              <p class="infor discount">
                  Khuyến mãi: <?= ($product['discount'] * 100) . "%" ?>
              </p>
          <?php else: ?>
              <p class="infor price_new">
                  Giá gốc: <?= $product['price'] ?>
              </p>
          <?php endif; ?>
            <ul class="trust-seal-list">
                <li>
                    <div>Hàng chính hãng, chứng nhận an toàn</div>
                </li>
                <li>
                    <div style="font-style: italic;">Miễn phí giao hàng toàn quốc <b>đơn trên 500K</b></div>
                </li>
                <li>
                    <div>Liên hệ hỗ trợ: <a href="tel:19001208">1900.1208</a></div>
                </li>
            </ul>
            <button class = "quantity" onclick="decreaseQuantity()">-</button>
            <input id="quantity" type="number" value="1" min="1">
            <button class = "quantity" onclick="increaseQuantity()">+</button>
            <div class="product-buttons">
                <form style = "float: left;" action="../controllers/checkAddress_controller.php" method = "POST" onsubmit="return showAlert1()">
                  <input id="quantity1" type="hidden" value="1" min="1" name="quantity">
                  <input id="" type="hidden" value="<?=$product_id?>" name="id">
                  <button type="submit">Mua ngay</button>
                </form>
                <form action="../controllers/cartAdd_controller.php" method = "POST" onsubmit="return showAlert()">
                  <input id="quantity2" type="hidden" value="1" min="1" name="quantity2">
                  <input id="" type="hidden" value="<?=$product_id?>" name="id">
                  <button type="submit">Thêm vào giỏ hàng</button>
                </form>
            </div>
            </div>
        </div>
        <div class="product-description">
            <h2 style = "margin-top: 50px; margin-bottom: 20px;">Mô tả sản phẩm</h2>
            <div style = "font-size: 16px; padding-left:15px;"><?=$product['description']?></div>
        </div>
        <div class="product-all">
            <h2 style = "margin-top: 50px; margin-bottom: 50px;">Thông tin sản phẩm</h2>
            <table class="custom-table">
                <tbody>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><?=$product['product_name']?></td>
                </tr>
                <tr>
                    <td>Danh mục</td>
                    <td><?=$product['category_name']?></td>
                </tr>
                <tr>
                    <td>Tuổi</td>
                    <td><?=$product['product_age']?> tuổi trở lên</td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td><?=$product['product_gender']?></td>
                </tr>
                <tr>
                    <td>Số lượng hàng còn</td>
                    <td><?=$product['quantity']?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="product_comment">
            <h2 style = "margin-top: 50px; margin-bottom: 50px;">Bình luận của bạn</h2>
            <!-- Phần form bình luận -->
            <?php
            if (isset($_SESSION['username'])) {
                echo '<div class="comment-form">
                        <form action="submitComment_controller.php" method="POST">
                            <textarea name="comment" placeholder="Nhập bình luận của bạn"></textarea>
                            <br>
                            <input type="hidden" name="product_id" value="' . $product['product_id'] . '">
                            <button class="submit_comment" type="submit">Gửi bình luận</button>
                        </form>
                    </div>';
            } else {
                echo '<h3 style="color: red; padding-left: 20px;">Hãy <a href ="../views/login.php">đăng nhập</a> để bình luận</h3>';
            }
            ?>

            <!-- Phần hiển thị các bình luận -->
            <ul class="comment-list">
                 <h2 style = "margin-top: 50px; margin-bottom: 50px;">Các bình luận về sản phẩm</h2>

                <?php
                // Lấy các bình luận từ biến $comments
                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        $comment_id = $comment['comment_id'];
                        $product_name = $comment['product_name'];
                        $name = $comment['name'];
                        $comment_text = $comment['comment'];
                        echo '<li class="comment">';
                        echo '<span class="author">' . $name . '</span>';
                        echo '<span class="timestamp">' .  $comment['datetime']  . '</span>';
                        echo '<div class="content">' . $comment_text . '</div>';
                        echo '</li>';
                    }
                } else {
                    echo 'Không có bình luận nào.';
                }
                ?>
            </ul>
            </div>
    </div>
    <?php include "../src/footer.html"; ?>
  

  <script>
    var quantity = document.getElementById("quantity").value;
    document.getElementById("quantity").addEventListener("input", function() {
      quantity = this.value;
      document.getElementById("quantity1").value  = this.value;
      document.getElementById("quantity2").value  = this.value;
    });
    function decreaseQuantity() {
      if (quantity > 1) {
        quantity--;
        document.getElementById("quantity").value  = quantity;
        document.getElementById("quantity1").value  = quantity;
        document.getElementById("quantity2").value  = quantity;

      }
    }

    function increaseQuantity() {
      quantity++;
      document.getElementById("quantity").value  = quantity;
      document.getElementById("quantity1").value  = quantity;
      document.getElementById("quantity2").value  = quantity;
    }

    var currentSlide = 0;
    var slides = document.getElementsByClassName('slide');
    // Hiển thị slide đầu tiên khi tải trang
    slides[currentSlide].style.display = 'block';

    function changeSlide(n) {
      currentSlide += n;

      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      } else if (currentSlide >= slides.length) {
        currentSlide = 0;
      }

      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }

      slides[currentSlide].style.display = 'block';
    }
    // Các biến và hàm thay đổi slide

    function showAlert() {
      if (<?=$product['quantity']?> == 0) {
        alert('Sản phẩm đã hết hàng');
        return false;
      } else if (<?=$product['quantity']?> - quantity < 0) {
        alert('Vượt quá số lượng hàng còn');
        return false;
      }else if(quantity < 0){
        alert('Số lượng không phù hợp');
        return false;
      } else {
        alert('Thêm sản phẩm vào giỏ hàng thành công');
        return true;
      }
    }

    function showAlert1() {
      if (<?=$product['quantity']?> == 0) {
        alert('Sản phẩm đã hết hàng');
        return false;
      } else if (<?=$product['quantity']?> - quantity < 0) {
        alert('Vượt quá số lượng hàng còn');
        return false;
      } else if(quantity < 0){
        alert('Số lượng không phù hợp');
        return false;
      } else {
        return true;
      }
    }
  </script>
</body>
</html>
