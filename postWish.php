<?php
    session_start();
    $Wish = $_POST['newWish'];
    array_push($_SESSION['WishList'], $Wish);
    header('Location: /project-a');
?> 