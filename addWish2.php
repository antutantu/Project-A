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
    </div>
    <div class="content">
        <h1>Favorite Wish</h1>
        <h3>Add your favorite wish</h3>
    <form method="post">
        <input type="text" name="wish" id="wish" placeholder="My wish is ...">
	    <button type="submit" name="submit" id="AddWish" class="button">Add</button>
            <?php if (isset($errors)) { ?>
            <p>
            <a class='buttonE'> 
                <?php echo $errors; ?>
            </a>
            </p>
		    <?php } ?>
    </form>
    </div>
</body>
</html>