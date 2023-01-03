<style>
    <?php include 'css/position_modal.css'; ?>
</style>

<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            
            	<h4 class="modal-title"><b>Add Position</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="position_add.php">
          		  <div class="margin-bottom">
                  	<label for="title" class="label-pos">Position Title</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="title" name="title" required>
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="rate" class="label-pos">Rate per Hr</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="rate" name="rate" required>
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
            	<h4 class="modal-title"><b>Update Position</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="position_edit.php">
            		<input type="hidden" id="posid" name="id">
                <div class="margin-bottom">
                    <label for="edit_title" class="label-pos">Position Title</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_title" name="title">
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_rate" class="label-pos">Rate per Hr</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_rate" name="rate">
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
            	<h4 class="modal-title"><b>Deleting...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="position_delete.php">
            		<input type="hidden" id="del_posid" name="id">
            		<div class="text-center">
	                	<p>DELETE POSITION</p>
	                	<h2 id="del_position" class="bold"></h2>
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


     