<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/excss/hospital.css">
</head>
<body>
	<div class="top_header">
		<!-- top header st  -->
		<div class="row top-manu">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg nav-item nv1">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fa fa-bars"></i>
							</button>
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
					    <form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0 ex mr-2" type="submit">Search</button>
					    </form>
						<button class="btn my-2 my-sm-0 ex mr-2 button" type="submit" id="form-open">Login</button>			
					</div>
				</nav>
				<section class="home">
			      	<div class="form_container">
			        	<i class="fa fa-times-circle-o form_close"></i>
				        <div class="form login_form">
				          <form action="#">
				            <h2>Login</h2>
				            <div class="input_box">
				              <input type="email" placeholder="Enter your email" required />
				              <i class="fa fa-envelope email"></i>
				            </div>
				            <div class="input_box">
				              <input type="password" placeholder="Enter your password" required />
				              <i class="fa fa-lock password"></i>
				              <i class="fa fa-eye-slash pw_hide"></i>
				            </div>
				            <div class="option_field">
				              <span class="checkbox">
				                <input type="checkbox" id="check" />
				                <label for="check">Remember me</label>
				              </span>
				              <a href="#" class="forgot_pw">Forgot password?</a>
				            </div>
				            <button class="button text-light">Login Now</button>
				            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
				          </form>
				        </div>
			        <!-- Signup From -->
				        <div class="form signup_form">
				          	<form action="#">
					            <h2>Signup</h2>
					            <div class="input_box">
					              <input type="email" placeholder="Enter your email" required />
					              <i class="fa fa-envelope email"></i>
					            </div>
					            <div class="input_box">
					              <input type="password" placeholder="Create password" required />
					              <i class="fa fa-lock password"></i>
					              <i class="fa fa-eye-slash pw_hide"></i>
					            </div>
					            <div class="input_box">
					              <input type="password" placeholder="Confirm password" required />
					              <i class="fa fa-lock password"></i>
					              <i class="fa fa-eye-slash pw_hide"></i>
					            </div>
					            <button class="button text-light">Signup Now</button>
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
				<a class="navbar-brand" href="#"><img src="Assets/image/logo.png" class="logoimg"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">	
			    	<ul class="navbar-nav ml-auto">
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">Home</a>
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
				          		<a class="dropdown-item" href="#">HBCH</a>
				          		<a class="dropdown-item" href="#">BBCI</a>
				          		<a class="dropdown-item" href="#">MPMMCC</a>
				        	</div>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">NCG</a>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">Projects</a>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">International Affiliations</a>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">ACII</a>
				      	</li>
				      	<li class="nav-item active">
				        	<a class="nav-link" href="#">Events</a>
				      	</li>
				      	<li class="nav-item active">
			        		<a class="nav-link" href="Aboutus.html">About Us</a>
			      		</li>
			    	</ul>
			  	</div>
		  	</div>
		</nav>
	</div>
</div>
<!-- navbar end -->
<div class="row">
	<img src="Assets\image\medicine-do.webp" class="finddoctor">
</div>

<!-- footer -->
<div class="row mt-2">
	<div class="col-md-12">
        <footer id="footer" class="footer-1">
			<div class="main-footer widgets-dark typo-light">
				<div class="row ml-2">
			  
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget subscribe no-box">
							<h5 class="widget-title">COMPANY NAME<span></span></h5>
							<p>About the company, little discription will goes here.. </p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget no-box">
							<h5 class="widget-title">Quick Links<span></span></h5>
							<ul class="thumbnail-widget">
								<li>
									<div class="thumb-content"><a href="#.">Get Started</a></div> 
								</li>
								<li>
									<div class="thumb-content"><a href="#.">Top Leaders</a></div> 
								</li>
								<li>
									<div class="thumb-content"><a href="#.">Success Stories</a></div> 
								</li>
								<li>
									<div class="thumb-content"><a href="#.">Event/Tickets</a></div> 
								</li>
								<li>
									<div class="thumb-content"><a href="#.">News</a></div>  
								</li>
								<li>
									<div class="thumb-content"><a href="#.">Lifestyle</a></div> 
								</li>
								<li>
									<div class="thumb-content"><a href="#.">About</a></div> 
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget no-box">
							<h5 class="widget-title">Get Started<span></span></h5>
							<p>Get access to your full Training and Marketing Suite.</p>
							<a class="btn" href="https://bit.ly/3m9avif" target="_blank">Subscribe Now</a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">

						<div class="widget no-box">
							<h5 class="widget-title">Contact Us<span></span></h5>

							<p><a href="#" title="glorythemes"><i class="fa fa-envelope-o g"> info@domain.com</i></a></p>
							<p><a href="#" title="glorythemes"><i class="fa fa-phone g"> +91 8597707729</i></a></p>
							<ul class="social-footer2">
								<li class=""><a title="youtube" target="_blank" href="#"><i class="fa fa-youtube-play"></i></a>
								</li>
								<li class=""><a href="" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class=""><a href="" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class=""><a title="instagram" target="_blank" href=""><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
			<div class="row widgets-dark typo-light">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.889214782926!2d87.73483427515097!3d21.784548280060765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a03273b4a7373bb%3A0xb0d99765501b901d!2sCCLMS%20MANAGEMENT%20COLLEGE!5e0!3m2!1sen!2sin!4v1684823442456!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<p>Copyright Company Name © 2023. All rights reserved.</p>
						</div>
						<div class="col-md-3">
							<p>Devloped by Mukti Pradhan</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
<!-- footer -->

<script type="text/javascript" href="Assets\jas\hospital.js"></script>
<script type="text/javascript" href="Assets\bootstrap\js\bootstrap.bundle.min.js"></script>
<script type="text/javascript" href="Assets\bootstrap\js\bootstrap.min.js"></script>
<script type="text/javascript" href="Assets\js\jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>