<?php


?>
<html>
    <head>
        <title>Register Page</title>
        <link rel="stylesheet" type="text/css" href="formStyle.css">
    </head>
    <body>
        <h1 class="register">Register</h1>
        <form action="index.php" method="POST" class="formStyle">
            <input type="text" name="username" placeholder="Username*" required>
            <input type="text" name="email" placeholder="Email*" required>
            <input type="password" name="password_1" placeholder="Password*" required>
            <input type="password" name="password_2" placeholder="Confirm password*" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
