<?php session_start(); ?>
<?php include 'header.php'; ?>
<style>
    <?php include 'css/index.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title -->
    <title>Attendance and Payroll Management System </title>
</head>

<body>
    <div class = "login-box">
        <p id="date"></p>
        <p id="time" class="bold"></p>

        <div class="login-box-body">
    	    <h1 class="login-box-msg">Employee Attendance System</h1>

            <div>
                <form id="attendance">

                <label for="status">Status</label>
                <select id="status" name="status">
                <option value="in">Time-in</option>
                <option value="out">Time-out</option>
                </select>

                <label for="employee">Employee Id</label>
                <input type="text" id="employee" name="employee" placeholder="employee">

            
                <input type="submit" name="signin">
            </form>
            </div>
            <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
            </div>
            <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
            </div>
        </div>
</div>
<?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>
</body>
</html>
