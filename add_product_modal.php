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
        <form action="add_product.php" method="post">
          <div class="form-group">
            <label>Product</label>
            <input type="text" name="product_item" class="form-control">
          </div>
          <div class="form-group">
            <label>Type</label>
            
             <select name="product_type" class="form-control">
            <?php 

            $sql = $conn1->query("SELECT * FROM product");
            while ($row = $sql->fetch_assoc()) {
              echo "<option value=".$row['idproduct'].">".$row['products']."</option>";
            }

             ?>
               
             </select>
          <!--   <input type="text" name="division" class="form-control"> -->
          </div>
          <div class="form-group">
            <label>Date Created</label>
            <input type="text" name="date_itemcreated" class="form-control">
          </div>
          <div class="form-group">
            <label>Date Modified</label>
            <input type="text" name="date_itemmodified" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>