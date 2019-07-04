<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" method="post" id="userForm">
              <div class="form-group" center>
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
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['add'])) {

  $sec = $_POST['sec'];
  $refNum = $_POST['refNum'];
  $comp = $_POST['comp'];
  $con = $_POST['con'];
  $mob = $_POST['mob'];
  $em = $_POST['em'];

 
 $sql = $conn1->query("INSERT INTO addcustdb(ccompany, ccontactperson, cmobile, cemail, serial_idnum) VALUES('$comp', '$con', '$mob', '$em', '$refNum')");

 if ($sql) {
   echo "<script>alert('new customer added!')</script>";
 } else {
  //$error = $conn1->error;
   //echo "<script>alert('$error')</script>";
  die($conn1->error);
 }

}


 ?>