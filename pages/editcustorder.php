<?php 
include "includes/db1.php";
if (isset($_GET['id'])) {
	$order_id = $_GET['id'];
	$customer_id = $_GET['customerid'];

	$sql = $conn1->query("UPDATE FROM product_orders WHERE id=$order_id");
	if ($sql) {
		header('Location: custdisplay.php?id='.$customer_id.'');
	} else {
		die($conn1->error);
	}
}



 ?>