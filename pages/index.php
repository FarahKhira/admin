<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Quotation System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="" href="index.php"><img src="../vendor/datatables/images/download.png" width="200" height="60"></a>
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
                            <strong>Khira</strong>
                            <span class="float-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Please do check for this customer details.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>Khira</strong>
                            <span class="float-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Need to edit the product contract...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>Farah</strong>
                            <span class="float-right text-muted">
                                        <em>Today</em>
                                    </span>
                        </div>
                        <div>Admin, please do recheck the price for fibre optic contract...</div>
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
                            <i class="fa fa-users fa-fw"></i> New Comment
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
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-tags"></i> Products<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="insert_product.php"> Insert Product </a>
                            </li>
                            <li class="list-group-item">
                                <a href="view_product.php"> View Products </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-users fa-fw"></i> Customers<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="view_customer.php"> View Customer </a>
                            </li>
                            <li class="list-group-item">
                                <a href="buttons.html">Edit Customers </a>
                            </li>
                        </ul>
                        <!-- /.nav-second -->
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Staffs<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="reg_staff.php">Register Staff</a>
                            </li>
                            <li class="list-group-item">
                                <a href="grid.html">View Staff</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Settings<span class="fa arrow"></span></a>
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-primary card-inverse">
                        <div class="card-header card-primary">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Products!</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-default">
                            <a href="flot.html">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-green card-inverse">
                        <div class="card-header card-green">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Customers!</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-green">
                            <a href="javascript:;">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-yellow card-inverse">
                        <div class="card-header card-yellow">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-edit fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Staffs!</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-yellow">
                            <a href="javascript:;">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-red card-inverse">
                        <div class="card-header card-red">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">13</div>
                                    <div>About!</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-red">
                            <a href="javascript:;">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">Status</div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Modal -->
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">History
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <table width="100%" class="table table-striped table-bordered table-hover"
                                               id="dataTables-example">
                                               <thead>
                                                   <tr>
                                                       <th>Date</th>
                                                       <th>Account Manager</th>
                                                       <th>Customer</th>
                                                       <th>Section</th>
                                                       <th>Status</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr class="odd D">
                                                       <td>1/6/19</td>
                                                       <td>Farah Khira</td>
                                                       <td>Company A</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                                   <tr class="even C">
                                                       <td>2/6/19</td>
                                                       <td>Syasya</td>
                                                       <td>Company C</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Cancel</td>
                                                   </tr>
                                                   <tr class="odd P">
                                                       <td>3/6/19</td>
                                                       <td>Fakhira</td>
                                                       <td>Company B</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Pending</td>
                                                   </tr>
                                                   <tr class="even K">
                                                       <td>4/6/19</td>
                                                       <td>Lee</td>
                                                       <td>Company F</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">KIV</td>
                                                   </tr>

                                                   <tr class="D">
                                                       <td>5/6/19</td>
                                                       <td>Orange</td>
                                                       <td>Company W</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">D</td>
                                                   </tr>
                                                   <tr class="K">
                                                       <td>6/6/19</td>
                                                       <td>Anna</td>
                                                       <td>Anna Enterprise</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">KIV</td>
                                                   </tr>
                                                   <tr class="C">
                                                       <td>7/6/19</td>
                                                       <td>Loi</td>
                                                       <td>Company L</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Cancel</td>
                                                   </tr>
                                                   <tr class="P">
                                                       <td>8/6/19</td>
                                                       <td>Opera </td>
                                                       <td>Company I</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Pending</td>
                                                   </tr>
                                                   <tr class="E">
                                                       <td>9/6/19</td>
                                                       <td>Nel</td>
                                                       <td>Company N</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Edit</td>
                                                   </tr>
                                                   <tr class="E">
                                                       <td>10/6/19</td>
                                                       <td>Billie</td>
                                                       <td>Company E</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Edit</td>
                                                   </tr>
                                                   <tr class="K">
                                                       <td>11/6/19</td>
                                                       <td>Konq</td>
                                                       <td>Company K</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">KIV</td>
                                                   </tr>
                                                   <tr class="P">
                                                       <td>12/6/19</td>
                                                       <td>Pixie</td>
                                                       <td>Company X</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Pending</td>
                                                   </tr>
                                                   <tr class="C">
                                                       <td>13/6/19</td>
                                                       <td>Mahmed</td>
                                                       <td>Company M</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Cancel</td>
                                                   </tr>
                                                   <tr class="E">
                                                       <td>14/6/19</td>
                                                       <td>Intan</td>
                                                       <td>Company T</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Edit</td>
                                                   </tr>
                                                   <tr class="D">
                                                       <td>15/6/19</td>
                                                       <td>Daniel</td>
                                                       <td>Company L</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                                   <tr class="D">
                                                       <td>16/8/19</td>
                                                       <td>Fuad</td>
                                                       <td>Company U</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                                   <tr class="K">
                                                       <td>17/6/19</td>
                                                       <td>Farah Khira</td>
                                                       <td>Company Q</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">KIV</td>
                                                   </tr>
                                                   <tr class="E">
                                                       <td>18/6/19</td>
                                                       <td>Syasya</td>
                                                       <td>Company O</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Edit</td>
                                                   </tr>
                                                   <tr class="D">
                                                       <td>19/6/19</td>
                                                       <td>Dillo</td>
                                                       <td>Cing Enterprise</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                                   <tr class="D">
                                                       <td>20/6/19</td>
                                                       <td>Litto</td>
                                                       <td>Company L</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                                   <tr class="gradeX">
                                                       <td>21/6/19</td>
                                                       <td>Lynx</td>
                                                       <td>Company S</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">X</td>
                                                   </tr>
                                                   <tr class="gradeC">
                                                       <td>22/6/19</td>
                                                       <td>Iela</td>
                                                       <td>Microsoft</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Cancel</td>
                                                   </tr>
                                                   <tr class="gradeC">
                                                       <td>23/4/19</td>
                                                       <td>PSP browser</td>
                                                       <td>PSP</td>
                                                       <td class="center">DM</td>
                                                       <td class="center">Cancel</td>
                                                   </tr>
                                                   <tr class="Done">
                                                       <td>24/4/19</td>
                                                       <td>Queen</td>
                                                       <td>Queen Oliver</td>
                                                       <td class="center">GM</td>
                                                       <td class="center">Done</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- .card-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <form name="form1">
            Enter Your Chatname: <input type="text" name="uname" style="width:200px;"><br>
            Your Message: <br>
            <textarea name="msg" style="width:200px; height:70px"></textarea><br>
            <a href="#" onclick="submitChat()">Send</a><br><br>

            <div id="imageload" style="display:none;">
                <img src="1-0.gif">
            </div>

            <div id="chatlogs">
                LOADING CHATLOGS PLEASE WAIT... <img src="1-0.gif">
            </div>
        </div>
        <!-- /#wrapper -->
    </div>
</div>



<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true,
            drawCallback: function () {
                $('#dataTables-example_wrapper .row:last-child').addClass(
                    'mb-1 align-items-baseline');
            }
        });
    });

    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }

    function submitChat() {
        if(form1.uname.value == '' || form1.msg.value == '') {
            alert('ALL FIELDS ARE MANDATORY!!!');
            return;
        }
        form1.uname.readOnly = true;
        form1.uname.style.border = 'none';
        $('$imageload').show();
        var uname = form1.uname.value;
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState==4&&xmlhttp.status==200) {
                    document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                    $('$imageload').hide();
                }
            }
        xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$(#chatlogs).load('logs.php');}, 2000);
    });

</script>

</body>

</html>
