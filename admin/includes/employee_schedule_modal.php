<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Edit -->
<div class="modal opacity-0" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	
            	<h4 class="modal-title"><b><span class="employee_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="schedule_employee_edit.php">
            		<input type="hidden" id="empid" name="id">
                <div class="margin-bottom">
                    <label for="edit_schedule" class="label-pos">Schedule</label>

                    <div class="label-padding">
                      <select class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="edit_schedule" name="schedule">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
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