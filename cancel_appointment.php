<?php
session_start();
include('dbconnect.php');
$app_id=$_GET['app_id'];

global $conn;
$sql="UPDATE appointment SET cancel_status=1 WHERE id = '$app_id'";
$query=mysqli_query($conn,$sql);

if ($query) {
	echo "<script>alert('Appointment Cancel.');window.location.href='my_appointment.php';</script>";
}
else{
	echo "<script>alert('Something went wrong. Please try again.');window.location.href='my_appointment.php';</script>";
}

?>