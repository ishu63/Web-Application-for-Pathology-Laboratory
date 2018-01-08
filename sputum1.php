<!DOCTYPE html>
<?php
include('connect.php');
$patient_no=$_POST['patient_no'];
$date=$_POST['date'];

$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$date'";
$result=mysql_query($sql) or die('mysql error');

if(!mysql_fetch_array($result))
{
echo "<script> alert('Wrong Patient No'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=hemogram_profile.php">'; 
}
else
{
$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$date'";
$result=mysql_query($sql) or die('mysql error');
$row=mysql_fetch_array($result);
}
?>
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
		<!--
		<form id="form1">
    <label><span class="text-form">First Name:</span><input type="text"></label>
    ...
    <label>
        <span class="text-form fleft">Country:</span>
        <select>
            <option>United States</option>
            <option>United States</option>
        </select>
    </label>
    <label>
        <div class="text-form">Message:</div>
        <textarea></textarea>
    </label>
    <div class="wrapper"><input type="radio" name="group1"><div class="text-form2 fleft">Male</div></div>
    <div class="wrapper"><input type="radio" name="group1"><div class="text-form2 fleft">Female</div></div>
    <div class="wrapper"><input type="checkbox"><div class="text-form3 fleft">Sign me up for your newsletter</div></div>
    <a class="btn">Send</a>
</form>
		-->
			<center><h1>SPUTUM EXAMINATION</h1></center>
			<form id="form2">
				<div class="grid_8">
					<label><span class="text-form">Patient No.:</span><input type="text" value="<?php echo $row[1];?>"></label>
					<label><span class="text-form">Name:</span><input type="text" value="<?php echo $row[2];?>"></label>
				</div>
				<div class="grid_8">
					<label><span class="text-form">Doctor's Name:</span><input type="text" value="<?php $sql1="SELECT full_name FROM doctor_info WHERE short_name='$row[3]'";$result1=mysql_query($sql1) or die('mysql error');$row1=mysql_fetch_array($result1);echo $row1['full_name'];?>"></label>
					<label><span class="text-form">Gender:</span><input type="text" value="<?php if( $row[4]==0 ){echo 'Male';}else{echo 'Female';}?>"></label>
				</div>
				<div class="grid_8">
					<label><span class="text-form">Date:</span><input type="text" value="<?php echo $row[5];?>"></label>
					<label><span class="text-form">Age:</span><input class="age" type="text" value="<?php echo $row[6];?>">&nbsp;yrs&nbsp;&nbsp;&nbsp;<input class="age" type="text" value="<?php echo $row[7];?>">&nbsp;months</label>
				</div>
			</form>
			<div class="clear"></div><hr><hr><hr>
			<form id="form1" action="sputum2.php?P_ID=<?php echo $row[0];?>" method="post">
				<div class="grid_12">
					<u><h4>PHYSICAL EXAMINATION</h4></u>
					<label><span class="text-form">Consistency:</span>
						<div class="wrapper"><input type="radio" name="Consistency" value="LOOSE"><div class="text-form2 fleft">LOOSE</div></div>
						<div class="wrapper"><input type="radio" name="Consistency" value="SOFT"><div class="text-form2 fleft">SOFT</div></div>
						<div class="wrapper"><input type="radio" name="Consistency" value="HARD"><div class="text-form2 fleft">HARD</div></div>
					</label>
					<u><h4>DIRECT MICROSCOPIC EXAMINATION</h4></u>
					<label><span class="text-form">Crystals:</span>
						<div class="wrapper"><input type="radio" name="crystal" value="0"><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="crystal" value="1"><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Pus Cell/hpf:</span>
						<div class="wrapper"><input type="radio" name="PUS" value="0"><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="PUS" value="1"><div class="text-form2 fleft">OCCATIONAL</div></div>
					</label>
					<label><span class="text-form">Red Cells:</span>
						<div class="wrapper"><input type="radio" name="red" value="0"><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="red" value="1"><div class="text-form2 fleft">OCCATIONAL</div></div>
					</label>
					<label><span class="text-form">Epithelial Cells:</span>
						<div class="wrapper"><input type="radio" name="cells" value="0"><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="cells" value="1"><div class="text-form2 fleft">OCCATIONAL</div></div>
					</label>
				</div>
				<div class="grid_12">
					<u><h4>BACTERIOLOGICAL EXAMINATION</h4></u>
					<label><span class="text-form">Gram's Stain:</span><span style="padding-left:2em"><input type="text" value="NO ORGANISM SEEN" name="gram_stain"></span></label>
					<label><span class="text-form">Z & N Stain:</span><span style="padding-left:2em"><input type="text" value="NO ORGANISM SEEN" name="zn_stain"></span></label>
					<u><h4>GRAM STAIN PREPARATION</h4></u>
					<label><span class="text-form">Average Pus Cells:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="Pus_cells"></label>
					<label><span class="text-form">Gram Positive Cocci:&nbsp;&nbsp;&nbsp;</span><input type="text" name="Cocci"></label>
					<label><span class="text-form">Gram Negative Bacilli:&nbsp;</span><input type="text" name="Bacilli"></label>
					<label><span class="text-form">Epithelial Cells:</span><span style="padding-left:3em"><input type="text" name="Epithelial"></span></label>
				</div>
				<center><div class="btns"><a class="btn" onClick="document.getElementById('form1').submit()">Save</a></div></center>
				<div class="clear"></div>
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