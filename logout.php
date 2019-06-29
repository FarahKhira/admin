<?php 

include "includes/db.php";

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['role']);

session_destroy();

header('Location: index.php');




 ?>