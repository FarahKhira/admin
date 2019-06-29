<?php 
ob_start();
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'fiber';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die($conn->error);
}
 ?>