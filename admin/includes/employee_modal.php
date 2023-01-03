<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<h4 class="modal-title"><b>Add Employee</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="margin-bottom">
                  	<label for="firstname" class="label-pos">Firstname</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="firstname" name="firstname" required>
                  	</div>
                </div>
                <div class="margin-bottom">
                  	<label for="lastname" class="label-pos">Lastname</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="lastname" name="lastname" required>
                  	</div>
                </div>
                <div class="margin-bottom">
                  	<label for="address" class="label-pos">Address</label>

                  	<div class="label-padding">
                      <textarea class="pos-input-field" name="address" id="address"></textarea>
                  	</div>
                </div>
                <div class="margin-bottom">
                  	<label for="datepicker_add" class="label-pos">Birthdate</label>

                  	<div class="label-padding"> 
                      <div class="date">
                        <input type="text" class="pos-input-field" id="datepicker_add" name="birthdate">
                      </div>
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="contact" class="label-pos">Contact Info</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="contact" name="contact">
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="gender" class="label-pos">Gender</label>

                    <div class="label-padding"> 
                      <select class="pos-input-field" name="gender" id="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="position" class="label-pos">Position</label>

                    <div class="label-padding">
                      <select class="pos-input-field" name="position" id="position" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="schedule" class="label-pos">Schedule</label>

                    <div class="label-padding">
                      <select class="pos-input-field" id="schedule" name="schedule" required>
                        <option value="" selected>- Select -</option>
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
                <div class="margin-bottom">
                    <label for="photo" class="label-pos">Photo</label>

                    <div class="label-padding">
                      <input type="file" name="photo" id="photo">
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
            	
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="margin-bottom">
                    <label for="edit_firstname" class="label-pos">Firstname</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_lastname" class="label-pos">Lastname</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_address" class="label-pos">Address</label>

                    <div class="label-padding">
                      <textarea class="pos-input-field" name="address" id="edit_address"></textarea>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="datepicker_edit" class="label-pos">Birthdate</label>

                    <div class="label-padding"> 
                      <div class="date">
                        <input type="text" class="pos-input-field" id="datepicker_edit" name="birthdate">
                      </div>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_contact" class="label-pos">Contact Info</label>

                    <div class="label-padding">
                      <input type="text" class="pos-input-field" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_gender" class="label-pos">Gender</label>

                    <div class="label-padding"> 
                      <select class="pos-input-field" name="gender" id="edit_gender">
                        <option selected id="gender_val"></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_position" class="label-pos">Position</label>

                    <div class="label-padding">
                      <select class="pos-input-field" name="position" id="edit_position">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="margin-bottom">
                    <label for="edit_schedule" class="label-pos">Schedule</label>

                    <div class="label-padding">
                      <select class="pos-input-field" id="edit_schedule" name="schedule">
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

<!-- Delete -->
<div class="modal opacity-0" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>DELETE EMPLOYEE</p>
	                	<h2 class="bold del_employee_name"></h2>
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

<!-- Update Photo -->
<div class="modal opacity-0" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="margin-bottom">
                    <label for="photo" class="label-pos">Photo</label>

                    <div class="label-padding">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="update-pos" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    