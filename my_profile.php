<?php
	include('dbconnect.php');
	session_start();
	$user_id=$_SESSION['user_id'];
	global $conn;
	if(isset($_POST['update_profile'])){
	$update_name=$_POST['update_name'];
	$update_email=$_POST['update_email'];
	$update_pass=$_POST['update_pass'];
	$new_pass=$_POST['new_pass'];
	$confirm_pass=$_POST['confirm_pass'];
	$old_pass = $_POST['old_pass'];
	
   $update_name = mysqli_real_escape_string($conn,$update_name);
   $update_email = mysqli_real_escape_string($conn,$update_email);
		
   mysqli_query($conn, "UPDATE `patients` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   
   $update_pass = mysqli_real_escape_string($conn, $update_pass);
   $new_pass = mysqli_real_escape_string($conn, $new_pass);
   $confirm_pass = mysqli_real_escape_string($conn, $confirm_pass);

	if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
   	if($update_pass != $old_pass){
      	echo "<script>alert('old password not matched!');</script>";
   	}
   	elseif($new_pass != $confirm_pass){
      	echo "<script>alert('Confirm password not matched!');</script>";
   	}
   	else{
        mysqli_query($conn, "UPDATE `patients` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
        echo "<script>alert('Password update succssfully!');</script>";
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'Assets/image/uploaded_img/'.$update_image;

   if(!empty($update_image)){
      	if($update_image_size > 2000000){
         echo 'image is too large';
      	}
      	else{
         	$image_update_query = mysqli_query($conn, "UPDATE `patients` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         	if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
        }
        	echo "<script>alert('Image update succssfully!');</script>";
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Assets\excss\hospital.css">
   <style>
   	.update-profile{
   min-height: 100vh;
   background-color:gray;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}
.update-profile form{
   padding:30px;
   background-color: white;
   box-shadow: 10px;
   text-align: center;
   width:700px;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
  
}

.update-profile form .flex{
   display: flex;
   justify-content: space-around;
   margin-bottom: 20px;
   gap:15px;
   margin-right: 10px;
}

.update-profile form .flex .inputBox{
   width: 49%;
   padding: 0 20px;
}

.update-profile form .flex .inputBox span{
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:black;
}

.update-profile form .flex .inputBox .box{
   width: 100%;
   border-radius: 5px;
   background-color:light-bg;
   padding:12px 14px;
   font-size: 17px;
   color:black;
   margin-top: 10px;
}

@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
.btn{border: none;height: 30px;width: 100px;border-radius: 5px;cursor: pointer;background-color:green;}
.delete-btn{text-decoration: none;}
</style>

</head>
<body>
   
<div class="update-profile">
	<?php
      $select = mysqli_query($conn, "SELECT * FROM `patients` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
      }
   ?>
  	

   	<form action="" method="post" enctype="multipart/form-data">
      	<?php
   	  		if ($_SESSION['image']==''){
   	  		 	echo '<image src="Assets/image/default-avatar.png">';
   	  		}
   	  		 else{echo '<img src="Assets/image/uploaded_img/'.$row['image'].'">';
   	  		} 
  		   ?>
      	<div class="flex">
            
      		<div class="inputBox">
	            <span>username :</span>
	            <input type="text" name="update_name" value="<?php echo $row['name']; ?>" class="box">
	            <span>your email :</span>
	            <input type="email" name="update_email" value="<?php echo $row['email']; ?>" class="box">
	            <span>update your pic :</span>
	            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         	</div>
         	<div class="inputBox">
	            <input type="hidden" name="old_pass" value="<?php echo $_SESSION['password']; ?>">
	            <span>old password :</span>
	            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
	            <span>new password :</span>
	            <input type="password" name="new_pass" placeholder="enter new password" class="box">
	            <span>confirm password :</span>
	            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         	</div>
      	</div>
         
      	<input type="submit" value="update profile" name="update_profile" class="btn">
      	<a href="index.php" class="delete-btn">go back</a>
   	</form>

</div>

</body>
</html>