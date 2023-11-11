<?php 
     include "../models/commentHistory_model.php";
     session_start();
    if (isset($_SESSION['user_id'])) {
          $user_id = $_SESSION['user_id'];
          $comments = getComment($user_id);
          include "../views/commentHistory.php";
     } else {
          header("Location: ../views/login.php"); 
          exit(); 
     }
?>