<style>
    <?php include 'css/sidebar.css'; ?>
</style>

<div class="sidenav">
    <div class="sidnav-items">
        <a href="">Dashboard</a>
        <a href="attendance.php">Attendance</a>
        <button class="dropdown-btn">Employees 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="employee.php">Employee List</a>
            <a href="overtime.php">Overtime</a>
            <a href="cashadvance.php">Cash Advance</a>
            <a href="schedule.php">Schedules</a>
        </div>
        <a href="position.php">Position</a>
        <a href="payroll.php">Payroll</a>
        <a href="schedule_employee.php">Schedule</a>
    </div>
</div>


<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>


