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
            					<th>Customer contact</th>
            					<th>Phone No. </th>
            					<th>Email</th>
                                <th>Serial No.</th>
            					<th>Date Registered</th>
                                <th>Account Manager</th>
            					<th>Update</th>
            					<th>Delete</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php 

                            // select all data from database
                            $query = $conn->query("SELECT * FROM addcustdb ORDER BY ccompanyid DESC");
                            $count = 1;

                            while ($row = $query->fetch_assoc()) {

                                $id = $row['ccompanyid'];
                                $user_id = $row['user_id'];

                                $sql = $conn1->query("SELECT * FROM users WHERE id=$user_id");
                                $fetch = $sql->fetch_assoc();

                                $username = $fetch['username'];
                                
                                echo "<tr>";
                                echo "<td>$count</td>";
                                echo "<td>".$row['ccompany']."</td>";
                                echo "<td>".$row['ccontactperson']."</td>";
                                echo "<td>".$row['cmobile']."</td>";
                                echo "<td>".$row['cemail']."</td>";
                                echo "<td>".$row['serial_idnum']."</td>";
                                echo "<td></td>";
                                echo "<td>$username</td>";
                                echo "<td><a href=\"updatecustadmin.php?id=$id\"><i class=\"fa fa-edit\"></i></a></td>";
                                echo "<td><a href=\"delcustadmin.php\">X</a></td>";
                                echo "</tr>";"<td><a href=\"delcustadmin.php?id=$id\" onclick=\"return confirm('Are you sure you want to delete this order?')\">X</a></td>";
                                echo "</tr>";
                                $count++;
                            }
                            
                             ?>
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