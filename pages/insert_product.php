<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products-Insert Product</title>

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
                <a class="" href="index.php"><img src="../vendor/datatables/images/download.png" width="200"
                        height="60"></a>
                <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                    aria-label="Toggle navigation" style="
">
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
                        <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <a href="view_customer.php">View Customer </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="edit_customer.php">Edit Customers </a>
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
                                    <a href="view_staff.php">View Staff</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                <div class="row">
                    <div class="col-xl-12">
                        <h3 class="page-header">Insert Product</h3>
                    </div>
                    <!-- /.col-xl-12 -->
                </div>
                <!-- /.row -->
                <div class="bs-container">
                    <div class="bs-cell-row">
                        <div class="bs-container bs-cell">
                            <form action="" method="post" enctype="multipart/form-data">
                                <table class="bs-table bs-border">
                                    <tbody>
                                        <tr>
                                            <th style="width: 20%"> Name of Product </th>
                                            <td><input type="text" class="bs-input bs-border" placeholer="Fibre Optic"
                                                    name="nop" id="nop" required autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th>Product Type</th>
                                            <td>
                                                <select name="product_type" class="bs-input bs-border" id="" required>
                                                    <option value="">Please Select</option>
                                                    <option value="1Y">1 year contract</option>
                                                    <option value="3Y">3 years contract</option>
                                                    <option value="5Y">5 years contract</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Attachment</th>
                                            <td><input type="file" name="file_img[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td><textarea name="detail" id="" cols="30" rows="10"
                                                    placeholder="What's up.." class="bs-input bs-border"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Date of Product</th>
                                            <td><input type="text" name="date" id="datepicker" class="bs-input bs-border" autocomplete="off" readonly>
                                                <span id="check_date"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspam="2" class="bs-center"><input type="submit" name="save" class="bs-button bs-light-blue" id="save" value="Save changes">
                                                <input type="reset" name="reset" class="bs-button bs-light-blue" value="Cancel">
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>