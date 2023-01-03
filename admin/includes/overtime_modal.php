<style>
<?php include 'css/position_modal.css';
?>
</style>
<!-- Add -->
<div class="modal opacity-0" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Add Overtime</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="overtime_add.php">
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
                        <label for="hours" class="label-pos">No. of Hours</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="hours" name="hours">
                        </div>
                    </div>
                    <div class="margin-bottom">
                        <label for="mins" class="label-pos">No. of Mins</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="mins" name="mins">
                        </div>
                    </div>
                    <div class="margin-bottom">
                        <label for="rate" class="label-pos">Rate</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="rate" name="rate" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i>
                    Close</button>
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
                <h4 class="modal-title"><b><span class="employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="overtime_edit.php">
                    <input type="hidden" class="otid" name="id">
                    <div class="margin-bottom">
                        <label for="datepicker_edit" class="label-pos">Date</label>

                        <div class="label-padding">
                            <div class="date">
                                <input type="text" class="pos-input-field" id="datepicker_edit" name="date" required>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom">
                        <label for="hours_edit" class="label-pos">No. of Hours</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="hours_edit" name="hours">
                        </div>
                    </div>
                    <div class="margin-bottom">
                        <label for="mins_edit" class="label-pos">No. of Mins</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="mins_edit" name="mins">
                        </div>
                    </div>
                    <div class="margin-bottom">
                        <label for="rate_edit" class="label-pos">Rate</label>

                        <div class="label-padding">
                            <input type="text" class="pos-input-field" id="rate_edit" name="rate" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i>
                    Close</button>
                <button type="submit" class="update-pos" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
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
                <h4 class="modal-title"><b><span id="overtime_date"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="overtime_delete.php">
                    <input type="hidden" class="otid" name="id">
                    <div class="text-center">
                        <p>DELETE OVERTIME</p>
                        <h2 class="employee_name bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-dismiss="modal"><i class="fa fa-close"></i>
                    Close</button>
                <button type="submit" class="delete-button" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>