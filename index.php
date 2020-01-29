<?php
    session_start();
    if (!isset($_SESSION['WishList'])) {
        $_SESSION['WishList'] = array();
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
    <div class="content">
        <h1>Favorite Wish</h1>
        <a class="button" href="addWish.php">Add Wish</a>
        <ul>
        <?php
            $d=mktime(0, 0);
            echo date('H:i', $d)." My Wish is";
            echo "<li>I want to buy a new gaming video card</li>";
                foreach ($_SESSION['WishList'] as $Wish) {
            echo date('H:i')." You Wish";
            echo "<li>$Wish</li>";
                }
            ?>
        </ul>
        <a class="button" href="clearWishes.php">Clear Wiches</a>
    </div>
</body>
</html> 