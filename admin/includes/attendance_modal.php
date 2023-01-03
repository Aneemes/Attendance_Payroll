<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h4 class="modal-title"><b>Add Attendance</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="attendance_add.php">
          		  <div class="margin-bottom">
                  	<label for="employee" class="label-pos">Employee ID</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="employee" name="employee" required>
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="datepicker_add" class="label-pos">Date</label>

                    <div class="label-padding"> 
                      <div class="date">
                        <input type="text" class="pos-input-field" id="datepicker_add" name="date" required>
                      </div>
                    </div>
                </div>
                <div class="margin-bottom">
                  	<label for="time_in" class="label-pos">Time In</label>

                  	<div class="label-padding">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="pos-input-field timepicker" id="time_in" name="time_in">
                    	</div>
                  	</div>
                </div>
                <div class="margin-bottom">
                  	<label for="time_out" class="label-pos">Time Out</label>

                  	<div class="label-padding">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="pos-input-field timepicker" id="time_out" name="time_out">
                    	</div>
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

