<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .button1 {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 9999; /* Đặt giá trị z-index cao */
        }
        .arrow-box {
            width: 31px;
            height: 31px;
            position: relative;
            background-color: #f1f1f1;
        }

        .arrow-box::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            border: solid black;
            border-width: 3px 3px 0 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(-45deg);
        }
    </style>
</head>
<body>
    <button class="button1" onclick="scrollToTop()"><div class="arrow-box"></div></button>

    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector(".button1").style.display = "block";
            } else {
                document.querySelector(".button1").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>
</html>
