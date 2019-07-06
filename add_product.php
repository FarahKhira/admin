<?php 

session_start();
include "pages/includes/db1.php";

if(isset($_POST['submit'])) {

$product_item = $_POST['product_item'];
$product_type = $_POST['product_type'];
$date_itemcreated = $_POST['date_itemcreated'];
$date_itemmodified = $_POST['date_itemmodified'];

$sql = $conn1->query("INSERT INTO item_products(product_services, id_product, date_created, date_modified) VALUES ('$product_item','$product_type', '$date_itemcreated' , '$date_itemmodified')");

if($sql) {
	$_SESSION['message'] = 'product added successfully';
	header("Location: product_add.php");
}else{
	$_SESSION['message'] = $conn1->error;
	header("Location: product_add.php");
}


}

?>