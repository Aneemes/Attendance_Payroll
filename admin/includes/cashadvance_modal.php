<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h4 class="modal-title"><b>Add Cash Advance</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_add.php">
          		  <div class="margin-bottom">
                  	<label for="employee" class="label-pos">Employee ID</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="employee" name="employee" required>
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="amount" class="label-pos">Amount</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="amount" name="amount" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="save-button" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal opacity-0" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h4 class="modal-title"><b><span class="date"></span> - <span class="employee_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_edit.php">
            		<input type="hidden" class="caid" name="id">
                <div class="margin-bottom">
                    <label for="edit_amount" class="label-pos">Amount</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_amount" name="amount" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="update-pos" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal opacity-0" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h4 class="modal-title"><b><span class="date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_delete.php">
            		<input type="hidden" class="caid" name="id">
            		<div class="text-center">
	                	<p>DELETE CASH ADVANCE</p>
	                	<h2 class="employee_name bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="delete-button" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     