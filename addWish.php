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
        <?php include ('menu.php'); ?>
        </div>
    <div class="content">
    <h1>Favorite Wish</h1>
        <h3>Add your favorite wish</h3>
        <form action="postWish.php" method="post">
        <input type="text" name="newWish" id="newWish" placeholder="My wish is ...">
        <input type="submit" value="Add">
        </form>
    </div>
</body>
</html> 