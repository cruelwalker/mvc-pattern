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
        <link rel="stylesheet" type="text/css" href="formStyle.css">
    </head>
    <body>
        <h1>Login</h1>
        <?php if (@$_GET['err'] == 1) { ?>
            <div>Login incorrect. please check again.</div>
        <?php } ?>
        <form action="index.php" method="POST" class="formStyle">
            <input type="text" name="username" placeholder="Username*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <input type="submit" name="login" value="Login">
        </form>
            <p><b><a href="registeration.php">click here to register</a></b></p>
    </body>
</html>