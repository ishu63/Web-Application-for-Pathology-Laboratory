<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Krishna Lab</title>
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
<!-- PRO Framework Panel End -->
<div class="bg-main">
	<header>
		<div class="container_24">
			<div class="wrapper">
				<div class="grid_17"></div>
				<div class="grid_7"></div>
			</div>
		</div>
		<nav class="main-menu">
			<div class="clear"></div>
		</nav>
	</header>
	<section class="padsection">
		<div class="container_24">
			<form id="form1" action="patient.php" method="post">
				<div class="grid_24">
					<center><h1>Patient Form</h1></center>
						<!--<label><span class="text-form">Patient No.:</span><input type="int" name="patient_no" required></label>-->
						<label><span class="text-form">Name:</span><input type="text" name="patient_name" required></label>
						<label><span class="text-form">Doctor's Name:</span>
							<select  name="doctor_name">
								<?php
									include('connect.php');
									$sql="SELECT * FROM doctor_info";
									$result=mysql_query($sql)or die('could not connect');
									while($row=mysql_fetch_array($result))
									{
								?>
								<option value="<?php echo $row['short_name'];?>"><?php echo $row['short_name'];?> - <?php echo $row['full_name'];?></option>
								<?php } ?>
							</select>
						</label>
						<div class="wrapper pad-form"><input type="radio" name="gender" value="male"><div class="text-form2 fleft">Male</div></div>
						<div class="wrapper"><input type="radio" name="gender" value="female"><div class="text-form2 fleft">Female</div></div>
						<label><span class="text-form fleft">Date:</span><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"/></label>
						<label><span class="text-form fleft">Age:</span><input type="int1" name="yage">&nbsp;yrs&nbsp;&nbsp;&nbsp;<input type="int1" name="mage">&nbsp;months</label>
						<label><span class="text-form">Tests to be Performed:</span>
							<select  name="test_name[]"  multiple>
								<?php
									include('connect.php');
									$sql="SELECT test_name FROM tests";
									$result=mysql_query($sql)or die('could not connect');
									while($row=mysql_fetch_array($result))
									{
								?>
								<option value="<?php echo $row['test_name'];?>"><?php echo $row['test_name'];?></option>
								<?php } ?>
							</select>
						</label>
						<div class="btns"><a class="btn" onClick="document.getElementById('form1').submit()">Save</a></div>
				</div>
			</form>
			<div class="clear"></div>
			<div class="wrapper">
				<div class="grid_24 padline">
					<div class="lineH"></div>
				</div>
			</div>
		</div>
	</section>
</div>
<footer>
	<div class=" container_24">
		<div class="wrapper"></div>
	</div>
</footer>
</body>
</html>