<?php 

include "includes/db1.php";

if (isset($_POST['type_id'])) {
	$type_id = $_POST['type_id'];

	$sql = $conn1->query("SELECT * FROM item_products WHERE id_product = $type_id");
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