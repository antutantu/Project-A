<?php include ('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Run Wishes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="menu">
        <?php include ('menu2.php'); ?>
        </div>
    <div class="content">
    <h1>Run Wishes</h1>
        <h3>Your wishes are underway...</h3>
        <a class="buttonP">
        <?php $i = 1; while ($row = mysqli_fetch_array($wishes)) { ?>
			<?php echo $i; ?>
			<?php echo $row['wish']; ?>
            <?php $i++; } ?>
        </a>
    </div>
</body>
</html> 