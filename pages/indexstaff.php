<?php 

// ob_start();

include("../pages/includes/db.php");
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

    <title>E-Quotation System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-user">
                    <a class="dropdown-item" href="user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                        <a href="cust_form.php"><i class="fa fa-users fa-fw"></i> New Customers </a>
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
                <div class="col-xl-6 col-lg-12">
                    <div class="card card-primary card-inverse">
                        <div class="card-header card-primary">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Customers!</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-default">
                            <a href="javascript:;">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card card-red card-inverse">
                        <div class="card-header card-red">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Customers!</div>
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

                        <button class="open-button" onclick="openForm()">Chat</button>

                        <div class="chat-popup" id="myForm">
                        <form action="/action_page.php" class="form-container">
                            <h2>Chat</h2>

                            <label for="msg"><b>Message</b></label> 
                            <textarea placeholder="Type message.." name="msg" required></textarea>

                            <button type="submit" class="btn">Send</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                        </div>
                    </div>
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

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</html>
