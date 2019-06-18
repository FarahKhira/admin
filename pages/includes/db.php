<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fiber";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('connection failed');

if($connection) {
    //echo "connected to database ", $db_name;
} else {
    die("connected failed" . mysqli_error($connection));
    exit();
}

?>
