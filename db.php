<?php 
    // create db manually, wish->wishes(2 columns)1-id/int-10/primary;2-wish/var200
   
    $errors = "Nothig New";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "wish");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {

		if (empty($_POST['wish'])) {
			$errors = "You must fill in the field";
		}else{
			$wish = $_POST['wish'];
			$query = "INSERT INTO wishes (wish) VALUES ('$wish')";
			mysqli_query($db, $query);
			header('location: MyWish.php');
		}
	}	

	// delete wish
	if (isset($_GET['delete_wish'])) {
		$id = $_GET['delete_wish'];

		mysqli_query($db, "DELETE FROM wishes WHERE id=".$id);
		header('location: MyWish.php');
	}

	// select all wishes if page is visited or refreshed
	$wishes = mysqli_query($db, 'SELECT * FROM wishes');
?>