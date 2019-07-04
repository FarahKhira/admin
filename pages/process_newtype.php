<?php 

include "includes/db1.php";

if (isset($_POST['type_newid'])) {
	$type_newid = $_POST['type_newid'];

	$sql = $conn1->query("SELECT * FROM item_products WHERE id_product = $type_newid");
	if ($sql) {
		
		$data = '';
		$data .= "<option value=\"#\">--PLEASE SELECT--</option>";
		while ($row = $sql->fetch_assoc()) {
			$data .= "<option value=\"".$row['product_services']."\">".$row['product_services']."</option>";
		}

		echo $data;
	}
} else {
	echo "Error";
}


 ?>