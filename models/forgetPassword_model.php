<?php
    function checkNumberphone($numberphone, $a){
        include "config.php";
        $sql = "SELECT phonenumber FROM users WHERE username = '$a'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['phonenumber'] == $numberphone) {
                return true;
            }
        }

        return false;
    }

?>