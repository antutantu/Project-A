<?php
session_start();
?>
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
        <?php include ('menu.php'); ?>
        </div>
    <div class="content">
    <h1>Run Wishes</h1>
        <h3>Your wishes are underway...</h3>
    </div>
</body>
</html> 
<?php
session_destroy();
?>