<?php
    function checkAddress($user_id){
        include "config.php";
        $sql = "SELECT address FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['address']) {
            return true;
        }else{
            return false;
        }
    }
    function addAddress($user_id, $newAdress){
        include "config.php";
        $sql = "UPDATE users SET address = '$newAdress' WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        }else{
            return false;
        }
    }
?>