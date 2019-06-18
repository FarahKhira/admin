<?php 

//ob_start();

include("includes/db.php");
session_start();
$userID = $_SESSION['staffid'];

if(isset($_POST['send'])){
    echo $refNum = $_POST['refNum'];
	$_SESSION['ref_num'] = $refNum;
	$_SESSION['comp'] = $ccompany = $_POST['comp'];
	$_SESSION['con'] = $ccontactperson = $_POST['con'];
    $_SESSION['mob'] = $cmobile= $_POST['mob'];
    $_SESSION['em'] = $cemail = $_POST['em'];
    // echo $ccompany . $ccontactperson . $cmobile . $cemail;
    $query = mysqli_query($connection, "INSERT INTO addcustdb(ccompany, ccontactperson, cmobile, cemail) VALUES ('$ccompany', '$ccontactperson', '$cmobile', '$cemail')");
    if(!$query){
        die('query failed'.mysqli_error($connection));
		exit();
	}else{
		header('Location: newcustdisplay.php');
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

    <title>Staff- New Customer Form</title>

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
                    <i class="fa fa-envelope fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-messages dropdown-menu-right">
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item see-more text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-alerts">
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="float-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item see-more text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-user">
                    <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                        <a href="cust_form.php"><i class="fa fa-tags"></i> New Customers </a>
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
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
            <div id="page-wrapper" class="p-4">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="page-header">Client's Detail</h3>
                    </div>
                    <div class="col-md-12">
                        <img src="../vendor/datatables/images/download.png" alt="" width="255" height="72">
                            <br>
                            <h2><strong>Fibrecomm Network (M) Sdn Bhd (240859-H)</strong></h2>
                            <p>
                                Level 37, Menara TM, Off Jalan Pantai Baharu, 59200 Kuala Lumpur, Malaysia<br>
                                Tel: <a href="#">+603-2246-8400</a><br>
                                Fax: <a href="#">+603-2246-8500</a><br>
                                <a href="#">www.fibrecomm.net.my</a><br>
                            </p>
                            <b>Quotation Date: </b><strong id="year"><a href="#">
                            <?php
                                $dt = new DateTime();
                            echo $dt->format('d-m-Y');
                            ?></a></strong>
                            
                        <h4 class="bg-primary header text-center"><strong>Form</strong></h4>
                    </div>
                        <table>
                    <form action="" method="post" id="userForm">
                        <div class="form-group">
                            <label>Section</label>
                            <select name="sec" id="sec" class="form-control">
                                <option value="DM">DM</option>
                                <option value="GB">GM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="refNum" id="refNum">
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="comp" class="form-control" placeholder="Company" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" name="con" class="form-control" placeholder="Contact Person" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mob" class="form-control" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="em" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="send" id="send_btn" class="btn btn-primary" value="Send">
                            <button type="submit" name="back" class="btn btn-primary" id="Back" onClick="javascript:window.location.href='indexstaff.php'; return false">Back</button>
                        </div>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
</body>
<script src="js/printThis.js"></script>

<script>

// Print area
    // document.getElementById('print_btn').addEventListener('click', function () {
    //     window.print();
    //     PrintElem();
    //     $('.printArea').printThis();
    // });
    // var year = document.getElementById('year');
    data = new Date();
    //data.format("YYYY-m-D");

    $('#year').text(new Date().getFullYear());
    year.textContent = data.toLocaleDateString("en-GB");

    // document.getElementById('category').addEventListener('change', function() {
	// 	var cat = this.value;
	// 	refNum(cat);
	// });

	// button click event
	document.getElementById('userForm').addEventListener('send', function(){
		// e.preventDefault();

		// selection value
		var section = document.getElementById('sec').value;
		// console.log(section);
		refNum(section);

	});

	



	
    // refNum
    function refNum(secValue) {

	// get value from selection
	// var secValue = document.getElementById('sec').value;

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

    var output = 'FCN/'+secValue+'/<?php echo $userID; ?>/'+(totalCustomers + 1) + '' + months + '' + year; 
   // console.log((totalCustomers + 1)+''+months+''+year);
	//document.getElementById('output').innerHTML = output;
	
	var refInput = document.getElementById('refNum');
	refInput.value = output;
	console.log(output);
	
}


    // Print function
</script>
</html>