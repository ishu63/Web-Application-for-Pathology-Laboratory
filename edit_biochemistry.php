<!DOCTYPE html>
<?php
include('connect.php');
$patient_no=$_GET['patient_no'];
$date=$_GET['date'];

$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$date'";
$result=mysql_query($sql) or die('mysql error');

if(!mysql_fetch_array($result))
{
echo "<script> alert('Wrong Patient No'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_report.php">'; 
}
else
{
$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$date'";
$result=mysql_query($sql) or die('mysql error');
$row=mysql_fetch_array($result);
}

$sql1="SELECT * FROM biochemistry WHERE P_ID = '$row[0]'";
$result1=mysql_query($sql1) or die('mysql error');

if(!mysql_fetch_array($result1))
{
echo "<script> alert('Wrong Patient No'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_report.php">'; 
}
else
{
//$sql1="SELECT * FROM biochemistry WHERE P_ID = '$row[0]'";
//$result1=mysql_query($sql1) or die('mysql error');
//$row1=mysql_fetch_array($result1);
//}
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
			<center><h1>BIOCHEMISTRY</h1></center>
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
			<form id="form1" action="edit_biochemistry1.php?P_ID=<?php echo $row[0];?>" method="post">
				<div class="grid_8">
					<?php
						$sql1="SELECT * FROM biochemistry WHERE P_ID = '$row[0]'";
						$result1=mysql_query($sql1) or die('mysql error');
						$row1=mysql_fetch_array($result1);
						}
					?>
					<u><h4>RENAL FUNCTION</h4></u>
					<label><span class="text-form">Blood Urea:</span><input type="text" name="Blood_Urea" value="<?php echo $row1[1];?>"></label>
					<label><span class="text-form">Blood Urea <br>Nitrogen-BUN:</span><input type="text" name="Nitrogen_BUN" value="<?php echo $row1[2];?>"></label>
					<label><span class="text-form">Serum Creatinine:</span><input type="text" name="Creatinine" value="<?php echo $row1[3];?>"></label>
					<label><span class="text-form">Serum Uric Acid:</span><input type="text" name="Uric_Acid" value="<?php echo $row1[4];?>"></label>
					<label><span class="text-form">Serum Calcium:</span><input type="text" name="Calcium" value="<?php echo $row1[5];?>"></label>
					<label><span class="text-form">Serum Ionised <br>Free Calcium:</span><input type="text" name="Ionised" value="<?php echo $row1[6];?>"></label>
					<u><h4>SERUM ELECTROLYTE</h4></u>
					<label><span class="text-form">Serum Sodium(Na):</span><input type="text" name="Na" value="<?php echo $row1[7];?>"></label>
					<label><span class="text-form">Serum <br>Potassium(K):</span><input type="text" name="K" value="<?php echo $row1[8];?>"></label>
					<label><span class="text-form">Serum Chloride(Cl):</span><input type="text" name="Cl" value="<?php echo $row1[9];?>"></label>
					<label><span class="text-form">Serum Phosphorus:</span><input type="text" name="Phosphorus" value="<?php echo $row1[10];?>"></label>
					<u><h4>SERUM PROTEIN</h4></u>
					<label><span class="text-form">Total:</span><input type="text" name="Total" value="<?php echo $row1[11];?>"></label>
					<label><span class="text-form">Albumin:</span><input type="text" name="Albumin" value="<?php echo $row1[12];?>"></label>
					<label><span class="text-form">Globulin:</span><input type="text" name="Globulin" value="<?php echo $row1[13];?>"></label>
					<label><span class="text-form">A/G Ratio:</span><input type="text" name="AG_Ratio" value="<?php echo $row1[14];?>"></label>
				</div>
				<div class="grid_8">
					<u><h4>LIVER FUNCTION</h4></u>
					<label><span class="text-form">Bilirubin-Total:</span><input type="text" name="Bilirubin_Total" value="<?php echo $row1[15];?>"></label>
					<label><span class="text-form">Bilirubin-Direct:</span><input type="text" name="Bilirubin_Direct" value="<?php echo $row1[16];?>"></label>
					<label><span class="text-form">Bilirubin-Indirect:</span><input type="text" name="Bilirubin_Indirect" value="<?php echo $row1[17];?>"></label>
					<label><span class="text-form">SGPT:</span><input type="text" name="SGPT" value="<?php echo $row1[18];?>"></label>
					<label><span class="text-form">SGOT:</span><input type="text" name="SGOT" value="<?php echo $row1[19];?>"></label>
					<label><span class="text-form">Serum Alkaline <br> Phosphatase:</span><input type="text" name="Phosphatase" value="<?php echo $row1[20];?>"></label>
					<u><h4>LIPID PROFILE</h4></u>
					<label><span class="text-form">Serum Cholesterol:</span><input type="text" name="Cholesterol" value="<?php echo $row1[21];?>"></label>
					<label><span class="text-form">Serum Triglyceride:</span><input type="text" name="Triglyceride" value="<?php echo $row1[22];?>"></label>
					<label><span class="text-form">HDL Cholesterol:</span><input type="text" name="HDL" value="<?php echo $row1[23];?>"></label>
					<label><span class="text-form">LDL Cholesterol:</span><input type="text" name="LDL" value="<?php echo $row1[24];?>"></label>
					<u><h4>RANDOM(RBS)</h4></u>
					<label><span class="text-form">Blood Glucose:</span><input type="text" name="Blood_Glucose" value="<?php echo $row1[25];?>"></label>
					<label><span class="text-form">Urine Glucose:</span>
						<select name="Urine_Glucose">
							<option <?php if($row1[26]=='ABSENT'){echo "selected";}?>>ABSENT</option>
							<option <?php if($row1[26]=='TRACE'){echo "selected";}?>>TRACE</option>
							<option <?php if($row1[26]=='PRESENT(+)'){echo "selected";}?>>PRESENT(+)</option>
							<option <?php if($row1[26]=='PRESENT(++)'){echo "selected";}?>>PRESENT(++)</option>
							<option <?php if($row1[26]=='PRESENT(+++)'){echo "selected";}?>>PRESENT(+++)</option>
							<option <?php if($row1[26]=='PRESENT(++++)'){echo "selected";}?>>PRESENT(++++)</option>
						</select>
					</label>
					<label><span class="text-form">Urine Acetone:</span>
						<select name="Urine_Acetone">
							<option <?php if($row1[27]=='ABSENT'){echo "selected";}?>>ABSENT</option>
							<option <?php if($row1[27]=='TRACE'){echo "selected";}?>>TRACE</option>
							<option <?php if($row1[27]=='PRESENT(+)'){echo "selected";}?>>PRESENT(+)</option>
							<option <?php if($row1[27]=='PRESENT(++)'){echo "selected";}?>>PRESENT(++)</option>
							<option <?php if($row1[27]=='PRESENT(+++)'){echo "selected";}?>>PRESENT(+++)</option>
							<option <?php if($row1[27]=='PRESENT(++++)'){echo "selected";}?>>PRESENT(++++)</option>
						</select>
					</label>
					<label><span class="text-form">Serum Amylase:</span><input type="text" name="Amylase" value="<?php echo $row1[28];?>"></label>
				</div>
				<div class="grid_8">
					<label><span class="text-form"></span></label>
					<label><span class="text-form">Serum Acid<br>Phosphate:</span><input type="text" name="Phosphate" value="<?php echo $row1[29];?>"></label>
					<label><span class="text-form">Prostatc Fraction:</span><input type="text" name="Fraction" value="<?php echo $row1[30];?>"></label>
					<label><span class="text-form">Serum Lithium:</span><input type="text" name="Lithium" value="<?php echo $row1[31];?>"></label>
					<label><span class="text-form">Serum <br>Cholinesterase:</span><input type="text" name="Cholinesterase" value="<?php echo $row1[32];?>"></label>
					<label><span class="text-form">Serum Lipase:</span><input type="text" name="Lipase" value="<?php echo $row1[33];?>"></label>
					<label><span class="text-form">Magnesium:</span><input type="text" name="Magnesium" value="<?php echo $row1[34];?>"></label>
					<label><span class="text-form">Bicarbonate<br>(HCO3-):</span><input type="text" name="Bicarbonate" value="<?php echo $row1[35];?>"></label>
					<label><span class="text-form">Serum Acetone:</span><input type="text" name="Acetone" value="<?php echo $row1[36];?>"></label>
					<label><span class="text-form">GGTP:</span><input type="text" name="GGTP" value="<?php echo $row1[37];?>"></label>
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