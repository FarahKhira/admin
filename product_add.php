<?php 
include "includes/db.php";
include "pages/includes/db1.php";

if (isset($_SESSION['id']) && $_SESSION['role'] == 'admin') {
	
} else {
	header('Location: login.php');
}

?>

<?php include "includes/header.php"; ?>

<!-- Navigation -->
<!-- Top Navigation -->
<?php include "includes/top_navigation.php"; ?>

<!-- Left Navigation -->
<?php include "includes/side_navigation.php"; ?>
    

<div id="page-wrapper" class="p-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">

    	<div class="col-lg-12">
            <?php 
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }

             ?>
         <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus fa-2x"></i></a>
        <?php include "add_product_modal.php"; ?>
    		<table width="100%" class="table table-striped" id="dataTables-example">
    			<thead>
    				<tr>
    					<th>Id</th>
    					<th>Product</th>
    					<th>Type</th>
    					<th>Date Created</th>
    					<th>Date Modified</th>
    					<th>Update</th>
    					<th>Delete</th>
    				</tr>
    			</thead>
    			<tbody>
                    <?php

                    // select all data from database
                    $query = $conn->query("SELECT * FROM item_products ORDER BY id DESC");

                    $count = 1;
                    while ($row = $query->fetch_assoc()) {

                        $id = $row['id'];
                        $id_product = $row['id_product'];

                        $sql1 = $conn1->query("SELECT * FROM product WHERE idproduct=$id_product");
                        $fetch = $sql1->fetch_assoc();

                        $product_type = $fetch['products'];
                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>".$row['product_services']."</td>";
                        echo "<td>$product_type</td>";
                        echo "<td>".$row['date_created']."</td>";
                        echo "<td>".$row['date_modified']."</td>";
                        echo "<td><a href=\"updateproduct.php?id=$id\"><i class=\"fa fa-edit\"></i></a></td>";
                        echo "<td><a href=\"delproduct.php?id=$id\" onclick=\"return confirm('Are you sure to delete this ?')\">X</a></td>";

                        $count++;
    				}
                    ?>
    			</tbody>
    		</table>
    	</div>
    </div>
</div>



<?php include "includes/script.php"; ?>
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true,
            drawCallback: function () {
                $('#dataTables-example_wrapper .row:last-child').addClass('mb-1 align-items-baseline');
            }
        });
    });
</script>


</body>

</html>