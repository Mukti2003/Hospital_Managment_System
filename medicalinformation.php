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
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
	<div class="main">
		<div class="">
			<!-- Top header st -->
			<?php include'header.php';?>
			<!-- navbar end -->
			<!-- Case studies st -->
			<div class="row">
				<h1 class="headingmedical">
					<p class="textmedical">Medical Case Studies</p>
				</h1>
				<div class="col-md-12 contentvideo">
					<div class="col-md-6 contentmedical">
						<h2 class="">
							<p class="contenthead">Why Use Case Study?</p>
						</h2>
						<p class="content_text">Patient's love stories.</p>
						<p class="content_text">They are excellent for cridibility, engagement and conversion.</p>
						<p class="content_text">Case studies don't have boring.</p>
						<p class="content_text">Case Studies enable the patient or family member to understand in overview form what to expect from your practice.</p>
					</div>
					<div class="col-md-6 ">
						<video class="videobox" autoplay loop muted>
							<source src="Assets\image\medical.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<!-- Case studies end -->

			<!-- Beifits of case studies st -->
			<div class="row mt-4">
				<div class="col-md-12">
					<h1 class="benifitshead">Benifits of Medical Case Studies</h1>
					<p class="benifitstext text-center">The benifits of case studies and patients stories are they:</p>
				</div>
			</div>
			<div class="row benifitsbody">
				<div class="col-md-12 d-flex">
					<div class="col-md-6 firsttext">
						<h4 class="textcolor text-center mt-4 ">Easily engage visitors</h4>
						<h4 class="textcolor text-center mt-3">Tell a story to maintain attention more than facts</h4>
						<h4 class="textcolor text-center mt-3">Resonate emotionally and bridge the trust gap</h4>
					</div>
					<div class="col-md-6 firsttext">
						<h4 class="textcolor text-center mt-4">Emphasise a problem or solution as a human story</h4>

						<h4 class="textcolor text-center mt-3">Showcase your service in a real world setting</h4>

						<h4 class="textcolor text-center mt-3">Offer transparency and increase trust</h4>
					</div>
				</div>
			</div>
			<!-- Benifits of case studies end -->
			<!-- Type of case studies st -->
			<div class="row mt-4">
				<div class="col-md-12">
					<h1 class="textmedical text-center">Depersonalized Case Study</h1>
					<p class="benifitstext text-center">Whether by convention, regulation or your patients sometime an ‘unnamed’ patient case study or patient story is more than acceptable.</p>
					<p class="Depersonalized text-center">As a well structured case study will address many of the benefits previously stated</p>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
					<h1 class="textmedical text-center">Personalized Case Study</h1>
					<p class="benifitstext text-center">Choosing case study candidates, especially for sensitive patient journeys like plastic surgery or bariatrics can be a sensitive conversation. However, <br>many clients have achieved this. To identify patients who:</p>
					<ul class="list">
						<li>Are happy to celebrate their outcomes</li>
						<li>Have a good stories with unexpected or topical switchers</li>
						<li>Represent your ‘ideal patient profile’ age, demographics etc</li>
						<li>Are willing to supply before and afters</li>
						<li>Will allow the practice to post the story on websites, social media or review websites</li>
					</ul>
				</div>
			</div>
			<!-- Type of case studies end -->
			<!-- Easy case study format st -->
			<div class="row mt-4">
				<div class="col-md-12">
					<h1 class="textmedical text-center">Easy Case Study Format</h1>
					<ul class="list">
						<li>
							<span class="case_study_format">Before-</span>
							<p class="case_study_format_text"> Before you start, you need to outline the problem your patient is facing and know the specific outcomes. Below is a list of open questions you may consider but try to keep it simple:</p>
						</li>
						<li>
							<span class="case_study_format">During-</span>
							<p class="case_study_format_text"> Often the procedure or treatment is better understood by the doctor, but if the patient has explicit recollections they bring authenticity to the story</p>
						</li>
						<li>
							<span class="case_study_format">After-</span>
							<p class="case_study_format_text"> This is the most important and is often where a case study should start and the before and during steps should follow.</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- Easy case study format end -->
			<!-- Four div st -->
			<div class="row">
				<div class="col-md-3">
					<div class="medical_information">
						<img src="Assets\image\dept.jpg" class="medical_information_img">
						<h4 class="mt-2 text-center">Depertments</h4>
						<p class="madical_text text-center">TATA MEMORIAL HOSPITAL departments, divisions, programs, centers, institutes & labs all play a crucial part in our search for eliminating cancer.</p>
					</div>
					<div class="read_more">
						<a href="#"><button class="btn btn-outline-success mt-3" type="submit">Read More</button></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="medical_information">
						<img src="Assets\image\digital-library.jpg" class="medical_information_img">
						<h4 class="mt-2 text-center">Digital Library</h4>
						<p class="madical_text text-center">The Library of the TATA MEMORIAL HOSPITAL has been maintained since the inception of the hospital. It was relocated on 17th November 2000.</p>
					</div>
					<div class="read_more">
						<a href="#"><button class="btn btn-outline-success mt-3" type="submit">Read More</button></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="medical_information">
						<img src="Assets\image\diseases.jpg" class="medical_information_img">
						<h4 class="mt-2 text-center">Disease Management Group</h4>
						<p class="madical_text text-center ">ADULT HAEMATO LYMPHOID, BONE AND SOFT TISSUE, BREAST, GASTRO INTESTINAL (GI), GYNECOLOGY, HEAD & NECK SERVICES & more.</p>
					</div>
					<div class="read_more">
						<a href="#"><button class="btn btn-outline-success mt-3" type="submit">Read More</button></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="medical_information">
						<img src="Assets\image\expertise.jpg" class="medical_information_img">
						<h4 class="mt-2 text-center">Expertise Network</h4>
						<p class="madical_text text-center">Connect . Share . Discover. VIVO is a research-focused discovery tool that enables collaboration among scientists across all disciplines.</p>
					</div>
					<div class="read_more">
						<a href="#"><button class="btn btn-outline-success mt-3" type="submit">Read More</button></a>
					</div>
				</div>
			</div>
			<!-- Four div end -->
			<!-- footer -->
		    <?php include'footer.php';?>
			<!-- footer -->
		</div>
	</div>

	<script type="text/javascript" src="Assets/jas/hospital.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="jquery.counterup.min.js"></script>
</body>
</html>