<?php
	
	include '../dbconnect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$service=$_POST['service'];
	// $patient_id=$_POST['patient_id'];

	$sql="INSERT INTO `appointment` (`name`, `email`,`mobile`,`date`, `time`, `service`) VALUES ('$name','$email','$mobile','$date','$time', '$service');";
	$result=mysqli_query($conn,$sql);
	
	if($result){
		echo "<script>alert('Sucessfully your appointment registerd.');window.location.href='Add_appointment.php'</script>";
	}
	else{
		echo "<script>alert('Sorry!not regiterd your apointment');window.location.href='Add_appointment.php'</script>";
	}
?>                                                   