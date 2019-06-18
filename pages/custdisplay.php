<?php 

// ob_start();

include("includes/db.php");
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];

if(isset($_POST['submit'])){
    $_SESSION['DOS'] = $services = $_POST['DOS'];
    $_SESSION['from'] = $Location1 = $_POST['from'];
    $_SESSION['to'] = $Location2 = $_POST['to'];
    $_SESSION['SLA'] = $sla= $_POST['SLA'];
    $_SESSION['CAP'] = $capacity = $_POST['CAP'];
    $_SESSION['AC'] = $annualcharge = $_POST['AC'];
    $_SESSION['OTC'] = $total = $_POST['OTC'];
    //echo $services . $location1 . $Location2 . $sla . $capacity . $annualcharge . $total;
    $query = mysqli_query($connection, "INSERT INTO quotation(services, Location1, Location2, sla, capacity, annualcharge, total) VALUES ('$services', '$Location1', '$Location2', '$sla', '$capacity', '$annualcharge', '$total')");
    if(!$query){
        die('query failed'.mysqli_error($connection));
        exit();
    } else{
        header('Location: output.php');
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

    <title>Staff-New cust output</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid #cdcdcd;
        }
        table th, table td{
            padding: 10px;
            text-align: left;
        }
    </style>
    
</head>

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
                        <a href="cust_form.php"><i class="fa fa-tags"></i> New Customer </a>
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
            <div id="page-wrapper" class="p-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../vendor/datatables/images/download.png" alt="" width="255" height="72">
                                <br>
                                <h2><strong>Fibrecomm Network (M) Sdn Bhd (240859-H)</strong></h2>
                                <p>
                                    Level 37, Menara TM, Off Jalan Pantai Baharu, 59200 Kuala Lumpur, Malaysia<br>
                                    Tel: <a href="#">+603-2246-8400</a><br>
                                    Fax: <a href="#">+603-2246-8500</a><br>
                                    <a href="#">www.fibrecomm.net.my</a><br>
                                    Serial No.: <a href="#"><?php echo $_SESSION['ref_num']; ?></a>
                                </p>
                                <b>Quotation Date: </b><strong id="year"><a href="#">
                                <?php
                                    $dt = new DateTime();
                                echo $dt->format('d-m-Y');
                                ?></a></strong>
                            <h4 class="bg-primary header text-center"><strong>QUOTATION /PROPOSAL</strong></h4>
     
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
                            <div class="row" id="order">
                                <div class="col-md-12">
                                    <table class="table1 table-bordered" id="tb">
                                        <thead class="bg-primary">
                                            <tr class="tr-header">
                                                <th class="text-center" rowspan="2"><label for="No">No</label></th>
                                                <th class="text-center" rowspan="2"><label for="DOS">Service/Product<label></th>
                                                <th class="text-center" colspan="2">Location</th>
                                                <th class="text-center" rowspan="2"><label for="SLA">SLA(%)</label></th>
                                                <th class="text-center" rowspan="2"><label for="CAP">Capacity (Mbps)</label></th>
                                                <th class="text-center" rowspan="2"><label for="AC">Annual Charges(RM/Year)</label></th>
                                                <th class="text-center" rowspan="2"><label for="OTC">One Time Charges(RM)</label></th>
                                                <th class="text-center" rowspan="2"><label>Add row</label></th>
                                            </tr>
                                            <tr>
                                                <th class="text-center"><label for="form">From</label></th>
                                                <th class="text-center"><label for="to">To</label></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="record"></td>
                                                <td><input type="DOS" id="DOS" placeholder="" name="DOS"></td>
                                                <td><input type="from" id="from" placeholder="" name="from"></td>
                                                <td><input type="to" id="to" placeholder="" name="to"></td>
                                                <td><input type="SLA" id="SLA" placeholder="" name="SLA"></td>
                                                <td><input type="CAP" id="CAP" placeholder="" name="CAP"></td>
                                                <td><input type="AC" id="AC" placeholder="" name="AC"></td>
                                                <td><input type="OTC" id="OTC" placeholder="" name="OTC"></td>
                                                <td><input type="button" class="add-row" value="Add Row"></td>
                                            </tr>
                                            </div>
                                        </tbody>
                                    </table>
                                    <button type="button" class="delete-row">Delete Row</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="modal-footer">
                                        <input type="submit" name="back" id="back_btn" class="btn btn-primary"  onClick="javascript:window.location.href='customer.php'; return false" value="Back">
                                        <input type="submit" name="submit" id="submit_btn" class="btn btn-primary" onClick="javascript:window.location.href='output.php'; return false" value="Submit">
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="notes"><br>
                                        <p><strong>Notes</strong></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            <form action="">
                                                <input type="text" id="list" class="form-control" placeholder="add notes">
                                                <input type="submit" id="submit" value="Add" class="btn btn-primary">
                                                <input type="submit" id="remove" value="Delete" class="btn btn-primary">
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                        <ol>
                                            <li>The price quoted is valid for one (1) month from the date of this quotation.</li>
                                            <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>
                                            <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>
                                            <li>Early termination will incur penalty of 100% of the remaining contract value.</li>
                                            <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at any
                                                time.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                &copy; Copyright 2019 - Fibrecomm Network
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var No = $("#No").val();
            var DOS = $("#DOS").val();
            var SLA = $("#SLA").val();
            var CAP = $("AC").val();
            var AC = $("OTC").val();
            var From = $("From").val();
            var To = $("To").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + No + "</td><td>" + DOS + "</td><td>" + SLA +"</td><td>" + CAP +"</td><td>" + AC +"</td><td>" + OTC +"</td><td>" + From +"</td><td>" + To +"</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!!")
                }
            });
        });
    });    
    </script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function(){

        $('#submit').on('click', function(e){
            e.preventDefault();
            
            var list = $('#list').val();
            var string = "<li>"+list+"</li>";
            $('ol').append(string);
        });

        $('#remove').on('click', function(e){
            $("list")
        })
    });

</script>
</html>