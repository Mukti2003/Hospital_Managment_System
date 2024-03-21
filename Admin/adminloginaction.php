<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include('../dbconnect.php');
		// $Name=$_POST['Name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$image=$_FILES['image']['name'];
		$image_size=$_FILES['image']['size'];
		$image_tmp_name=$_FILES['image']['tmp_name'];
		$image_folder='upload_img/'.$image;
		global $conn;
		$username=stripcslashes($username);
		$password=stripcslashes($password);
		$username = mysqli_real_escape_string($conn, $username);
	    $password = mysqli_real_escape_string($conn, $password);
	    if (isset($_POST['login'])) {
	    	
		    $sql="SELECT * FROM `adminlogin` WHERE email='$username' AND password='$password'";

		    $result = mysqli_query($conn, $sql);
		    $row = mysqli_num_rows($result);
		    		

		    if($row>0){
		    	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    	session_start();
		    	$_SESSION['username']=$row['email'];
		    	$_SESSION['admin_name']=$row['Name'];
		    	$_SESSION['user_id']=$row['id'];
		    	$_SESSION['image']=$row['image'];
		    	header("location:admindashboard.php");  
	        }  
	        else{  
	            echo "<script>alert('Error!invalid Admin username and password.');window.location.href='index.php'</script>";
	        }
    	}
	}
?>