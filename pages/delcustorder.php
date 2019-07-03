<?php 
include "includes/db1.php";
if (isset($_GET['id'])) {
	$order_id = $_GET['id'];

	$sql = $conn1->query("DELETE FROM product_orders WHERE id=$order_id");
	if ($sql) {
		header('Location: custdisplay.php');
	} else {
		die($conn1->error);
	}
}



 ?>