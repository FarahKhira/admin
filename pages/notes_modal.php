<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <label>Notes</label>
            <textarea name="notes" class="form-control" rows="10" id="summernote">
              <ol>
                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>
                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>
                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>
                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>
                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li>
              </ol>
            </textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['submit'])) {
  $notes = $_POST['notes'];

  $sql = $conn1->query("INSERT INTO notes(customer_id, notes_user) VALUES($customer_id, '$notes')");
  if ($sql) {
    echo "<script>alert('notes inserted')</script>";
  } else {
    echo "<script>alert('notes not inserted')</script>";
  }
}


 ?>