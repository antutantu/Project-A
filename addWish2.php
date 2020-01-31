<?php include ('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Wish</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <?php include ('menu2.php'); ?>
    <div class="content">
        <h1>Favorite Wish</h1>
    <form action="MyWish.php" method="post" placeholder="My wish is ...">
        <input type="text" name="wish">
	    <button type="submit" name="submit" id="AddWish" class="button">Add</button>
            <?php if (isset($errors)) { ?>
		    <p>
                <?php echo $errors; ?>
            </p>
		    <?php } ?>
    </form>
    </div>
</body>
</html>