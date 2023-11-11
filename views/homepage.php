<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ</title>
    <style>
        .search_input {
            height: 36px !important;
        }
        .search_submit{
            height: 40px !important;
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
     ?>
    <div class="slideshow-container">
        <div class="slide">
            <img src="../public/img/slide1.jpg" alt="Image 1">
        </div>
        <div class="slide">
            <img src="../public/img/slide2.jpg" alt="Image 2">
        </div>
        <div class="slide">
            <img src="../public/img/slide3.jpg" alt="Image 3">
        </div>
        <button class="prev-button" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next-button" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <?php include "../src/footer.html"; ?>
</body>
<script>
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
</script>
</html>