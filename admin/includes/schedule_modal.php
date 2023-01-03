<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<h4 class="modal-title"><b>Add Schedule</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="schedule_add.php">
          		  <div class="margin-bottom">
                  	<label for="time_in" class="label-pos">Time In</label>

                  	<div class="label-padding">

                    	 <input type="text" class="time-pick timepicker" id="time_in" name="time_in" required>

                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="time_out" class="label-pos">Time Out</label>

                    <div class="label-padding">

                        <input type="text" class="time-pick timepicker" id="time_out" name="time_out" required>

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
            	<h4 class="modal-title"><b>Update Schedule</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="schedule_edit.php">
            		<input type="hidden" id="timeid" name="id">
                <div class="margin-bottom">
                    <label for="edit_time_in" class="label-pos">Time In</label>

                    <div class="label-padding">

                        <input type="text" class="time-pick timepicker" id="edit_time_in" name="time_in">
                      </div>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_time_out" class="label-pos">Time out</label>

                    <div class="label-padding">

                        <input type="text" class="time-pick timepicker" id="edit_time_out" name="time_out">
                      </div>
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
            	<form class="form-horizontal" method="POST" action="schedule_delete.php">
            		<input type="hidden" id="del_timeid" name="id">
            		<div class="text-center">
	                	<p>DELETE SCHEDULE</p>
	                	<h2 id="del_schedule" class="bold"></h2>
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


     