<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đơn hàng</title>
    <link rel="stylesheet" href="../public/css/order.css">
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            include "../src/header_logined.php";
        } else {
            include "../src/header.html";
        }
        $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
        include "../src/scrollToTop.php"
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giao hàng</title>
    <!-- CSS styles go here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form class="order_infor" action="addOrderInformation_controller.php" method="POST">
            <div class="left-section">
                <h2>Thông tin giao hàng</h2>
                    <div class="form-group">
                        <label for="address">Địa chỉ nhận hàng: <?=$user['address']?></label>
                        <input type="hidden" name="address" value = "<?=$user['address']?>">
                    </div>
                    <div class="form-group">
                        <label>Phương thức thanh toán:</label>
                        <div>
                            <input type="radio" id="cash" name="payment_method" value="cash" required>
                            <label for="cash">Thanh toán tiền mặt khi nhận hàng</label>
                        </div>
                        <div>
                            <input type="radio" id="momo" name="payment_method" value="momo" required>
                            <label for="momo">Momo</label>
                        </div>
                        <div>
                            <input type="radio" id="bank" name="payment_method" value="bank" required>
                            <label for="bank">Ngân hàng</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Hình thức giao hàng:</label>
                        <div>
                            <input type="radio" id="express" name="shipping_method" value="express" required>
                            <label for="express">Giao hàng nhanh</label>
                        </div>
                        <div>
                            <input type="radio" id="standard" name="shipping_method" value="standard" required>
                            <label for="standard">Giao hàng tiết kiệm</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note">Ghi chú:</label>
                        <textarea id="note" name="note"></textarea>
                    </div>
            </div>
            <div class="right-section">
                <h2>Thông tin các mặt hàng</h2>
                <div class="product-info">
                    <table>
                        <thead>
                        <tr>
                            <th>Tên mặt hàng</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?=$product['product_name']?></td>
                            <td><?=$quantity?></td>
                            <td><?=$product['price']*(1-$product['discount'])?></td>
                        </tr>
                        <!-- Add more rows for each product -->
                        </tbody>
                    </table>
                </div>
                <div class="order-summary">
                    <h3>Tổng đơn hàng</h3>
                    <div class="flex-align">
                        <p>Tổng số lượng:</p><p> <?=$quantity?></p>
                    </div>
                    <input type="hidden" id = "total" name="total" value = "<?=$quantity*$product['price']*(1-$product['discount'])?>">
                    <div class="flex-align"><p>Tổng tiền:</p><p> <?=$quantity*$product['price']*(1-$product['discount'])?> VND</p></div>
                    <div class="flex-align"><p>Giảm:</p><p> <?=$quantity*$product['price']*($product['discount'])?> VND</p></div>
                    <div class="flex-align"><p>Giá vận chuyển:</p><p id="shipping-fee">0 VND</p></div>
                    <div class="flex-align"><p>Thành tiền:</p><p id="total-amount"> <?=$quantity*$product['price']*(1-$product['discount'])?> VND</p></div>
                </div>
                <button class ="payment" type="submit">Thanh Toán Và Đặt Hàng</button>
            </div>
        </form>   
    </div>
</body>
</html>

    <?php
        include "../src/footer.html"
    ?>
    <?php
        echo $_SESSION['quantity'];
    ?>
</body>
</html>
<script>
    // Xử lý sự kiện khi người dùng thay đổi phương thức giao hàng
    var shippingMethodRadios = document.getElementsByName('shipping_method');
    for (var i = 0; i < shippingMethodRadios.length; i++) {
        shippingMethodRadios[i].addEventListener('change', updateShippingFee);
    }

    // Hàm cập nhật giá vận chuyển và tổng thành tiền dựa trên lựa chọn phương thức giao hàng
    function updateShippingFee() {
        var shippingFeeElement = document.getElementById('shipping-fee');
        var totalAmountElement = document.getElementById('total-amount');
        var shippingMethod = document.querySelector('input[name="shipping_method"]:checked').value;

        // Thay đổi giá vận chuyển và tổng thành tiền tùy thuộc vào phương thức giao hàng
        if (shippingMethod === 'express') {
            shippingFeeElement.textContent = '40000 VND';
            totalAmountElement.textContent = '<?=$quantity*$product['price']*(1-$product['discount'])+40000?> VND';
            document.getElementById('total').value = "<?=$quantity*$product['price']*(1-$product['discount'])+40000?>";
        } else if (shippingMethod === 'standard') {
            shippingFeeElement.textContent = '20000 VND';
            totalAmountElement.textContent = '<?=$quantity*$product['price']*(1-$product['discount'])+20000?> VND';
            document.getElementById('total').value = "<?=$quantity*$product['price']*(1-$product['discount'])+20000?>";

        }
    }
</script>

