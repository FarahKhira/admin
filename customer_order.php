<?php 
include "includes/db.php";


if (isset($_SESSION['id']) && $_SESSION['role'] == 'admin') {
	
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
                    <h1 class="page-header">Customer Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
            <div class="row">

            	<div class="col-lg-12">
            		<table width="100%" class="table table-striped" id="dataTables-example">
            			<thead>
            				<tr>
            					<th>No.</th>
            					<th>Company Name</th>
            					<th>Customer contact</th>
            					<th>Phone No. </th>
            					<th>Email</th>
                                <th>Serial No.</th>
                                <th>Section</th>
            					<th>Product</th>
                                <th>Contract</th>
                                <th>Total Price</th>
            					<th>Update</th>
            					<th>Delete</th>
            				</tr>
            			</thead>
            			<tbody>
            				<tr>
                                <td>1</td>
                                <td>Pfizer Malaysia Sdn.Bhd (HQ-KL)</td>
                                <td>Mr Chan Lei Wei</td>
                                <td>014-3445672</td>
                                <td>pfizer@net.my</td>
                                <td>FCN/Farahsyasya/Gm/100-01</td>
                                <td>DM</td>
                                <td>Ip transit</td>
                                <td>3 Years</td>
                                <td>RM 69,415.20</td>
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