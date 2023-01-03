<style>
    <?php include 'css/position_modal.css'; ?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<h4 class="modal-title"><b>Admin Profile</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="margin-bottom">
                  	<label for="username" class="label-pos">Username</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="username" name="username" value="<?php echo $user['username']; ?>">
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="password" class="label-pos">Password</label>

                    <div class="label-padding"> 
                      <input type="password" class="pos-input-field" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="margin-bottom">
                  	<label for="firstname" class="label-pos">Firstname</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                  	</div>
                </div>
                <div class="margin-bottom">
                  	<label for="lastname" class="label-pos">Lastname</label>

                  	<div class="label-padding">
                    	<input type="text" class="pos-input-field" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                  	</div>
                </div>
                <div class="margin-bottom">
                    <label for="photo" class="label-pos">Photo:</label>

                    <div class="label-padding">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <div class="margin-bottom">
                    <label for="curr_password" class="label-pos">Current Password:</label>

                    <div class="label-padding">
                      <input type="password" class="pos-input-field" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="save-button" name="save"><i class="fa fa-check-square-o"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>