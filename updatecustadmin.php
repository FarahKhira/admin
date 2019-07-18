<?php 
session_start();
include "pages/includes/db1.php";
if (isset($_GET['id'])) {
    $cust_id = $_GET['id'];

    $sql = $conn1->query("SELECT * FROM addcustdb WHERE ccompanyid = $cust_id");
    if ($sql) {
        $row = $sql->fetch_assoc();

        $db_cm = $row['ccompany'];
        $db_cc = $row['ccontactperson'];
        $db_pn = $row['cmobile'];
        $db_e = $row['cemail'];
        $db_sn = $row['serial_idnum'];
        $db_dr = $row['cemail'];
        $db_am = $row['cemail'];
    }
}

if (isset($_POST['submit'])) {
    $admin_cm = $_POST['admin_cm'];
    $admin_cc = $_POST['admin_cc'];
    $admin_pn = $_POST['admin_pn'];
    $admin_e=  $_POST['admin_e'];
    $admin_sn=  $_POST['admin_sn'];
    $admin_dr=  $_POST['admin_dr'];
    $admin_am=  $_POST['admin_am'];

    $query = $conn1->query("UPDATE addcustdb SET ccompany = '$db_cm', ccontactperson = '$db_cc', cmobile = 'db_pn', cemail =  'db_e', serial_idnum = 'db_sn' WHERE ccompanyid=$cust_id");

    if ($query) {
        $_SESSION['message'] = 'Customer succesfully updated';
        header('Location: customer_add.php');
    } else {
        $_SESSION['message'] = $conn1->error;
        header('Location: customer_add.php');
    }
}


 ?>
 <?php include "includes/header.php"; ?>

    <!-- Navigation -->
<!-- Top Navigation -->
    <?php include "includes/top_navigation.php"; ?>

<!-- Left Navigation -->
    <?php include "includes/side_navigation.php"; ?>
        
        <div id="page-wrapper" class="p-4">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <h2 class="page-header">Update Product</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="admin_cm" class="form-control" value="<?php echo $db_cm ?>">
                            </div>
                            <div class="form-group">
                                <label>Customer Contact</label>
                                <input type="text" name="admin_cc" class="form-control" value="<?php echo $db_cc ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" name="admin_pn" class="form-control" value="<?php echo $db_pn ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="admin_e" class="form-control" value="<?php echo $db_e ?>">
                            </div>
                            <div class="form-group">
                                <label>Serial No.</label>
                                <input type="text" name="admin_sn" class="form-control" value="<?php echo $db_sn ?>">
                            </div>
                            <div class="form-group">
                                <label>Date Registered</label>
                                <input type="text" name="admin_dr" class="form-control" value="<?php echo $db_dr ?>">
                            </div>
                            <div class="form-group">
                                <label>Account Manager</label>
                                <input type="text" name="admin_am" class="form-control" value="<?php echo $db_am ?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary" value="Send">
                                <button type="back" name="back" class="btn btn-primary" onClick="javascript:window.location.href='customer_add.php'; return false">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include "includes/script.php"; ?>
</body>

</html>