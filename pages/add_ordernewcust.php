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
        <form action="" method="post">
          
          <div class="form-group">
            <label>Type</label>
            <select name="t" class="form-control" id="t">
              <option value="#">--SELECT PRODUCT--</option>
              <?php 

              $sql = $conn1->query("SELECT * FROM newproduct");

              while ($row = $sql->fetch_assoc()) {
                echo "<option value=\"".$row['idnewproduct']."\">".$row['newproducts']."</option>";
              }

               ?>
            </select>
            <!-- <input type="text" name="DOS" class="form-control"> -->
          </div>
          <div class="form-group">
            <label>Service/Product</label>
            <select name="D" class="form-control" id="D">
              
            </select>
            <!-- <input type="text" name="DOS" class="form-control"> -->
          </div>
          <div class="form-group">
            <label>From</label>
            <input type="text" name="F" class="form-control">
          </div>
          <div class="form-group">
            <label>To</label>
            <input type="text" name="T" class="form-control">
          </div>
          <div class="form-group">
            <label>SLA</label>
            <input type="text" name="S" class="form-control">
          </div>
           <div class="form-group">
            <label>Capacity</label>
            <input type="text" name="C" class="form-control">
          </div>
           <div class="form-group">
            <label>Annual Charges</label>
            <input type="text" name="A" class="form-control">
          </div>
           <div class="form-group">
            <label>One Time Charges</label>
            <input type="text" name="O" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save1">Add order</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php 

if (isset($_POST['save1'])) {
  
  $type = $_POST['t'];
  $DOS = $_POST['D'];
  $from = $_POST['F'];
  $to = $_POST['T'];
  $SLA = $_POST['S'];
  $CAP = $_POST['C'];
  $AC = $_POST['A'];
  $OTC = $_POST['O'];

  $sql1 = $conn1->query("SELECT * FROM newproduct WHERE idnewproducts = $t");
  $fetch = $sql1->fetch_assoc();

  $type_name1 = $fetch['newproducts'];

  $sql = $conn1->query("INSERT INTO newproduct_orders(t, newservices, new_from, new_to, newsla, newcapacity, new_annualcharges, new) VALUES('$type_name1', '$D', '$F', '$T', '$S', '$C', '$A', '$O')");

  if ($sql) {
    echo "<script>alert('order inserted!')</script>";
  } else {
    echo "<script>alert('error insert order to database')</script>";
  }

}



 ?>