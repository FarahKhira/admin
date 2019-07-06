<?php 
include "includes/db1.php";
if (isset($_GET['id'])) {
	$order_id = $_GET['id'];

	$sql = $conn1->query("DELETE FROM addcustdb WHERE ccompanyid=$order_id");
	if ($sql) {
		header('Location: cust_form.php');
	} else {
		die($conn1->error);
	}
}



 ?>