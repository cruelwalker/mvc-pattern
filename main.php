<?php
require_once('user_model.php');
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:login.php');
}
else{
	$user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>
	<p>
		You are logged in <?php echo($user->get_username()) ?>
	</p>
</body>
</html>