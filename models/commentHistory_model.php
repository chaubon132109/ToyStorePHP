<?php
    include "config.php";
    
    function getComment($user_id) {
        global $conn;
    
        $commentQuery = "SELECT p.product_img, p.product_name, c.comment, c.datetime
                         FROM comment_product c
                         INNER JOIN products p ON c.product_id = p.product_id
                         WHERE c.user_id = $user_id";
        
        $commentResult = mysqli_query($conn, $commentQuery);
        
        if ($commentResult) {
            $comments = array();
            
            while ($row = mysqli_fetch_assoc($commentResult)) {
                $comments[] = $row;
            }
            
            return $comments;
        } else {
            echo "Error: " . mysqli_error($conn);
            return false;
        }
    }
?>
