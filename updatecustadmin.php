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
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customers-Update customer</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<body>
<div id="wrapper">
    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="" href="indexstaff.php"><img src="vendor/datatables/images/download.png" width="200" height="60"></a>
            <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                    aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <ul class="nav navbar-nav ml-md-auto flex-row navbar-top-links">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-user">
                    <a class="dropdown-item" href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="d-md-flex">
        <div class="sidebar" role="navigation">
            <div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
                <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-white" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="list-group-item">
                        <a href="indexstaff.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="cust_form.php"><i class="fa fa-tags"></i> Customers </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="user_profile.php">Profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="login.php">Logout</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>

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

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
</body>

</html>