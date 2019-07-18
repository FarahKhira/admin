<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          
          <div class="form-group">
            <label>Type</label>
            <select name="type" class="form-control" id="type">
              <option value="#">--SELECT PRODUCT--</option>
              <?php 

              $sql = $conn1->query("SELECT * FROM product");

              while ($row = $sql->fetch_assoc()) {
                echo "<option value=\"".$row['idproduct']."\">".$row['products']."</option>";
              }

               ?>
            </select>
            <!-- <input type="text" name="DOS" class="form-control"> -->
          </div>
          <div class="form-group">
            <label>Service/Product</label>
            <select name="DOS" class="form-control" id="DOS">
              
            </select>
            <!-- <input type="text" name="DOS" class="form-control"> -->
          </div>
          <div class="form-group">
            <label>From</label>
            <input type="text" name="from" class="form-control">
          </div>
          <div class="form-group">
            <label>To</label>
            <input type="text" name="to" class="form-control">
          </div>
          <div class="form-group">
            <label>SLA</label>
            <input type="text" name="SLA" class="form-control">
          </div>
           <div class="form-group">
            <label>Capacity</label>
            <input type="text" name="CAP" class="form-control">
          </div>
           <div class="form-group">
            <label>Annual Charges</label>
            <input type="text" name="AC" class="form-control">
          </div>
           <div class="form-group">
            <label>One Time Charges</label>
            <input type="text" name="OTC" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Add order</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php 

if (isset($_POST['save'])) {
  
  $type = $_POST['type'];
  $DOS = $_POST['DOS'];
  $from = $_POST['from'];
  $to = $_POST['to'];
  $SLA = $_POST['SLA'];
  $CAP = $_POST['CAP'];
  $AC = $_POST['AC'];
  $OTC = $_POST['OTC'];

  $sql1 = $conn1->query("SELECT * FROM product WHERE idproduct = $type");
  $fetch = $sql1->fetch_assoc();

  $type_name = $fetch['products'];

  $sql = $conn1->query("INSERT INTO product_orders(type, services_products, from_to, to_from, sla, capacity, annual_charges, otcharges, customer_id) VALUES('$type_name', '$DOS', '$from', '$to', '$SLA', '$CAP', '$AC', '$OTC', '$customer_id')");

  if ($sql) {
    echo "<script>alert('order inserted!')</script>";
  } else {
    echo "<script>alert('error insert order to database')</script>";
  }

}



 ?>