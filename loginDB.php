<php
include("config.php");

$username = $_POST['username'];
$password = sha1($_POST['password']);

$query = "SELECT ID FROM user WHERE username = '$username' AND password = '$password'";

if ($result = $db->query($query)) {
   while ($user = $result->fetch_object()) {
      $_SESSION['user'] = $user->ID;
      header("Location: index.php");
   }
}
else {
   header("Location: login.php");
}
?>