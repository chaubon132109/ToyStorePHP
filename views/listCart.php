<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        .contain{
            display: flex;
            justify-content: space-between;
            /* margin-bottom: 35px !important; */
            margin: 0 200px;
            background: white;
            padding: 45px 30px;
        }
        .contain_left{
            width: 45%;
        }
        .contain_right{
            width: 45%;
        }
        h2{
            margin-top: 35px;
            margin-bottom: 15px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 35px;

        }
        table tr {
            border-top: 1px solid #ccc;
        }
        .col1 {
            width: 120px;
        }

        .col3 {
            width: 120px;
            
        }
        .price_discount{
            font-weight: 600;
            color: #f04e47;
            padding-bottom: 10px;
        }
        .old_price{
            text-decoration: line-through;
            color : grey;
        }
        .col2 {
           padding-left: 20px;
            vertical-align: top;
        }
        .action{
            display: flex;
            line-height: 30px;
        }
        .action a{
            /* text-decoration: none; */
            color: blue;
            margin-right: 20px;

        }
        .action a:active{
            color: blue;
        }
        .navbar ul{
            height: 40px !important;
            }
        .col1 img{
            padding-top: 25px;
            height: 120px;
        }
        .product_name{
            padding-top: 25px;
            margin-bottom: 25px;
            font-weight: 600;
        }
        .btn_continue{
            cursor: pointer;
            padding: 10px 20px;
            background-color: #fff;
            border : 1px solid grey;
            font-weight: 600;
            width: 200px;
        }
        .flex-align{
            display: flex;
            justify-content: space-between;
            margin: 40px 0px;
            text-transform: uppercase;
        }
        .discount,.ship{
            color: grey;
        }
        .price-final{
            font-size:24px;
            font-weight: 600;
        }
        .payment{
            cursor: pointer;
            width: 100%;
            background-color: #f04e47 !important;
            margin-top: 20px;
            border: none;
            font-weight: 600;
            color: #fff;
            font-size:16px; 
            padding: 15px 0px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .update-quantity{
            display: flex;
        }
        .update-quantity span{
            margin-right: 10px;
            cursor: pointer;
            color: blue;
        }
        .update-quantity form{
            display: none;
        }
        .update-quantity form input,button{
            padding: 5px;
            width: 50px;
        }
        .error-message{
            margin-top: 20px;
            font-weight: 600;
            color : red;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
        $total = 0;
        $discount = 0;
        $productQuantities = array();

        include "../src/scrollToTop.php"
    ?>
     <div class="contain">
        <div class="contain_left">
            <h2>Giỏ hàng</h2>
            <?php if (empty($items)): ?>
                <p>Giỏ hàng trống</p>
            <?php else: ?>
                <table>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <?php 
                                $total +=  $item['price']*$item['quantity'];
                                $discount += $item['price']*($item['discount']);
                                $productQuantity = $item['con'];
                                $productQuantities[] = $productQuantity;
                            ?>
                            <tr>
                                <td class = "col1"><a href="../controllers/getProduct_controller.php?id=<?=$item['product_id']?>"><img src="../public/img/products_img/<?= $item['product_img'] ?>" alt=""></a></td>
                                <td class = "col2">
                                    <div class="product_name">
                                        <span id="update"><?= $item['quantity'] ?></span> x <a href="../controllers/getProduct_controller.php?id=<?=$item['product_id']?>" <?php if($item['quantity'] > $item['con']) echo 'style="text-decoration: line-through; color :red;"'?> ><?= $item['product_name'] ?> </a>
                                        <?php if($item['quantity'] > $item['con']) echo '<div style="color :red; font-weight: normal; font-size:12px;">Sản phẩm vượt quá số lượng hàng còn</div>'?>
                                    </div>
                                    <div class="action">
                                        <a href="../controllers/deleteItemCart_controller.php?id=<?= $item['product_id'] ?>">Xóa</a>
                                        <div class="update-quantity">
                                            <span class="edit-quantity" data-product-id="<?= $item['product_id'] ?>">Sửa số lượng</span>
                                            <form class="edit-quantity-form" action="../controllers/editQuantity_controller.php" method="post">
                                                <input type="hidden" name="id" value = "<?= $item['product_id'] ?>">
                                                <input type="number" name="quantity" value ="<?= $item['quantity'] ?>">
                                                <button type="submit">Sửa</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class ="col3">
                                    <?php if ($item['discount'] != 0): ?>
                                            <div class="price_discount">
                                                <?= $item['price'] * (1 - $item['discount']) ?> VND
                                            </div>
                                            <div class="old_price">
                                                <?= $item['price'] ?> VND
                                            </div>
                                        <?php else: ?>
                                            <div class="price_discount">
                                                <?= $item['price'] ?> VND
                                            </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>            
            <?php endif; ?>
            <div class="btn"><a href="../controllers/listProduct_controller.php"><button class ="btn_continue" type="submit">Tiếp tục mua sắm</button></a></div>
        </div>
        <div class="contain_right">
            <h2>TÓM TẮT ĐƠN HÀNG</h2>
            <div class="price">
                <div class="flex-align"><p>Tổng tiền:</p><p> <?= $total?> VND</p></div>
                <div class="flex-align discount"><p>Giảm:</p><p> <?=$discount?> VND</p></div>
                <div class="flex-align ship"><p>Vận chuyển:</p><p>0 VND</p></div>
                <div class="flex-align price-final"><p>Thành tiền:</p><p id="total-amount"> <?=$total - $discount?> VND</p></div>
            </div>
            <a href="../controllers/cartToOrder_controller.php" ><button id="continueBtn" class ="payment" type="submit">Thanh Toán Và Đặt Hàng</button></a>
            <div class="error-message"></div>
        </div>
     </div>
    <?php
        include "../src/footer.html"
    ?>
</body>
<script>
    document.addEventListener('click', function(event) {
        var target = event.target;

        if (target && target.classList.contains('edit-quantity')) {
            var form = target.nextElementSibling;

            if (form && form.classList.contains('edit-quantity-form')) {
            form.style.display = 'block';
            }
        }
    });
    var a = <?=json_encode($productQuantities)?>;
    var cartQuantities =  document.querySelectorAll('#update');
    var continueBtn = document.getElementById('continueBtn');
        var errorMessage = document.querySelector('.error-message');

        continueBtn.addEventListener('click', function (event) {
            if (!validateCartQuantities()) {
                event.preventDefault(); // Ngăn chặn hành động chuyển trang
                errorMessage.textContent = 'Lỗi: Số lượng sản phẩm vượt quá số lượng hiện có.';
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
            }
        });
    function validateCartQuantities() {
        for(var i = 0; i < cartQuantities.length;i++){
            if(parseInt(cartQuantities[i].textContent) > parseInt(a[i])){
                return false;
            }
        }
        return true;
    }
</script>
</html>