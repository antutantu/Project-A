<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Wish</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
    <h1>Favorite Wish</h1>
        <h3>Add your favorite wish</h3>
        <form action="postWish.php" method="post">
            <label for="new-wish-title">My Wish</label>
            <input type="text" name="newWish" id="new-wish-title" placeholder="My wish is ...">
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html> 