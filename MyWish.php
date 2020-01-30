<?php 
    include ('db.php');
    session_start();
    if(isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
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
            <?php $i = 1; while ($row = mysqli_fetch_array($wishes)) { ?>
			<?php echo $i; ?>
			<?php echo $row['wish']; ?>
        </li>
        </ul>
    </div>
        <ul>
        <div class="wishes">
        <a href="MyWish.php?delete_wish=<?php echo $row['id'] ?>"button type="text" name="del" id="del" class="button">DEL</a> 
            <?php $i++; } ?>
        <a class="button" href="runWishes2.php" button type="button" >Run Wishes</button></a>
        <ul>
    </div>
</body>
</html> 