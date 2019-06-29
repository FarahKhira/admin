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
                    <h1 class="page-header">Customer List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
            <div class="row">

            	<div class="col-lg-12">
            		<table class="table table-striped">
            			<thead>
            				<tr>
            					<th>Id</th>
            					<th>Company Name</th>
            					<th>Address</th>
            					<th>Customer contact</th>
            					<th>Phone No. </th>
            					<th>Fax No.</th>
            					<th>Email</th>
                                <th>Section</th>
            					<th>Date Registered</th>
                                <th>Account Manager</th>
            					<th>Update</th>
            					<th>Delete</th>
            				</tr>
            			</thead>
            			<tbody>
            				<tr>
                                <td>1</td>
                                <td>Pfizer Malaysia Sdn.Bhd (HQ-KL)</td>
                                <td>Level 42, Menara Tm, Off Jalan Off Pantai Baharu, 59200, Kuala Lumpur.</td>
                                <td>)14-3445672</td>
                                <td>603- 4425657</td>
                                <td>29/6/2019</td>
                                <td>pfizer@net.my</td>
                                <td>DM</td>
                                <td>29/6/2019</td>
                                <td>Farahsyasya</td>
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

</body>

</html>