<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include 'dbconnect.php';
		$name=$_POST["name"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		$mobile=$_POST["mobile"];
		$dob=$_POST["dob"];
		$address=$_POST["address"];
		$image="";
		$image=$_FILES['image']['name'];
		$image_size=$_FILES['image']['size'];
		$image_tmp_name=$_FILES['image']['tmp_name'];
		$image_folder='image/uploaded_img/'.$image;
		global $conn;
		date_default_timezone_set("Asia/Kolkata");
		$date=date('Y-m-d H:i:s');
		$exists=false;
		if(($password==$cpassword) && $exists==false){
			$sql="INSERT INTO `patients` (`name`, `email`, `password`, `mobile`, `dob`,`image`,`address`, `date`) VALUES ('$name','$username','$password','$mobile','$dob','$image','$address','$date');";
			// echo $sql;
			$result=mysqli_query($conn,$sql);
			if($result){
				move_uploaded_file($image_tmp_name, $image_folder);
				echo "<script>alert('Sucess! your account created.Now you can login.');window.location.href='index.php'</script>";
			}	
		}
		else{
			echo "<script>alert('Error! Password not matched');window.location.href='index.php'</script>";
			if ($image_size>200000) {
				echo "<script>alert('image size is too large!');window.location.href='index.php'</script>";
			}
		}
	}
?>