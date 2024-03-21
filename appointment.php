<?php
	
	include 'dbconnect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$service=$_POST['service'];
	$doctor=$_POST['doctor'];
	$gender=$_POST['gender'];
	$patient_id=$_POST['patient_id'];

	$sql="INSERT INTO `appointment` (`patient_id`,`name`, `email`,`mobile`,`date`, `time`, `service`,`doctor`,`gender`) VALUES ('$patient_id','$name','$email','$mobile','$date','$time', '$service','$doctor','$gender');";
	$result=mysqli_query($conn,$sql);
	
	if($result){
		echo "<script>alert('Sucessfully your appointment registerd.');window.location.href='index.php'</script>";
	}
	else{
		echo "<script>alert('Sorry!not regiterd your apointment');window.location.href='index.php'</script>";
	}
?>                                                   