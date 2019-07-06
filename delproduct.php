<?php 
include "pages/includes/db1.php";
if (isset($_GET['id'])) {
	$order_id = $_GET['id'];

	$sql = $conn1->query("DELETE FROM item_products WHERE id=$order_id");
	if ($sql) {
		header('Location: product_add.php');
	} else {
		die($conn1->error);
	}
}



 ?>