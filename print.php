<!DOCTYPE html>
<?php
$patient_no=$_POST['patient_no'];
$patient_date=$_POST['date'];
session_start();
//On page 1
$_SESSION['patient_no'] = $patient_no;
$_SESSION['patient_date'] = $patient_date;
?>
<html lang="en">
<head>
  	<title>About Us</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/script.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- PRO Framework Panel Begin -->
<div id="advanced">
	<span class="trigger">
		<strong></strong>
		<em></em>
	</span>
	<div class="bg_pro">
		<div class="pro_main">
			<a href="" class="pro_logo"></a>
				<ul class="pro_menu">
					<li><a href="index.html"><img src="images/pro_home.png" alt=""></a></li>
					<li><a href="404.html">Transaction<span></span></a>
						<ul>	
							<li><a href="eklavya.html">Registration</a>
								<ul>
									<li><a href="antenatal_profile.php">1 Antenatal Profile</a></li>
									<li><a href="biochemistry.php">2 Bio Chemistry</a></li>
									<li><a href="bloood_glucose.php">3 Blood Glucose</a></li>
									<li><a href="blood_for_hiv.php">4 Blood For HIV</a></li>
									<li><a href="exam_urin.php">5 Urine Examination</a></li>
									<li><a href="stool_examination.php">6 Stool Examination</a></li>
									<li><a href="sputum.php">7 Sputum Examinition</a></li>
									<li><a href="hemogram_profile.php">8 Hemogram Profile</a></li>
									<li><a href="liver_function_test.php">9 Liver Function Test</a></li>
									<li><a href="mantoux_test.php">10 Mantoux Test</a></li>
									<li><a href="pre_operative_profile.php">11 Pre Operative Profile</a></li>
									<li><a href="s_widal.php">12 S. Widal</a></li>
									<li><a href="thyroid_test.php">13 Thyroid Test</a></li>
									<li><a href="urin_pragnancy.php">14 Urine Pragnancy</a></li>
									<li><a href="patient_entry.php">15 Patient Entry</a></li>
								</ul>
							</li>
							<li><a href="#">Reports Entry</a></li>
							<li><a href="#">Reports Editor</a></li>
							<li><a href="#">Report Printing Tool</a></li>
							<li><a href="#">Print Envelope</a></li>
							<li><a href="#">Reports Delete</a></li>
							<li><a href="#">Due Reciept</a></li>
							<li><a href="#">Locate Patient</a></li>
							<li><a href="#">Out Source Laboratory</a></li>
							<li><a href="#">Income Expence</a></li>
						</ul>
					</li>
					<li><a href="doctor.php">Doctor Entry</a></li>
					<li><a href="receipt.php">receipt</a></li>
					<li><a href="#">utility<span></span></a></li>
					<li><a href="#">stocks<span></span></a></li>
				</ul>
			<div class="clear">
			</div>
		</div>
	</div>
	<div class="bg_pro2"></div>
</div>
	<span class="trigger">
		<strong></strong>
		<em></em>
	</span>
	<div class="bg_pro">
		<div class="pro_main">
			<a href="" class="pro_logo"></a>
				<ul class="pro_menu">
					<li><a href="index.html"><img src="images/pro_home.png" alt=""></a></li>
					<li><a href="404.html">Transaction<span></span></a>
						<ul>	
							<li><a href="eklavya.html">Registration</a>
								<ul>
									<li><a href="antenatal_profile.php">1 Antenatal Profile</a></li>
									<li><a href="biochemistry.php">2 Bio Chemistry</a></li>
									<li><a href="bloood_glucose.php">3 Blood Glucose</a></li>
									<li><a href="blood_for_hiv.php">4 Blood For HIV</a></li>
									<li><a href="exam_urin.php">5 Urine Examination</a></li>
									<li><a href="stool_examination.php">6 Stool Examination</a></li>
									<li><a href="sputum.php">7 Sputum Examinition</a></li>
									<li><a href="hemogram_profile.php">8 Hemogram Profile</a></li>
									<li><a href="liver_function_test.php">9 Liver Function Test</a></li>
									<li><a href="mantoux_test.php">10 Mantoux Test</a></li>
									<li><a href="pre_operative_profile.php">11 Pre Operative Profile</a></li>
									<li><a href="s_widal.php">12 S. Widal</a></li>
									<li><a href="thyroid_test.php">13 Thyroid Test</a></li>
									<li><a href="urin_pragnancy.php">14 Urine Pragnancy</a></li>
									<li><a href="patient_entry.php">15 Patient Entry</a></li>
								</ul>
							</li>
							<li><a href="#">Reports Entry</a></li>
							<li><a href="#">Reports Editor</a></li>
							<li><a href="#">Report Printing Tool</a></li>
							<li><a href="#">Print Envelope</a></li>
							<li><a href="#">Reports Delete</a></li>
							<li><a href="#">Due Reciept</a></li>
							<li><a href="#">Locate Patient</a></li>
							<li><a href="#">Out Source Laboratory</a></li>
							<li><a href="#">Income Expence</a></li>
						</ul>
					</li>
					<li><a href="#">Master</a></li>
					<li><a href="#">reports</a></li>
					<li><a href="#">utility<span></span></a></li>
					<li><a href="#">stocks<span></span></a></li>
				</ul>
			<div class="clear">
			</div>
		</div>
	</div>
	<div class="bg_pro2"></div>
</div>
<!-- PRO Framework Panel End -->
<div class="bg-main">
<header>
		<div class="container_24">
			<div class="wrapper">
				<div class="grid_17">
					<h1><a href="#">Idealex</a></h1>
				</div>
				<div class="grid_7">
				</div>
			</div>
		</div>
	</header>
	<section class="padsection">
		<div class="container_24">
			<div class="grid_12">
				<ul class="list2">
					<li><a href="print_biochemistry.php">Bio Chemistry</a></li>
					<li><a href="print_exam_urin.php">Urine Examination</a></li>
					<li><a href="print_bloood_glucose.php">Blood Glucose</a></li>
					<li><a href="print_antenatal_profile.php">Antenatal Profile</a></li>
					<li><a href="print_blood_for_hiv.php">Blood For HIV</a></li>
					<li><a href="print_stool_examination.php">Stool Examination</a></li>
					<li><a href="print_sputum.php">Sputum Examinition</a></li>
				</ul>
			</div>
			<div class="grid_12">
				<ul class="list2">
					<li><a href="print_hemogram_profile.php">Hemogram Profile</a></li>
					<li><a href="print_liver_function_test.php">Liver Function Test</a></li>
					<li><a href="print_mantoux_test.php">Mantoux Test</a></li>
					<li><a href="print_pre_operative_profile.php">Pre Operative Profile</a></li>
					<li><a href="print_s_widal.php">S. Widal</a></li>
					<li><a href="print_thyroid_test.php">Thyroid Test</a></li>
					<li><a href="print_urin_pragnancy.php">Urine Pragnancy</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="wrapper">
				<div class="grid_24 padline">
					<div class="lineH"></div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
