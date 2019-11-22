<?php
session_start();
if (isset($_SESSION['user'])) {
	header('Location:main.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<?php if (@$_GET['err'] == 1) {?>
		<div>Login incorrect. please check again.</div>
	<?php }?>
	<form action="index.php" method="POST">
		<input type="text" name="username" placeholder="Username*" required>
		<input type="password" name="password" placeholder="Password*" required>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>