<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include('dbconnect.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		global $conn;
	    //to prevent from mysqli injection
	    $username = stripslashes($username);
	    $password = stripslashes($password);
	    $username = mysqli_real_escape_string($conn, $username);
	    $password = mysqli_real_escape_string($conn, $password);

	    $sql = "SELECT * FROM `patients` WHERE password='$password' AND email='$username'";
	    
	    $result = mysqli_query($conn, $sql);
	    
	    $count = mysqli_num_rows($result);

	    if($count>0){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            session_start();
            $_SESSION['user_id']=$row['id'];
            if(!empty($_POST["remember"])) {

				setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));

				setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));

			} else {

				if(isset($_COOKIE["user_login"])) {

					setcookie ("user_login","");

				}

				if(isset($_COOKIE["userpassword"])) {

					setcookie ("userpassword","");

				}

			}
            $_SESSION['username']=$row['email'];
            $_SESSION['mobile']=$row['mobile'];
            $_SESSION['password']=$row['password'];
            $_SESSION['name']=$row['name'];
            $_SESSION['image']=$row['image'];          
            header("location:index.php");
        }  
        else{  
            echo "<script>alert('Error! invalid username and password.');window.location.href='index.php'</script>";
        }     
	}
?>