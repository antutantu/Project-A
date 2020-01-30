<?php 
    session_start();
    if(isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
    exit;
    if (!isset($_SESSION['WishList'])) {
        $_SESSION['WishList'] = array();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>My Wish</title>
</head>
<body>
        <div class="menu">
        <?php include ('menu2.php'); ?>
        </div>
        <div class="content">
        <h3>Congratulation! You have logged into password protected page.</h3>
        <h1>Favorite Wish</h1>
        <a class="button" href="addWish2.php" button type="button">Add Wish</button></a>
        <ul class="demo">
        <li>
            <?php
            $i = 1;
            foreach ($_SESSION['WishList'] as $Wish) { ?>
        </li>
        <li>
            <?php
            $i++;
            echo "$i. You wish - $Wish";
            } ?>
        </li>
        </ul>
        <a class="button" href="runWishes.php" button type="button" >Run Wishes</button></a>
        <br>
        <br>
        <a class="button" href="clearWishes.php" button type="button" onclick="alert('Are you sure?')">Clear All Wiches</button></a>
    </div>
</body>
</html> 