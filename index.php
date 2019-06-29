<?php 
include "includes/db.php";


if (isset($_SESSION['id']) && $_SESSION['role'] == 'staff') {
	
} else {
	header('Location: login.php');
}

 ?>

 <?php
?>


<?php include "includes/header.php"; ?>

    <!-- Navigation -->
<!-- Top Navigation -->
    <?php include "includes/top_navigation.php"; ?>

<!-- Left Navigation -->
    <?php include "includes/side_navigation.php"; ?>
        

        <div id="page-wrapper" class="p-4">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-8">
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
                            <a href="products.php">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8">
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
                            <a href="customers.php">
                                <span class="float-sm-left">View Details</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8">
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
                            <a href="staffs.php">
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
                                            <h5 class="modal-title" id="myModalLabel">Activity logs</h5>
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



<?php include "includes/script.php"; ?>

</body>

</html>
