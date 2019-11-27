<?php

require_once('user_controller.php');
require_once('user_model.php');

@$login = $_REQUEST['login'];

$user_controller = new UserController();

switch ($login) {
    case 'Login':
        //we validate username and password
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user_controller->login($username, $password)) {
            header('Location:main.php');
        } else {
            header("Location:login.php?err=1");
        }
        break;
    case 'logout':
        $user_controller->logout();
        header('Location:login.php');
        break;
    default:
        header('Location:login.php');
        break;
}
?>