<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include '../dbconnect.php';
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$cpassword=$_POST['cpassword'];
		$city=$_POST['city'];
		$specialist=$_POST['specialist'];
		$dob=$_POST["dob"];
		$country=$_POST['country'];
		$qualification=$_POST['qualification'];
		$address=$_POST['address'];
		global $conn;
		date_default_timezone_set("Asia/Kolkata");
		$date=date('Y-m-d H:i:s');
		$exists=false;
		if(($password==$cpassword) && $exists==false){
			$sql="INSERT INTO `doctor_regi` (`name`, `phone`, `email`,`password`, `city`, `specialist`,`date`, `country`,`qualification`,`address`) VALUES ('$name', '$phone', '$email','$password','$city', '$specialist','$dob','$country','$qualification','$address');";
			// echo $sql;
			$result=mysqli_query($conn,$sql);
			if($result){
				
				echo "<script>alert('Sucess! your account created.Now you can login.');window.location.href='Add_doctor.php'</script>";
			}	
		}
		else{
			echo "<script>alert('Error! Password not matched');window.location.href='Add_doctor.php'</script>";
		}
	}
?>