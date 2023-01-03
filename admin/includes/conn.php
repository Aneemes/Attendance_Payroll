<?php
	$conn = new mysqli('localhost', 'root', '', 'payroll-attendance');
    
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>