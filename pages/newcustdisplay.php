<?php 

// ob_start();

include("includes/db.php");
include("includes/db1.php");
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];

if(isset($_POST['submit'])){
    $_SESSION['D'] = $products = $_POST['D'];
    $_SESSION['F'] = $place1 = $_POST['F'];
    $_SESSION['T'] = $place2 = $_POST['T'];
    $_SESSION['S'] = $slaproduct= $_POST['S'];
    $_SESSION['C'] = $capaproduct = $_POST['C'];
    $_SESSION['A'] = $annualproduct = $_POST['A'];
    $_SESSION['O'] = $totalproduct = $_POST['O'];
    echo $products . $place1 . $place2 . $slaproduct . $capaproduct . $annualproduct . $totalproduct;
    $query = mysqli_query($connection, "INSERT INTO product(products, place1, place2, slaproduct, capaproduct, annualproduct, totalproduct) VALUES ('$productss', '$place1', '$place2', '$slaproduct', '$capaproduct', '$annualproduct', '$totalproduct')");
    if(!$query){
        die('query failed'.mysqli_error($connection));
        exit();
    } else{
        header('Location: newcustoutput.php');
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

    <title>Staff-New cust display</title>

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
                            <td><?php echo $_SESSION['comp']; ?></td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td><?php echo $_SESSION['con']; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $_SESSION['mob']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $_SESSION['em']; ?></td>
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
            <p><strong>Order</strong></p>
            <div class="col-lg-12">
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus fa-2x"></i></a>
            <?php include "add_ordernewcust.php"; ?>
            <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center" rowspan="2"><label for="No">No</label></th>
                                <th class="text-center" rowspan="2"><label for="D">Service/Product<label></th>
                                <th class="text-center" rowspan="2"><label for="t">Type</label></th>   
                                <th class="text-center" colspan="2">Location</th>
                                <th class="text-center" rowspan="2"><label for="S">SLA(%)</label></th>
                                <th class="text-center" rowspan="2"><label for="C">Capacity (Mbps)</label></th>
                                <th class="text-center" rowspan="2"><label for="A">Annual Charges(RM/Year)</label></th>
                                <th class="text-center" rowspan="2"><label for="O">One Time Charges(RM)</label></th>
                                <th class="text-center" rowspan="2"><label for="Edit">Edit</label></th>
                                <th class="text-center" rowspan="2"><label for="Delete">Delete</label></th>
                            </tr>
                            <tr>
                                <th class="text-center"><label for="F">From</label></th>
                                <th class="text-center"><label for="T">To</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                                $sql = $conn1->query("SELECT * FROM newproduct_orders");

                                if ($sql) {
                                    
                                    $count = 1;
                                    while ($row = $sql->fetch_assoc()) {
                                        
                                        $id = $row['idnew'];
                                        echo "<tr>";
                                        echo "<td>$count</td>";
                                        echo "<td>".$row['type_new']."</td>";
                                        echo "<td>".$row['newservices']."</td>";
                                        echo "<td>".$row['new_from']."</td>";
                                        echo "<td>".$row['new_to']."</td>";
                                        echo "<td>".$row['newsla']."</td>";
                                        echo "<td>".$row['newcapacity']."</td>";
                                        echo "<td>".$row['new_annualcharges']."</td>";
                                        echo "<td>".$row['new_otc']."</td>";
                                        echo "<td><a href=\"editcustorder.php?id=$id\"><i class=\"fa fa-edit\"></i></a></td>";
                                        echo "<td><a href=\"delcustorder.php?id=$id\" onclick=\"return confirm('Are you sure you want to delete this order?')\">X</a></td>";
                                        echo "</tr>";
                                        $count++;
                                    }
                                }

                                ?>
                                
                        </tbody>
                    </table>
                </div>
            </div>
            </form>
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
            <p></p>
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
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

    $('#type').on('change', function(){
        var type_newid = $(this).val();

        $.ajax({
            url: "process_newtype.php",
            method: "POST",
            data: {type_newid: type_newid},
            dataType: "text",
            success: function(data){
                $('#D').html(data);
            }
        });


    });


   

    



    
   


    // Print function
</script>


</html>