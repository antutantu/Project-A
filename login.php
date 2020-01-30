<?php 
session_start();
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('1' => '1','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:MyWish.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
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
    <div class="content">
<form method="post" action="MyWish.php">
    <h1>Please log in</h1>
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="text" name="password" id="password" placeholder="Password">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <br>
    <br>
    <input type="submit" value="Log In" class='Submit'>
    <br>
    <br>
    <a class="button" href="index.php" button type="button">Continue without Login</button></a>
</form>
    </div>
</body>
</html>