<?php 
include "includes/db.php";


if (isset($_SESSION['id']) && $_SESSION['role'] == 'staff') {
	
} else {
	header('Location: login.php');
}

 ?>

 <?php
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
                 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus fa-2x"></i></a>
                <?php include "add_product_modal.php"; ?>
            		<table width="100%" class="table table-striped" id="dataTables-example">
            			<thead>
            				<tr>
            					<th>Id</th>
            					<th>Product Code</th>
            					<th>Brand</th>
            					<th>Manufacture origin</th>
            					<th>Price (unit)</th>
            					<th>Type</th>
            					<th>Date Created</th>
            					<th>Date Modified</th>
            					<th>Update</th>
            					<th>Delete</th>
            				</tr>
            			</thead>
            			<tbody>
            				<tr>
            					<td>1</td>
            					<td>FortiGate 30E Firewall</td>
                      <td>Fortinet</td>
            					<td>USA</td>
            					<td>RM 1928.20</td>
                      <td>Ip transit</td>
                      <td>29/6/2019</td>
                      <td>29/6/2019</td>
                      <td><a href="#"><i class="fa fa-edit"></i></a></td>
                      <td><a href="#">X</a></td>
            				</tr>
            			</tbody>
            		</table>
            	</div>	
                
            </div>

            
            </div>
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