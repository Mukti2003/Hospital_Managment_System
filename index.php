<?php 
	include('dbconnect.php');
	session_start();

?>
<?php
	
	function getAllslider(){
		global $conn;
		$sql="SELECT * FROM carasoul WHERE status=1 ORDER BY id ASC";
		$query=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($query);
	if($row){
		$alldata=array();
		while($data=mysqli_fetch_assoc($query))
		{
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/excss/hospital.css">
   	
</head>
<body>
	<?php include('header.php'); ?>
		<!-- navbar end -->
		<!-- carasoul st -->
		<div class="row">
			<div class="col-md-12">
				<div class="img">
					<section class="carasoul_section">
						<div class="carasoul">
							<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<?php
								$alldata=getAllslider();
							?>
							<ol class="carousel-indicators">
							<?php
							for($i = 0; $i < sizeof($alldata);$i++){
							 ?>
							<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" class="<?php echo $i==0?'active':''; ?>"></li>
							<?php } ?>
							</ol>
							<div class="carousel-inner">
								<?php
								
								if(!empty($alldata))
								{
									foreach ($alldata as $key => $slider_item) {		
								?>
								<div class="carousel-item <?php echo $key==0?'active':''; ?>">
					            <a href="#"><img src="<?php echo $slider_item['image'];?>" alt="" class="w-100"></a>
								<div class="carousel-caption d-none d-md-block">
								</div>
							</div>
							<?php
							}
							}
							?>
							</div>
							<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</button>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
				<!-- carasoul end -->

				<!-- Counter st -->
					<div class="row mt-2">
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-user"></i>
								<h2 class="counter">20000</h2><span>+</span>
								<h4>DAILY VISITORS</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-user-md"></i>
								<h2 class="counter">1000</h2><span>+</span>
								<h4>DOCTORS</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-bed"></i>
								<h2 class="counter">10000</h2><span>+</span>
								<h4>BEDS</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-ambulance"></i>
								<h2 class="counter">20000</h2><span>+</span>
								<h4>SERVICES</h4>
							</div>
						</div>
					</div>
				<!-- Counter End -->

				<!-- services -->
				<div class="row mt-2 ml-4 service">
					<div class="col-md-3">
						<div class="cancer text-center card_st">
							<a href="#" class="t">Best Doctor For You</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="medical text-center card_st">
							<a href="cancerinformation.php" class="t">Cancer Information</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="patient card_st">
							<div class="text-center">
								<a href="Medicalinformation.php" class="t">Medical Infromation</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 r">
						<div class="reaserch text-center card_st">
							<a href="#" class="t">Patient Information</a>
						</div>
					</div>
				</div>
				<!-- services -->
				<!-- our placeses -->
				<div class="row mt-4 our_places">
			        <div class="col-md-3 col-sm-6">
						<div class="card card_s card_back card_st">
							<div class="card-body">
								<div class="card border-info shadow text-info p-3 my-card" ><i class="fa fa-map-marker"></i></div>
							    <h5 class="card-title mt-3 text-center">HBCH,Panjab</h5>
							    <p class="card-text text-dark text-center"><b>Homibhaba Cancer Hospital.</b></p>
							    <a href="#" class="btn btn-primary ex app text-center">Explore Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="card card_s">
							<div class="card-body card_back card_st">
								<div class="card border-info shadow text-info p-3 my-card" ><i class="fa fa-map-marker"></i></div>
							    <h5 class="card-title mt-3 text-center">BBCI,Gujrat</h5>
							    <p class="card-text text-dark text-center"><b>Homibhaba Cancer Hospital.</b></p>
							    <a href="#" class="btn btn-primary ex app text-center">Explore Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="card card_s card_back card_st">
							<div class="card-body">
								<div class="card border-info shadow text-info p-3 my-card"><i class="fa fa-map-marker"></i></div>
							    <h5 class="card-title mt-3 text-center">HBCH,Delhi</h5>
							    <p class="card-text text-dark text-center"><b>Homibhaba Cancer Hospital.</b></p>
							    <a href="#" class="btn btn-primary ex app text-center">Explore Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="card card_s card_back card_st">
							<div class="card-body">
								<div class="card border-info shadow text-info p-3 my-card"><i class="fa fa-map-marker"></i></div>
							    <h5 class="card-title mt-3 text-center">MPMM,Pune</h5>
							    <p class="card-text text-dark text-center"><b>Mahamana Cancer Hospital.</b></p>
							    <a href="#" class="btn btn-primary ex app text-center">Explore Now</a>
							</div>
						</div>
					</div>
			    </div>
				<!-- placeses -->
				<!-- appointment form -->
				<div class="row mt-2">
	                <div class="col-md-6 custo">
	                    <div class="well-block">
	                        <div class="well-title text-light">
	                            <h2><u>Need Services? Book an Appointment</u></h2>
	                        </div>
							
	                        <form action="appointment.php" method="POST">
	                            <!-- Form start -->
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	<input type="hidden" name="patient_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:''; ?>">
	                                        <label class="control-label text-light">Name :</label>
	                                        <input id="name" name="name" type="text" value="<?php if (isset($_SESSION['username'])) {
	                                        	echo $row['name'];
	                                        } ?>" class="form-control input-md" readonly>
	                                    </div>
	                                </div>
	                                <!-- Text input-->
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	<input type="hidden" name="mobile" value="<?php if (isset($_SESSION['username'])) {
	                                        	echo $row['mobile'];
	                                        } ?>">
	                                        <label class="control-label text-light">Email :</label>
	                                        <input id="email" name="email" type="email" value="<?php if (isset($_SESSION['username'])) {
	                                        	echo $row['email'];
	                                        } ?>"  class="form-control input-md" readonly>
	                                    </div>
	                                </div>
	                                <!-- Text input-->
	                                <div class="col-md-6">
	                                    <div class="form-group">
						                    <label class="control-label text-light">Date :</label>
						                    <input type="date" name="date" id="date" class="form-control" required>
						                </div>
	                                </div>
	                                <!-- Select Basic -->
	                                <div class="col-md-6">
	                                    <div class="form-group">
						                    <label for="appt-time" class="control-label text-light">Choose an appointment time: </label>
  											<input type="time" name="time" step="2" id="appt-time" class="form-control" required/>
						                </div>
	                                </div>
	                                <!-- Select Basic -->
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	<?php
	                                    	$sql = "SELECT * FROM service GROUP BY id;";
											$result = mysqli_query($conn,$sql);
	                                    	if ($result) {
	                                        echo '<label class="control-label text-light" for="appointmentfor">Appointment For :</label>';
	                                        echo '<select id="appointmentfor" name="service" class="form-control">';
	                                        	echo '<option>Select</option>';
	                                        	$num_results = mysqli_num_rows($result);
											    for ($i=0;$i<$num_results;$i++) {
											        $row = mysqli_fetch_array($result);
											        $name = $row['service'];
											        echo '<option value="' .$name. '">' .$name. '</option>';
											    }
	                                        echo '</select>';
	                                    	}
	                                    	// mysqli_close($conn);
	                                        ?>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	<?php
	                                    	$sql = "SELECT * FROM doctor GROUP BY id;";
											$result = mysqli_query($conn,$sql);
	                                    	if ($result) {
	                                        echo '<label class="control-label text-light" for="appointmentfor">Doctor :</label>';
	                                        echo '<select id="appointmentfor" name="doctor" class="form-control">';
	                                        	echo '<option>Select</option>';
	                                        	$num_results = mysqli_num_rows($result);
											    for ($i=0;$i<$num_results;$i++) {
											        $row = mysqli_fetch_array($result);
											        $name = $row['doctor_name'];
											        echo '<option value="' .$name. '">' .$name. '</option>';
											    }
	                                        echo '</select>';
	                                    	}
	                                    	mysqli_close($conn);
	                                        ?>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
				                        <label><input type="radio" value="male" name="gender">Male</label>
										<label><input type="radio" value="famale"name="gender" class="ml-2">Famale</label>
										<label><input type="radio" value="other" name="gender" class="ml-2">Other</label>
				                    </div>
	                                <!-- Button -->
	                                <div class="col-md-12">
	                                    <div class="form-group">
	                                        <button id="singlebutton" name="singlebutton" class="btn btn-success app">Make An Appointment</button><b> (We Will Confirm by an text Massage!)</b>
	                                        <p class="mt-2 text-danger"><b>At first register! Then make an appointment</b></p>
	                                    </div>
	                                </div>
	                            </div>
	                        </form>
	                        <!-- form end -->
	                    </div>
	                </div>
	                <div class="col-md-6">
	                    <div class="well-block">
	                        <div class="well-title">
	                            <h2 class="text-light"><u>Why Appointment with Us</u></h2>
	                        </div>
	                        <div class="feature-block">
	                            <div class="feature feature-blurb-text">
	                                <h4 class="feature-title">24/7 Hours Available</h4>
	                                <div class="feature-content">
	                                    <p class="text-light">Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
	                                </div>
	                            </div>
	                            <div class="feature feature-blurb-text">
	                                <h4 class="feature-title">Experienced Staff Available</h4>
	                                <div class="feature-content">
	                                    <p class="text-light">Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
	                                </div>
	                            </div>
	                            <div class="feature feature-blurb-text">
	                                <h4 class="feature-title">Low Price & Fees</h4>
	                                <div class="feature-content">
	                                    <p class="text-light">Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium.</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
            	</div>
				<!-- appointment form -->
				<!-- emergency call -->
				<!-- Start Call to action -->
				<section class="call-action overlay mt-2" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<div class="content">
									<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
									<div class="button">
										<a href="#" class="btn">Contact Now</a>
										<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Call to action -->
				<!-- Start service -->
				<section class="services section mt-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-title">
									<h2>We Offer Different Services To Improve Your Health</h2>
									<img src="Assets/image/pngtree-heartbeat-ekg-line-icon-design-template-illustration-png-image_2413392.jpg" alt="#" style="height: 50px;width: 100px;">
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-file-text"></i>
									<h4><a href="#">General Treatment</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-hospital-o" aria-hidden="true"></i>
									<h4><a href="">Teeth Whitening</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-heart"></i>
									<h4><a href="">Heart Surgery</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-medkit" aria-hidden="true"></i>
									<h4><a href="">Ear Treatment</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-heartbeat" aria-hidden="true"></i>
									<h4><a href="">Vision Problems</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Start Single Service -->
								<div class="single-service">
									<i class="fa fa-tint" aria-hidden="true"></i>
									<h4><a href="#">Blood Transfusion</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>	
								</div>
								<!-- End Single Service -->
							</div>
						</div>
					</div>
				</section>
				<!--/ End service -->
				<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="fa fa-heart"></i>
								</div>
								<h4 class="title">Plastic Suggery</h4>
								<div class="price">
									<p class="amount">$199<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Lorem ipsum dolor sit</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="fa fa-times" aria-hidden="true"></i>Nullam interdum enim</li>
								<li class="cross"><i class="fa fa-times" aria-hidden="true"></i>Donec ultricies metus</li>
								<li class="cross"><i class="fa fa-times" aria-hidden="true"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="fa fa-tint" aria-hidden="true"></i>
								</div>
								<h4 class="title">Teeth Whitening</h4>
								<div class="price">
									<p class="amount">$299<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Lorem ipsum dolor sit</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Cubitur sollicitudin fentum</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Nullam interdum enim</li>
								<li class="cross"><i class="fa fa-times" aria-hidden="true"></i>Donec ultricies metus</li>
								<li class="cross"><i class="fa fa-times" aria-hidden="true"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="fa fa-heartbeat" aria-hidden="true"></i>
								</div>
								<h4 class="title">Heart Suggery</h4>
								<div class="price">
									<p class="amount">$399<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Lorem ipsum dolor sit</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Cubitur sollicitudin fentum</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Nullam interdum enim</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Donec ultricies metus</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
				<?php include('footer.php') ?>
	
	<script type="text/javascript" src="Assets/jas/hospital.js"></script>
	<script type="text/javascript" src="jquery.counterup.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script>
		jQuery(document).ready(function($){
			$('.counter').counterUp({
		    delay: 10,
		    time: 1000
			});
		})
	</script>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script type="text/javascript" href="bootstrap\js\bootstrap.bundle.min.js"></script>
	<script type="text/javascript" href="bootstrap\js\bootstrap.min.js"></script>
	<script type="text/javascript" href="js\jquery-3.7.0.min.js"></script>
	
	
	
</body>
</html>