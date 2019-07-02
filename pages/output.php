<?php 

// ob_start();

include("includes/db.php");
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff-New cust output</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<body>
<div id="wrapper">
    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="" href="indexstaff.php"><img src="../vendor/datatables/images/download.png" width="200" height="60"></a>
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
                        <a href="listcust.php"><i class="fa fa-tags"></i> Customers </a>
                    </li>
                    <li class="list-group-item">
                        <a href="cust_form.php"><i class="fa fa-users fa-fw"></i> New Customer </a>
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
                        <img src="../vendor/datatables/images/download.png" alt="" width="255" height="72">
                        <br>
                        <h3><strong>Fibrecomm Network (M) Sdn Bhd (240859-H)</strong></h3>
                        <p>
                            Level 37, Menara TM, Off Jalan Pantai Baharu, 59200 Kuala Lumpur, Malaysia<br>
                            Tel: <a href="#">+603-2246-8400</a><br>
                            Fax: <a href="#">+603-2246-8500</a><br>
                            <a href="#">www.fibrecomm.net.my</a><br>
                            Serial No.: <a href="#"><?php echo $_SESSION['ref_num']; ?></a>
                        </p>
                        <p><b>Quotation Date: </b><strong id="year">
                        <a href="#">
                        <?php
                            $dt = new DateTime();
                        echo $dt->format('d-m-Y');
                        ?></a></strong>

                        <h4 class="bg-primary header text-center"><strong>QUOTATION /PROPOSAL</strong></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <th width="150">Company</th>
                            <td><?php echo $_SESSION['company']; ?></td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td><?php echo $_SESSION['contact_person']; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $_SESSION['mobile_person']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $_SESSION['email_person']; ?></td>
                        </tr>
                    </table><br>
                    <table>
                        <tr>
                            <th width="150">Prepared by</th>
                            <td><?php echo $username; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $mobile; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <p><h4><strong>Order</strong></h4></p>
            <div class="row">
                <div class="col-md-12">
                    <table class="table1 table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center" rowspan="2"><label for="No">No</label></th>
                                <th class="text-center" rowspan="2"><label for="DOS">Service/Product<label></th>
                                <th class="text-center" colspan="2">Location</th>
                                <th class="text-center" rowspan="2"><label for="SLA">SLA(%)</label></th>
                                <th class="text-center" rowspan="2"><label for="CAP">Capacity (Mbps)</label></th>
                                <th class="text-center" rowspan="2"><label for="AC">Annual Charges(RM/Year)</label></th>
                                <th class="text-center" rowspan="2"><label for="OTC">One Time Charges(RM)</label></th>
                            </tr>
                            <tr>
                                <th class="text-center"><label for="form">From</label></th>
                                <th class="text-center"><label for="to">To</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form class="form-control">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><?php echo $_SESSION['DOS']?></td>
                                    <td class="text-center"><?php echo $_SESSION['from']?></td>
                                    <td class="text-center"><?php echo $_SESSION['to']?></td>
                                    <td class="text-center"><?php echo $_SESSION['SLA']?></td>
                                    <td class="text-center"><?php echo $_SESSION['CAP']?></td>
                                    <td class="text-center"><?php echo $_SESSION['AC']?></td>
                                    <td class="text-center"><?php echo $_SESSION['OTC']?></td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="notes"><br>
                        <p><strong>Notes</strong></p>
                        <ol>
                            <li>The price quoted is valid for one (1) month from the date of this quotation.</li>
                            <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>
                            <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>
                            <li>Payment shall be made quartely in advance.</li>
                            <li>Early termination will incur penalty of 100% of the remaining contract value.</li>
                            <li>Other terms and conditions are as per exciting Fibrecomm's Master Service Agreement and
                                new Service Order Form.</li>
                            <li>The guaranteed SLA is 99.0%.</li>
                            <li>Ready For services (RFS) is 4 to 8 weeks upon receipt of confirmation from customer.
                            </li>
                            <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at any
                                time.</li>
                            <li>Fibrecomm to provide 10Gigabit Ethernet Interface.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="modal-footer">
                <div id="container">
                    <div class="col-md-12">
                        <input type="submit" name="home" id="home_btn" class="btn btn-primary"  onClick="javascript:window.location.href='index.php'; return false" value="Home">
                        <input type="submit" name="edit" id="edit_btn" class="btn btn-primary"  onClick="javascript:window.location.href='custdisplay.php'; return false" value="Edit">
                        <input type="button" name="save" id="save_btn" class="btn btn-primary" value="Save">
                        <input type="button" name="pdf" id="pdf_btn" class="btn btn-primary" value="Pdf">
                        <input type="button" name="print" id="print_btn" class="btn btn-primary" value="Print">
                    </div>
                </div>
            </div>
        </div>
        <div class="printArea">
            <div class="row">
                <div class="col-md-12">
                    &copy; Copyright 2019 - Fibrecomm Network
                </div>
            </div>
        </div>   
    </div>
</div>
</body>
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script src="js/printThis.js"></script>

<script>

// Print area
    document.getElementById('print_btn').addEventListener('click', function () {
        window.print();
        PrintElem();
        $('.printArea').printThis();
    });
    var year = document.getElementById('year');
    data = new Date();
    data.format("YYYY-m-D");

    $('#year').text(new Date().getFullYear());
    year.textContent = data.toLocaleDateString("en-GB");

    
    // refNum
    function refNum(cat = 'DM') {

    var totalCustomer = 0;
    var d = new Date();
    var year = d.getFullYear();
    var month = d.getMonth()+1;

    if (totalCustomer < 100) {
        totalCustomers = '0'+totalCustomer;
    } else {
        totalCustomers = totalCustomer;
    }
    if (month < 10) {
        months = '0'+month;
    } else {
        months = month;
    }

    var output = 'FCN/'+cat+'/FSF/'+(totalCustomers + 1) + '' + months + '' + year; 
    console.log((totalCustomers + 1)+''+months+''+year);
    document.getElementById('output').innerHTML = output;
     

    
}


    // Print function
</script>
</html>