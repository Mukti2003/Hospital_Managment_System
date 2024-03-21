<?php date_default_timezone_set('Asia/kolkata'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="top_header">
		<!-- top header st  -->
		<div class="row top-manu">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg nav-item nv1">
					
				  	<div class="collapse navbar-collapse">
					    <ul class="navbar-nav mr-auto">
					    	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">Locations</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">Careers</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">News</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">Help</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">Donate Now</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link text-light" href="#">Contact Us</a>
					      	</li>
					    </ul>
					    <form class="form-inline my-2">
					      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					      	<button class="btn mr-2 h-10 search-btn" type="submit">Search</button>
					    </form>
					    <?php if( isset($_SESSION['username']) && !empty($_SESSION['username'])){
						?>   
						<?php }else{ ?>
							<button class="btn my-2 my-sm-0 ex mr-2 button login-butn" type="submit" id="form-open">Login/Signup</button>  
						<?php } ?>  
					</div>
				</nav>
				<section class="home">
			      	<div class="form_container">
			        	<i class="fa fa-times-circle-o form_close"></i>
				        <div class="form login_form">
				          	<form action="login.php" method="post">
				            <h2>Login</h2>
				            <div class="input_box">
				              <input name="username" type="email" placeholder="Enter your email" id="std_email1" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" required />
				              <i class="fa fa-envelope email"></i>
				            </div>
				            <div class="input_box">
				              <input name="password" type="password" placeholder="Enter your password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" id="std_pass1" required />
				              <i class="fa fa-lock password"></i>
				              <i class="fa fa-eye-slash pw_hide"></i>
				            </div>
				            <div class="option_field">
				              <span class="checkbox">
				                <input type="checkbox" name="remember" id="check" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
				                <label for="check">Remember me</label>
				              </span>
				              <a href="#" class="forgot_pw">Forgot password?</a>
				            </div>
				            <button class="button text-light" onclick="return checkValidatelogin();">Login Now</button>
				            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
				          </form>
				        </div>
			        	<!-- Signup From -->
				        <div class="form signup_form">
				          	<form action="signup.php" method="post" enctype="multipart/form-data">
					            <h2>Signup</h2>
					            <div class="d-flex">
						            <div class="input_box">
						              <input name="name" type="text" placeholder="Enter your name" id="std_name" onkeyup="validAlfabets();" />
						              <i class="fa fa-user email"></i>
						            </div>
						            <div class="input_box ml-2">
						              <input name="username" type="email" placeholder="Enter your email" id="std_email" />
						              <i class="fa fa-envelope email"></i>
						            </div>
						        </div>
						        <div class="d-flex">
						            <div class="input_box">
						              <input name="password" type="password" placeholder="Create password" id="std_pass" />
						              <i class="fa fa-lock password"></i>
						              <i class="fa fa-eye-slash pw_hide"></i>
						            </div>
						            <div class="input_box ml-2">
						              <input name="cpassword" type="password" placeholder="Confirm password" id="std_password"/>
						              <i class="fa fa-lock password"></i>
						              <i class="fa fa-eye-slash pw_hide"></i>
						            </div>
						        </div>
						        <div class="d-flex">
						        	<div class="input_box">
						              <input name="mobile" type="text" placeholder="Enter mobile no." id="Phone"/>
						              <i class="fa fa-mobile password"></i>  
						            </div>
						            <div class="input_box ml-2">
						              <input name="dob" type="date" id="dob"/>
						              <i class="fa fa-calendar password"></i> 
						            </div>
						        </div>
					            <div class="input_box">
					              <input name="image" type="file" class="box" accept="image/jpg, image/jpeg, image/png"/>
					              <i class="fa fa-file-image-o email"></i>
					            </div>
					            <div class="input_box">
						            <textarea name="address" class="form-control" placeholder="Enter Address"></textarea>      
						        </div>
					            <button class="button text-light" onclick="return checkValidateSignUP()">Signup Now</button>
					            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
				          	</form>
				        </div>
			      	</div>
				</section>
			</div>
		</div>
		<!-- top header end-->
		<!-- navbar st -->
		<div id="header" class="nv">
			<nav class="navbar navbar-expand-lg navbar-light manu-bar p-0">
				<div class="container-fluid d-flex p-0">
					<a class="navbar-brand" href="#"><img src="Assets/image/New MEDLIFE Logo.png" class="logoimg"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
			  		<div class="collapse navbar-collapse" id="navbarSupportedContent">	
				    	<ul class="navbar-nav ml-auto">
					      	<li class="nav-item active">
					        	<a class="nav-link" href="index.php">Home</a>
					      	</li>
					      	<li class="nav-item dropdown active">
					        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          	Acadamics
					        	</a>
					        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          		<a class="dropdown-item" href="#">About Acadamics</a>
					          		<a class="dropdown-item" href="#">Courses</a>
					          		<a class="dropdown-item" href="#">Examination</a>
					          		<a class="dropdown-item" href="#">Admission Process</a>
					          		<a class="dropdown-item" href="#">Interview</a>
					          		<a class="dropdown-item" href="#">Resuelt</a>
					        	</div>
					      	</li>
					      	<li class="nav-item dropdown active">
					        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          	Institutions
					        	</a>
					        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          		<a class="dropdown-item" href="#">TMH</a>
					          		<a class="dropdown-item" href="#">ACTERC</a>
					          		<a class="dropdown-item" href="#">CCE</a>
					        	</div>
					      	</li>
					      	
					      	<li class="nav-item active">
					        	<a class="nav-link" href="#">Projects</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link" href="#">International Affiliations</a>
					      	</li>
					      	<li class="nav-item active">
					        	<a class="nav-link" href="#">Events</a>
					      	</li>
					      	<li class="nav-item active">
				        		<a class="nav-link" href="Aboutus.php">About Us</a>
				      		</li>
				      		
								<?php 

									if (!isset($_SESSION['username'])){
								?>
								
								<?php
								}
								else{
									?>
									<li class="nav-item dropdown active">
							        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							        		
							          	<?php
							          		$user_id = $_SESSION['user_id'];
							          		$select = mysqli_query($conn, "SELECT * FROM `patients` WHERE id = '$user_id'") or die('query failed');
									        if(mysqli_num_rows($select) > 0){
									            $row = mysqli_fetch_assoc($select);
									        }
							          		
							          		if ($_SESSION['image'] == ''){
							          		 	echo '<image src="Assets/image/default-avatar.png">';
							          		}
							          		else{
							          			echo '<img src="Assets/image/uploaded_img/'.$row['image'].'">';
							          		}
							          	?>
							        	</a>
							        	<div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
							          		<a class="dropdown-item" href="#"><?php echo $_SESSION['name']; ?></a>
							          		<a class="dropdown-item" href="my_profile.php">My Profile</a>
							          		<a class="dropdown-item" href="my_appointment.php">My Appointment</a>
							          		<a class="dropdown-item" href="logout.php"><button name="logout_user">Logout</button></a>
							        	</div>
								    </li>
								<?php
							}

							?>
				    	</ul>
			  		</div>
			  	</div>
			</nav>	
		</div>
	</div>
</body>
</html>