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
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=hemogram_profile.php">'; 
}
else
{
$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$date'";
$result=mysql_query($sql) or die('mysql error');
$row=mysql_fetch_array($result);
}

$sql1="SELECT * FROM stool_examination1 WHERE P_ID = '$row[0]'";
$result1=mysql_query($sql1) or die('mysql error');

if(!mysql_fetch_array($result1))
{
echo "<script> alert('Wrong Patient No'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_report.php">'; 
}
else
{
//$sql1="SELECT * FROM stool_examination1 WHERE P_ID = '$row[0]'";
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
			<center><h1>Examination of STOOL</h1></center>
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
			<form  id="form1" action="edit_stool_examination1.php?P_ID=<?php echo $row[0];?>" method="post">
				<div class="grid_12">
					<?php
						$sql1="SELECT * FROM stool_examination1 WHERE P_ID = '$row[0]'";
						$result1=mysql_query($sql1) or die('mysql error');
						$row1=mysql_fetch_array($result1);
						}
					?>
					<u><h4>PHYSICAL EXAMINATION</h4></u>
					<label>
						<span class="text-form fleft">Colour:</span>
						<select name="color">
							<option <?php if($row1[1]=="BROWN"){echo "selected";}?>>BROWN</option>
							<option <?php if($row1[1]=="BLACK"){echo "selected";}?>>BLACK</option>
							<option <?php if($row1[1]=="YELLOW"){echo "selected";}?>>YELLOW</option>
							<option <?php if($row1[1]=="RED"){echo "selected";}?>>RED</option>
						</select>
					</label>
					<label>
						<span class="text-form fleft">Consistency:</span>
						<select name="consistency">
							<option <?php if($row1[2]=="SOFT"){echo "selected";}?>>SOFT</option>
							<option <?php if($row1[2]=="LOOSE"){echo "selected";}?>>LOOSE</option>
							<option <?php if($row1[2]=="HARD"){echo "selected";}?>>HARD</option>
						</select>
					</label>
					<label><span class="text-form">Blood:</span>
						<div class="wrapper pad-form"><input type="radio" name="blood" value="0" <?php if($row1[3]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="blood" value="1" <?php if($row1[3]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Mucus:</span>
						<div class="wrapper pad-form"><input type="radio" name="mucus" value="0" <?php if($row1[4]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="mucus" value="1" <?php if($row1[4]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Pus:</span>
						<div class="wrapper pad-form"><input type="radio" name="pus" value="0" <?php if($row1[5]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="pus" value="1" <?php if($row1[5]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Parasites:</span>
						<div class="wrapper pad-form"><input type="radio" name="parasites" value="0" <?php if($row1[6]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="parasites" value="1" <?php if($row1[6]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<u><h4>CHEMICAL TEST</h4></u>
					<label><span class="text-form">Occult Blood Benzidine Test:</span>
						<div class="wrapper pad-form"><input type="radio" name="blood_benzidine" value="0" <?php if($row1[7]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="blood_benzidine" value="1" <?php if($row1[7]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Reducing Sugar:</span>
						<div class="wrapper pad-form"><input type="radio" name="reducinng_sugar" value="0" <?php if($row1[8]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="reducinng_sugar" value="1" <?php if($row1[8]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Reaction:</span>
						<div class="wrapper pad-form"><input type="radio" name="reaction" value="ACIDIC" <?php if($row1[9]==0){echo "checked";}?>><div class="text-form2 fleft">ACIDIC</div></div>
						<div class="wrapper"><input type="radio" name="reaction" value="ALKALINE" <?php if($row1[9]==1){echo "checked";}?>><div class="text-form2 fleft">ALKALINE</div></div>
					</label>
				</div>
				<div class="grid_12">
					<u><h4>CONCENTRATION METHOD</h4></u>
					<label><span class="text-form">Ova:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[10];?>" name="ova"></label>
					<label><span class="text-form">Cysts:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[11];?>" name="crysts"></label>
					<u><h4>MICROSCOPIC EXAMINATION / HPF</h4></u>
					<label><span class="text-form">Trophozoites:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[12];?>" name="Trophozoites"></label>
					<label><span class="text-form">Ova:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[13];?>" name="Ova1"></label>
					<label><span class="text-form">Cysts:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[14];?>" name="Cysts"></label>
					<label><span class="text-form">Pus Cells/hpf:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[15];?>" name="hpf"></label>
					<label><span class="text-form">RBC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[16];?>" name="RBC"></label>
					<label><span class="text-form">Macrophage Cells:&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[17];?>" name="Macrophage"></label>
					<label><span class="text-form">Epithelial Cells:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[18];?>" name="Epithelial"></label>
					<label><span class="text-form">Vegetable Cells:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						<div class="wrapper pad-form"><input type="radio" name="vegetable_cells" value="0" <?php if($row1[19]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="vegetable_cells" value="1" <?php if($row1[19]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Starch:</span>
						<div class="wrapper pad-form"><input type="radio" name="Starch" value="0" <?php if($row1[20]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="Starch" value="1" <?php if($row1[20]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Bacteria:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[21];?>" name="Bacteria"></label>
					<label><span class="text-form">Neutral Fat:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[22];?>" name="Neutral_Fat"></label>
					<label><span class="text-form">Fatty Acid Crystal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[23];?>" name="Fatty_Acid_Crystal"></label>
					<label><span class="text-form">Fat Globules:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $row1[24];?>" name="Fat_Globules"></label> 
					<label><span class="text-form">Hanging Drop Preparation:</span>
						<div class="wrapper pad-form"><input type="radio" name="Preparation" value="0" <?php if($row1[25]==0){echo "checked";}?>><div class="text-form2 fleft">ABSENT</div></div>
						<div class="wrapper"><input type="radio" name="Preparation" value="1" <?php if($row1[25]==1){echo "checked";}?>><div class="text-form2 fleft">PRESENT</div></div>
					</label>
					<label><span class="text-form">Food Particles:</span><input type="text" value="<?php echo $row1[26];?>" name="Food_Particles"></label>
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