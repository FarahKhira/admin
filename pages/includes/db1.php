<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'fiber';


$conn1 = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn1) {
	
} else {
	die($conn1->error);
	exit();
}


 ?>