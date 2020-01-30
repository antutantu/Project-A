<?php
    session_start();
    if (empty($_POST['newWish'])) {
        header('Location: /project-a/addWish2.php');
    }else{
    $Wish = $_POST['newWish'];
    array_push($_SESSION['WishList'], $Wish); 
    header('Location: /project-a/MyWish.php');
    }
?> 