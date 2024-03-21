<?php
	include'dbconnect.php';
	session_start();
?>
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
	
			<!-- Top header st -->
			<?php include'header.php';?>
				<!-- navbar end -->

				<!-- Banner st -->
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="Assets\image\cancer-gov-hero-widescreen-202301.jpg" class="patientimage">
						<div class="carousel-caption d-none d-md-block textcustom">
							<h3 class="text-light">Research to improve<br> the lives of people with cancer</h3>
						</div>
					</div>
				</div>
				<!-- Banner end -->
				<!-- features st -->
				<div class="row">
					<div class="col-md-3 health_cancer">
						<img src="Assets\image\breast.jpg" class="cancer_img ml-2">
						<h3 class="mt-3">Cancer Shervivorship</h3>
						<p class="text-light">Learn about the issues and side effects can arise cancer servivors, more...</p>
						<button class="readmore">Read more...</button>
					</div>
					<div class="col-md-3 health_cancer">
						<img src="Assets\image\cancer.png" class="cancer_img ml-2">
						<h3 class="mt-3">Clinical Trial Results</h3>
						<p class="text-light">Report from World Health Organization(WHO) records on finding from cancer clinical trials, with commentry from leading researchers, more...</p>
						<button class="readmore">Read more...</button>
					</div>
					<div class="col-md-3 health_cancer">
						<img src="Assets\image\NCP.jpg" class="cancer_img ml-2">
						<h3 class="mt-3">Are You Ready To Contribute to Prograsse Against Cancer?</h3>
						<p class="text-light">Everyone has a role to play in the fight against cancer.Learn more and get involved, more...</p>
						<button class="readmore">Read more...</button>
					</div>
				</div>
				<!-- features end -->

				<!-- Accordian st -->
				<div class="accordion " id="accordionExample">
				 	<div class="row">
				 		<div class="col-md-6 col-sm-6">
							<div class="contentbx">
								<div class="label collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									What is Cancer?
								</div>
								<div class="content collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Cancer Basic
								</div>
								<div class="content collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Type of Cancer
								</div>
								<div class="content collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Cancer Treatment Side Effects
								</div>
								<div class="content collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="contentbx">
								<div class="label collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Cancer Treatment
								</div>
								<div class="content collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Effects of Cancer
								</div>
								<div class="content collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									Cases & Prevention
								</div>
								<div class="content collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
							<div class="contentbx">
								<div class="label collapsed" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									Diagonisis & Staging
								</div>
								<div class="content collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionExample">
									<p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Accordion end -->
				<!-- Resource st -->
				<div class="row resourse ml-2">
					
					<img src="Assets\image\Resources-by-Audience-thumb.jpg" class="resourseimg ml-3 mt-2">
					<div class="paragraph">
						<h3 class="text mt-3">
							<a href="#">Resources for You</a>
						</h3>
						<p class="body text-light ml-4">Find information and resources that fit your needs as a patient, caregiver, health professional, researcher, or other visitor.</p>
					</div>
				</div>
				<!-- Resources end -->
				<!-- footer -->
			    <?php include'footer.php';?>
				<!-- footer -->

	<script type="text/javascript" href="Assets\bootstrap\js\bootstrap.bundle.min.js"></script>
	<script type="text/javascript" href="Assets\bootstrap\js\bootstrap.min.js"></script>
	<script type="text/javascript" href="Assets\project\js\jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" href="jas\hospital.js"></script>
</body>
</html>