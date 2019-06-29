<?php

ob_start():
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['mobile']);

session_destroy();
header('location: login.php');


?>