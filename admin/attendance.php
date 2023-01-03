<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
    <?php include 'css/layout.css'; ?>
    <?php include 'css/tables.css'; ?>
    <?php include 'css/pages.css'; ?>
</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/sidebar.php'; ?>
<div class="content-wrapper">
  <section class="content-header">
      <h1>
        Attendance
      </h1>
</section>
    <section class="content">
    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert error-msg'>
            <button type='button' class='button-top' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert success-msg'>
              <button type='button' class='button-top' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            <a href="#addnew" data-toggle="modal" class="new-btn"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Status</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php
                    $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id ORDER BY attendance.date DESC, attendance.time_in DESC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                        $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
                        echo "
                        <tr>
                            <td>".date('M d, Y', strtotime($row['date']))."</td>
                            <td>".$row['empid']."</td>
                            <td>".$row['firstname'].' '.$row['lastname']."</td>
                            <td>".date('h:i A', strtotime($row['time_in']))."</td>
                            <td>".date('h:i A', strtotime($row['time_out']))."</td>
                            <td>$status</td>


                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
                  </div>
                  </div>
                  </div>
                  </div>

            </section>   
          </div>
    
          <?php include 'includes/attendance_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'attendance_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#datepicker_edit').val(response.date);
      $('#attendance_date').html(response.date);
      $('#edit_time_in').val(response.time_in);
      $('#edit_time_out').val(response.time_out);
      $('#attid').val(response.attid);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#del_attid').val(response.attid);
      $('#del_employee_name').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>