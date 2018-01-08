<?php
include('connect.php');

if(isset($_GET['show']))
{
	session_start();
	$P_ID = $_SESSION['P_ID'];

	$sql1="SELECT * FROM patient_entry WHERE P_ID = '$P_ID'";
	$result1=mysql_query($sql1) or die('mysql error');

	if(!mysql_fetch_row($result1))
	{
	echo "<script> alert('Wrong P_ID.'); </script>"; 
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=show_report.php?P_ID='.$P_ID.'">'; 
	}
	else
	{
	$sql1="SELECT * FROM patient_entry WHERE P_ID = '$P_ID'";
	$result1=mysql_query($sql1) or die('mysql error');
	$row1=mysql_fetch_array($result1);
	}
	$sql2="SELECT * FROM hemogram_profile WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');

	if(!mysql_fetch_row($result2))
	{
	echo "<script> alert('NO entry for this patient'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print0.php">'; 
	}
	else
	{
	$sql2="SELECT * FROM hemogram_profile WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');
	$row2=mysql_fetch_array($result2);
	}	
}
else{
	session_start();
	$patient_no = $_SESSION['patient_no'];
	$patient_date = $_SESSION['patient_date'];

	$sql1="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$patient_date'";
	$result1=mysql_query($sql1) or die('mysql error');

	if(!mysql_fetch_row($result1))
	{
	echo "<script> alert('Wrong Patient No or date'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print0.php">'; 
	}
	else
	{
	$sql1="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$patient_date'";
	$result1=mysql_query($sql1) or die('mysql error');
	$row1=mysql_fetch_array($result1);
	}
	$sql2="SELECT * FROM hemogram_profile WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');

	if(!mysql_fetch_row($result2))
	{
	echo "<script> alert('NO entry for this patient'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print0.php">'; 
	}
	else
	{
	$sql2="SELECT * FROM hemogram_profile WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');
	$row2=mysql_fetch_array($result2);
	}
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
<head><style type="text/css">
<!--

@media print
{
.noprint {display:none;}
}

@media screen
{
...
}

-->
</style>
</head>
<body>
<div class="bg-main"  style="font-size:18px;line-height: 1.4;">
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
			<!--Patient details-->
			<hr>
			<div class="grid_2">
				<ul>
					<li><b>Name</b></li>
					<li><b>Age</b></li>
					<li><b>Ref By</b></li>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li>:</li>
					<li>:</li>
					<li>:</li>
				</ul>
			</div>
			<div class="grid_14">
				<ul>
					<li><?php echo $row1[2];?></li>
					<li><?php echo $row1[6];?>&nbsp;Yrs.&nbsp;&nbsp;<?php if($row1[7]!=0){echo $row1[7];echo "&nbsp;months";}?></li>
					<li>
						<?php 
							$sql="SELECT full_name FROM doctor_info WHERE short_name='$row1[3]'";
							$result=mysql_query($sql) or die('mysql error');
							$row=mysql_fetch_array($result);
							echo $row['full_name'];
						?>
					</li>
				</ul>
			</div>
			<div class="grid_3">
				<ul>
					<li><b>Sex</b></li>
					<li><b>Date</b></li>
					<li><b>Lab No.</b></li>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li>:</li>
					<li>:</li>
					<li>:</li>
				</ul>
			</div>
			<div class="grid_3">
				<ul>
					<li><?php if($row1[4]==0){echo 'Male';}else{echo 'Female';}?></li>
					<li><?php $new_date = date('d-m-Y', strtotime($row1[5]));echo $new_date;?></li>
					<li><?php echo $row1[1];?></li>
				</ul>
			</div>
			<div class="clear"></div>
			<hr>
			<!--main data-->
			<center><h3><u>HEMOGRAM PROFILE</u></h3></center>
			<div class="grid_8">
				<ul>
					<li><u>TEST</u></li>
					<br>
					<li><b><u>BLOOD COUNTS & INDICES</u></b></li>
					<li>Haemoglobin</li>
					<li>Total RBC</li>
					<li>PCV</li>
					<li>MCV</li>
					<li>MCH</li>
					<li>MCHC</li>
					<li>Total WBC</li>
					<li>Platelet Count</li>
					<li>Absolute Eosinophil Count- AEC</li>
					<li><b><u>DIFFERENTIAL LEUCOCYTES COUNT</u></b></li>
					<li>Band Cells</li>
					<li>Neutrophils</li>
					<li>Lymphocytes</li>
					<li>Eosinophil</li>
					<li>Monocytes</li>
					<li>Basophils</li>
					<li><b><u>R.B.C. MORPHOLOGY</u></b></li>
					<li>Normocytes</li>
					<li>Normochromasia</li>
					<li>Platelet in Smear</li>
					<li>PARASITES (By Thin & Thick Smear)</li>
					<li><br></li>
					<li><br></li>
					<li><b><u>ERYTHROCYTES SEDIMENTATION RATE</u></b></li>
					<li>ESR After 1st Hour</li>
					<li><b><u>BLEEDING & CLOTTING TIME</u></b></li>
					<li>Bleeding Time</li>
					<li>Clotting Time</li>
					<li>Blood Group</li>
					<li>Rh Factor (Anti D.)</li>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li><u><br></u></li>
					<br>
					<li><br></li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li><br></li>
					<li><br></li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li><br></li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li>:</li>
					<li><br></li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
					<li>:</li>
				</ul>
			</div>
			<div class="grid_6" style="text-transform: uppercase;">
				<ul>
					<li><u>RESULT</u></li>
					<br>
					<li><br></li>
					<li><?php if($row2[1]<13.5 OR $row2[1]>18.0){echo '<b><u>';echo $row2[1];echo '</u></b>';}else{echo $row2[1];}?></li>
					<li><?php if($row2[2]<4.6 OR $row2[2]>6.2){echo '<b><u>';echo $row2[2];echo '</u></b>';}else{echo $row2[2];}?></li>
					<li><?php if($row2[3]<40 OR $row2[3]>54){echo '<b><u>';echo $row2[3];echo ' </u></b>';}else{echo $row2[3];}?></li>
					<li><?php if($row2[4]<80 OR $row2[4]>96){echo '<b><u>';echo $row2[4];echo ' </u></b>';}else{echo $row2[4];}?></li>
					<li><?php if($row2[5]<27 OR $row2[5]>31){echo '<b><u>';echo $row2[5];echo ' </u></b>';}else{echo $row2[5];}?></li>
					<li><?php if($row2[6]<32 OR $row2[6]>36){echo '<b><u>';echo $row2[6];echo ' </u></b>';}else{echo $row2[6];}?></li>
					<li><?php if($row2[7]<4000 OR $row2[7]>11000){echo '<b><u>';echo $row2[7];echo ' </u></b>';}else{echo $row2[7];}?></li>
					<li><?php if($row2[8]<1.5 OR $row2[8]>4.0){echo '<b><u>';echo $row2[8];echo ' </u></b>';}else{echo $row2[8];}?></li>
					<li><?php if($row2[9]<40 OR $row2[9]>440){echo '<b><u>';echo $row2[9];echo ' </u></b>';}else{echo $row2[9];}?></li>
					<li><br></li>
					<li><br></li>
					<li><?php if($row2[10]<0 OR $row2[10]>6){echo '<b><u>';echo $row2[10];echo ' </u></b>';}else{echo $row2[10];}?></li>
					<li><?php if($row2[11]<55 OR $row2[11]>70){echo '<b><u>';echo $row2[11];echo ' </u></b>';}else{echo $row2[11];}?></li>
					<li><?php if($row2[12]<20 OR $row2[12]>40){echo '<b><u>';echo $row2[12];echo ' </u></b>';}else{echo $row2[12];}?></li>
					<li><?php if($row2[13]<1 OR $row2[13]>6){echo '<b><u>';echo $row2[13];echo ' </u></b>';}else{echo $row2[13];}?></li>
					<li><?php if($row2[14]<2 OR $row2[14]>8){echo '<b><u>';echo $row2[14];echo ' </u></b>';}else{echo $row2[14];}?></li>
					<li><?php if($row2[15]<0 OR $row2[15]>1){echo '<b><u>';echo $row2[15];echo ' </u></b>';}else{echo $row2[15];}?></li>
					<li><br></li>
					<li><?php echo $row2[16];?></li>
					<li><?php echo $row2[17];?></li>
					<li><?php echo $row2[18];?></li>
					<li><?php echo $row2[19];?></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><?php if($row2[20]<1 OR $row2[20]>7){echo '<b><u>';echo $row2[20];echo ' </u></b>';}else{echo $row2[20];}?></li>
					<li><br></li>
					<li><?php if($row2[21]>5){echo '<b><u>';echo $row2[21];echo ' </u></b>';}else{echo $row2[21];}?></li>
					<li><?php if($row2[22]>11){echo '<b><u>';echo $row2[22];echo ' </u></b>';}else{echo $row2[22];}?></li>
					<li><?php echo $row2[23];?></li>
					<li><?php if($row2[24]==0){echo 'NAGATIVE';}else{echo 'POSITIVE';}?></li>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li><u>UNIT</u></li>
					<br>
					<li><br></li>
					<li>gm%</li>
					<li>mill/cmm</li>
					<li>%</li>
					<li>fL</li>
					<li>pg</li>
					<li>%</li>
					<li>/cmm</li>
					<li>/cmm</li>
					<li>/cmm</li>
					<li><br></li>
					<li><br></li>
					<li>%</li>
					<li>%</li>
					<li>%</li>
					<li>%</li>
					<li>%</li>
					<li>%</li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li>mm</li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
				</ul>
			</div>
			<div class="grid_3">
				<ul>
					<li>&nbsp;&nbsp;&nbsp;<u>METHOD</u></li>
					<br>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li>Westergren</li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
				</ul>
			</div>
			<div class="grid_5">
				<ul>
					<li><u>REFERENCE</u></li>
					<br>
					<li><br></li>
					<li>13.5 - 18.0 gm%</li>
					<li>4.6 - 6.2 mill/cmm</li>
					<li>40 - 54 %</li>
					<li>80 - 96 fL</li>
					<li>27 - 31 pg</li>
					<li>32 - 36 %</li>
					<li>4,000 - 11,000/cmm</li>
					<li>1.5 - 4.0 lac/cmm</li>
					<li>40 - 440/cmm</li>
					<li><br></li>
					<li><br></li>
					<li>00 - 06 %</li>
					<li>55 - 70 %</li>
					<li>20 - 40 %</li>
					<li>01 - 06 %</li>
					<li>02 - 08 %</li>
					<li>00 - 01 %</li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li><br></li>
					<li>01 - 07 mm</li>
					<li><br></li>
					<li>Upto 05 min</li>
					<li>Upto 11 min</li>
					<li><br></li>
					<li><br></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="wrapper">
				<div class="grid_24 padline">
					<div class="lineH"></div>
				</div>
			</div>
			<center><div class="noprint"><input class="btn print success" id="btnPrint" type="button" value="Print Me!" onclick="window.print();"><br><br><a href="index.html"><img src="images/pro_home.png" alt=""></a></div></center>
		</div>
	</section>
</div>
</body>
</html>