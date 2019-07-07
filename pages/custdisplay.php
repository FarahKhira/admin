<?php 

// ob_start();

include("includes/db.php");
include("includes/db1.php");
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];

// if(isset($_POST['submit'])){
//     $_SESSION['DOS'] = $services = $_POST['DOS'];
//     $_SESSION['from'] = $Location1 = $_POST['from'];
//     $_SESSION['to'] = $Location2 = $_POST['to'];
//     $_SESSION['SLA'] = $sla= $_POST['SLA'];
//     $_SESSION['CAP'] = $capacity = $_POST['CAP'];
//     $_SESSION['AC'] = $annualcharge = $_POST['AC'];
//     $_SESSION['OTC'] = $total = $_POST['OTC'];
//     //echo $services . $location1 . $Location2 . $sla . $capacity . $annualcharge . $total;
//     $query = mysqli_query($connection, "INSERT INTO quotation(services, Location1, Location2, sla, capacity, annualcharge, total) VALUES ('$services', '$Location1', '$Location2', '$sla', '$capacity', '$annualcharge', '$total')");
//     if(!$query){
//         die('query failed'.mysqli_error($connection));
//         exit();
//     } else{
//         header('Location: output.php');
//     }
// }

if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];

    $sql = $conn1->query("SELECT * FROM addcustdb WHERE ccompanyid = $customer_id");
    $fetch = $sql->fetch_assoc();

    $db_company = $fetch['ccompany'];
    $db_contact_person = $fetch['ccontactperson'];
    $db_mobile = $fetch['cmobile'];
    $db_email = $fetch['cemail'];
    $db_serial_number = $fetch['serial_idnum'];
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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <style type="text/css">
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        /*table {
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
        }*/
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
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-user">
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
                            Serial No.: <a href="#"><?php echo $db_serial_number; ?></a>
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
                            <td><?php echo $db_company; ?></td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td><?php echo $db_contact_person; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $db_mobile; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $db_email; ?></td>
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
            <div class="col-lg-12">
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus fa-2x"></i></a>
            <?php include "add_ordercust.php"; ?>
            <div class="row">
                <div class="col-md-12">

                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th class="text-center" rowspan="2"><label for="No">No</label></th>
                            <th class="text-center" rowspan="2"><label for="DOS">Service/Product<label></th>
                            <th class="text-center" rowspan="2"><label for="type">Type</label></th>   
                            <th class="text-center" colspan="2">Location</th>
                            <th class="text-center" rowspan="2"><label for="SLA">SLA(%)</label></th>
                            <th class="text-center" rowspan="2"><label for="CAP">Capacity (Mbps)</label></th>
                            <th class="text-center" rowspan="2"><label for="AC">Charges (RM/USD)</label></th>
                            <th class="text-center" rowspan="2"><label for="OTC">One Time Charges(RM/USD)</label></th>
                            <th class="text-center" rowspan="2"><label for="Edit">Edit</label></th>
                            <th class="text-center" rowspan="2"><label for="Delete">Delete</label></th>
                        </tr>
                        <tr>
                            <th class="text-center"><label for="form">From</label></th>
                            <th class="text-center"><label for="to">To</label></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        $sql = $conn1->query("SELECT * FROM product_orders WHERE customer_id = $customer_id");

                        if ($sql) {
                            
                            $count = 1;
                            while ($row = $sql->fetch_assoc()) {
                                
                                $id = $row['id'];
                                echo "<tr>";
                                echo "<td>$count</td>";
                                echo "<td>".$row['type']."</td>";
                                echo "<td>".$row['services_products']."</td>";
                                echo "<td>".$row['from_to']."</td>";
                                echo "<td>".$row['to_from']."</td>";
                                echo "<td>".$row['sla']."</td>";
                                echo "<td>".$row['capacity']."</td>";
                                echo "<td>".$row['annual_charges']."</td>";
                                echo "<td>".$row['otcharges']."</td>";
                                echo "<td><a href=\"editcustorder.php?id=$id\"><i class=\"fa fa-edit\"></i></a></td>";
                                echo "<td><a href=\"delcustorder.php?id=$id&customerid=$customer_id\" onclick=\"return confirm('Are you sure you want to delete this order?')\">X</a></td>";
                                echo "</tr>";
                                $count++;
                            }
                        }

                         ?>
                        
                    </tbody>
                </table>
                </div>
            </div>
               
            <div class="row">
               
                    <div class="col-lg-12">
                        <?php 

                        $sql1 = $conn1->query("SELECT * FROM notes WHERE customer_id = $customer_id");
                        $count = $sql1->num_rows;

                        $row = $sql1->fetch_assoc();
                        $id = $row['id'];
                        $notes = $row['notes_user'];


                        if ($count == 1) {
                           echo "<a href=\"edit_notes.php?id=$id&customer_id=$customer_id\" class=\"btn btn-default\" ><i class=\"fa fa-edit fa-2x\"></i></a>";
                        } else {
                            echo "<a href=\"#\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exampleModalCenter2\"><i class=\"fa fa-plus fa-2x\"></i></a>";
                        }

                         ?>
                        
                        <?php include "notes_modal.php"; ?>
                        <div class="notes">
                            <?php 
                            if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                            }

                             ?>
                            <p><strong>Notes</strong></p>
                            <?php 

                           

                            echo $notes;

                             ?>
                        </div>
                    </div>
                    
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="output.php?id=<?php echo $customer_id ?>" class="btn btn-primary pull-right">Print</a>
                </div>
                <div class="col-md-12">
                    &copy; Copyright 2019 - Fibrecomm Network
                </div>
                
            </div>
        </div>
    </div>
</div>


</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  -->
<script src="../vendor/popper/popper.min.js"></script>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->

<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
x

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    // $(document).ready(function(){

    //     $('#submit').on('click', function(e){
    //         e.preventDefault();
            
    //         var list = $('#list').val();
    //         var string = "<li>"+list+"</li>";
    //         $('ol').append(string);
    //     });

    //     $('#remove').on('click', function(e){
    //         $("list")
    //     })
    // });

</script>
<script>
    

    $('#type').on('change', function(){
        var type_id = $(this).val();

        $.ajax({
            url: "process_type.php",
            method: "POST",
            data: {type_id: type_id},
            dataType: "text",
            success: function(data){
                $('#DOS').html(data);
            }
        });


    });


   

    



    
   


    // Print function
</script>
</html>