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
	$sql2="SELECT * FROM biochemistry WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');

	if(!mysql_fetch_row($result2))
	{
	echo "<script> alert('NO entry for this patient'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print0.php">'; 
	}
	else
	{
	$sql2="SELECT * FROM biochemistry WHERE P_ID = '$row1[0]'";
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
	$sql2="SELECT * FROM biochemistry WHERE P_ID = '$row1[0]'";
	$result2=mysql_query($sql2) or die('mysql error');

	if(!mysql_fetch_row($result2))
	{
	echo "<script> alert('NO entry for this patient'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print0.php">'; 
	}
	else
	{
	$sql2="SELECT * FROM biochemistry WHERE P_ID = '$row1[0]'";
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
			<center><h3><u>BIOCHEMISTRY</u></h3></center>
			<div class="grid_9">
				<ul>
					<li><u>TEST</u></li>
					<br>
					<li><b><u>RENAL FUNCTION</u></b></li>
					<li>Blood Urea</li>
					<li>Blood Urea Nitrogen - BUN</li>
					<li>Serum Creatinine</li>
					<li>Serum Uric Acid</li>
					<li>Serum Calcium</li>
					<li>Serum Ionised Free Calcium</li>
					<li><b><u>SERUM ELECTROLYTE</u></b></li>
					<li>Serum Sodium (Na)</li>
					<li>Serum Potassium (K)</li>
					<li>Serum Chloride (Cl)</li>
					<li>Serum Phosphorus</li>
					<li><b><u>SERUM PROTEIN</u></b></li>
					<li>Total</li>
					<li>Albumin</li>
					<li>Globulin</li>
					<li>A/G Ratio</li>
					<li><b><u>LIVER FUNCTION</u></b></li>
					<li>Bilirubin - Total</li>
					<li>Bilirubin - Direct</li>
					<li>Bilirubin - Indirect</li>
					<li>SGPT</li>
					<li>SGOT</li>
					<li>Serum Alkaline Phosphatase</li>
					<li><b><u>LIPID PROFILE</u></b></li>
					<li>Serum Cholesteral</li>
					<li>Serum Triglyceride</li>
					<li>HDL Cholestrol</li>
					<li>LDL Cholestrol</li>
					<li><b><u>RANDOM (RBS)</u></b></li>
					<li>Blood Glucose</li>
					<li>Urine Glucose</li>
					<li>Urine Acetone</li>
					<li>Serum Amylase</li>
					<li>Serum Acid Phosphatase</li>
					<li>Prostatic Fraction</li>
					<li>Serum Lithium</li>
					<li><br></li>
					<li><br></li>
					<li>Serum Cholinesterase</li>
					<li>Serum Lipase</li>
					<li>Magnesium</li>
					<li>Bicarbonate (HCO3-)</li>
					<li>Serum Acetone</li>
					<li>GGTP</li>
					<li>Gamma Glutamyltranserase</li>
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
					<li><br></li>
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
				</ul>
			</div>
			<div class="grid_5" style="text-transform: uppercase;">
				<ul>
					<li><u>RESULT</u></li>
					<br>
					<li><br></li>
					<li><?php if($row2[1]<10 OR $row2[1]>50){echo '<b><u>';echo $row2[1];echo '</u></b>';}else{echo $row2[1];}?></li>
					<li><?php if($row2[2]<4.5 OR $row2[2]>19){echo '<b><u>';echo $row2[2];echo ' </u></b>';}else{echo $row2[2];}?></li>
					<li><?php if($row2[3]<0.6 OR $row2[3]>1.4){echo '<b><u>';echo $row2[3];echo ' </u></b>';}else{echo $row2[3];}?></li>
					<li><?php if($row2[4]<3.4 OR $row2[4]>7){echo '<b><u>';echo $row2[4];echo ' </u></b>';}else{echo $row2[4];}?></li>
					<li><?php if($row2[5]<8.5 OR $row2[5]>10.5){echo '<b><u>';echo $row2[5];echo ' </u></b>';}else{echo $row2[5];}?></li>
					<li><?php if($row2[6]<1.2 OR $row2[6]>1.32){echo '<b><u>';echo $row2[6];echo ' </u></b>';}else{echo $row2[6];}?></li>
					<li><br></li>
					<li><?php if($row2[7]<135 OR $row2[7]>145){echo '<b><u>';echo $row2[7];echo ' </u></b>';}else{echo $row2[7];}?></li>
					<li><?php if($row2[8]<3.5 OR $row2[8]>5.5){echo '<b><u>';echo $row2[8];echo ' </u></b>';}else{echo $row2[8];}?></li>
					<li><?php if($row2[9]<96 OR $row2[9]>106){echo '<b><u>';echo $row2[9];echo ' </u></b>';}else{echo $row2[9];}?></li>
					<li><?php if($row2[10]<2.5 OR $row2[10]>4.5){echo '<b><u>';echo $row2[10];echo ' </u></b>';}else{echo $row2[10];}?></li>
					<li><br></li>
					<li><?php if($row2[11]<6.6 OR $row2[11]>8.3){echo '<b><u>';echo $row2[11];echo ' </u></b>';}else{echo $row2[11];}?></li>
					<li><?php if($row2[12]<3.5 OR $row2[12]>5.0){echo '<b><u>';echo $row2[12];echo ' </u></b>';}else{echo $row2[12];}?></li>
					<li><?php if($row2[13]<2.3 OR $row2[13]>3.5){echo '<b><u>';echo $row2[13];echo ' </u></b>';}else{echo $row2[13];}?></li>
					<li><?php if($row2[14]<1.5 OR $row2[14]>2.5){echo '<b><u>';echo $row2[14];echo ' </u></b>';}else{echo $row2[14];}?></li>
					<li><br></li>
					<li><?php if($row2[15]<0 OR $row2[15]>1){echo '<b><u>';echo $row2[15];echo ' </u></b>';}else{echo $row2[15];}?></li>
					<li><?php if($row2[16]>0.3){echo '<b><u>';echo $row2[16];echo ' </u></b>';}else{echo $row2[16];}?></li>
					<li><?php if($row2[17]<0.1 OR $row2[17]>1.0){echo '<b><u>';echo $row2[17];echo ' </u></b>';}else{echo $row2[17];}?></li>
					<li><?php if($row2[18]<10 OR $row2[18]>40){echo '<b><u>';echo $row2[18];echo ' </u></b>';}else{echo $row2[18];}?></li>
					<li><?php if($row2[19]>40){echo '<b><u>';echo $row2[19];echo ' </u></b>';}else{echo $row2[19];}?></li>
					<li><?php if($row2[20]<25 OR $row2[20]>147){echo '<b><u>';echo $row2[20];echo ' </u></b>';}else{echo $row2[20];}?></li>
					<li><br></li>
					<li><?php if($row2[21]<130 OR $row2[21]>200){echo '<b><u>';echo $row2[21];echo ' </u></b>';}else{echo $row2[21];}?></li>
					<li><?php if($row2[22]<60 OR $row2[22]>165){echo '<b><u>';echo $row2[22];echo ' </u></b>';}else{echo $row2[22];}?></li>
					<li><?php if($row2[23]<30 OR $row2[23]>70){echo '<b><u>';echo $row2[23];echo ' </u></b>';}else{echo $row2[23];}?></li>
					<li><?php if($row2[24]>150){echo '<b><u>';echo $row2[24];echo ' </u></b>';}else{echo $row2[24];}?></li>
					<li><br></li>
					<li><?php if($row2[25]<80 OR $row2[25]>170){echo '<b><u>';echo $row2[25];echo ' </u></b>';}else{echo $row2[25];}?></li>
					<li><?php echo $row2[26];?></li>
					<li><?php echo $row2[27];?></li>
					<li><?php if($row2[28]<22 OR $row2[28]>80){echo '<b><u>';echo $row2[28];echo ' </u></b>';}else{echo $row2[28];}?></li>
					<li><?php if($row2[29]<1.0 OR $row2[29]>3.5){echo '<b><u>';echo $row2[29];echo ' </u></b>';}else{echo $row2[29];}?></li>
					<li><?php if($row2[30]>3.7){echo '<b><u>';echo $row2[30];echo ' </u></b>';}else{echo $row2[30];}?></li>
					<li><?php if($row2[31]<0.6 OR $row2[31]>1.2){echo '<b><u>';echo $row2[31];echo ' </u></b>';}else{echo $row2[31];}?></li>
					<li><br></li>
					<li><br></li>
					<li><?php if($row2[32]<4900 OR $row2[32]>11900){echo '<b><u>';echo $row2[32];echo ' </u></b>';}else{echo $row2[32];}?></li>
					<li><?php if($row2[33]<10 OR $row2[33]>60){echo '<b><u>';echo $row2[33];echo ' </u></b>';}else{echo $row2[33];}?></li>
					<li><?php if($row2[34]<1.9 OR $row2[34]>2.5){echo '<b><u>';echo $row2[34];echo ' </u></b>';}else{echo $row2[34];}?></li>
					<li><?php if($row2[35]<21 OR $row2[35]>30){echo '<b><u>';echo $row2[35];echo ' </u></b>';}else{echo $row2[35];}?></li>
					<li><?php if($row2[36]<2 OR $row2[36]>10){echo '<b><u>';echo $row2[36];echo ' </u></b>';}else{echo $row2[36];}?></li>
					<li><?php if($row2[37]<5 OR $row2[37]>45){echo '<b><u>';echo $row2[37];echo ' </u></b>';}else{echo $row2[37];}?></li>
				</ul>
			</div>
			<div class="grid_2">
				<ul>
					<li><u>UNIT</u></li>
					<br>
					<li><br></li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>µmol/L</li>
					<li><br></li>
					<li>mEq/L</li>
					<li>mEq/L</li>
					<li>mEq/L</li>
					<li>mEq/L</li>
					<li><br></li>
					<li>g/dL</li>
					<li>g/dL</li>
					<li>g/dL</li>
					<li>: 1</li>
					<li><br></li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>IU/L</li>
					<li>IU/L</li>
					<li>U/L</li>
					<li><br></li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li>mg/dL</li>
					<li><br></li>
					<li>mg/dL</li>
					<li><br></li>
					<li><br></li>
					<li>U/L</li>
					<li>U/L</li>
					<li>U/L</li>
					<li>µmol/L</li>
					<li><br></li>
					<li><br></li>
					<li>U/ml</li>
					<li>U/L</li>
					<li>mg/dL</li>
					<li>µmol/L</li>
					<li>mg/dL</li>
					<li>U/L</li>
				</ul>
			</div>
			<div class="grid_7">
				<ul>
					<li><u>REFERENCE</u></li>
					<br>
					<li><br></li>
					<li>10 - 50 mg/dL</li>
					<li>4.5 - 19.0 mg/dL</li>
					<li>0.6 - 1.4 mg/dL</li>
					<li>3.4 - 7.0 mg/dL</li>
					<li>8.5 - 10.5 mg/dL</li>
					<li>1.2 - 1.32 µmol/L</li>
					<li><br></li>
					<li>135 - 154 mEq/L</li>
					<li>3.5 - 5.5 mEq/L</li>
					<li>96 - 106 mEq/L</li>
					<li>2.5 - 4.5 mEq/L</li>
					<li><br></li>
					<li>6.6 - 8.3 g/dL</li>
					<li>3.5 - 5.0 g/dL</li>
					<li>2.3 - 3.5 g/dL</li>
					<li>1.5 - 2.5 : 1</li>
					<li><br></li>
					<li>0.0. - 1.0 mg/dL</li>
					<li>Upto 0.3 mg/dL</li>
					<li>0.1 - 1.0 mg/dL</li>
					<li>10 - 40 IU/L</li>
					<li>Upto 40 IU/L</li>
					<li>25 - 147 U/L</li>
					<li><br></li>
					<li>130 - 200 mg/dL</li>
					<li>60 - 165 mg/dL</li>
					<li>30 - 70 mg/dL</li>
					<li>Upto 150 mg/dL</li>
					<li><br></li>
					<li>80 - 170 mg/dL</li>
					<li><br></li>
					<li><br></li>
					<li>22 - 80 U/L</li>
					<li>1.0 - 3.5 KA Units</li>
					<li>Upto 3.7 U/L</li>
					<li>Therapeutic : 0.6 - 1.2 µmol/L</li>
					<li>Potentially Toxic : > 1.5 µmol/L</li>
					<li>Severly Toxic : > 2.5 µmol/L</li>
					<li>4900.00 - 11900.00 U/L</li>
					<li>10 - 60 U/L</li>
					<li>1.90 - -2.50 mg/dL</li>
					<li>21 - 30 µmol/L</li>
					<li>2.00 - 10.00 mg/dL</li>
					<li>05 - 45 U/L</li>
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