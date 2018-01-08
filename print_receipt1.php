<?php
include('connect.php');

$patient_no=$_POST['patient_no'];
$patient_date=$_POST['date'];

$sql1="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$patient_date'";
$result1=mysql_query($sql1) or die('mysql error');

if(!mysql_fetch_row($result1))
{
echo "<script> alert('Wrong Patient No or date'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print_receipt.html">'; 
}
else
{
$sql1="SELECT * FROM patient_entry WHERE patient_no = '$patient_no' AND date='$patient_date'";
$result1=mysql_query($sql1) or die('mysql error');
$row1=mysql_fetch_array($result1);
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
			<center><h3><u>PAYMENT RECEIPT</u></h3></center>
			<div class="grid_14">
				<ul>
					<li><u>TEST</u></li>
					<br>
					<?php
						$count=0;
						foreach ($_POST['test_name'] as $test_name) {
							echo '<li>'.$test_name.'</li>';
							$sql2="SELECT test_charge FROM tests WHERE test_name='$test_name'";
							$result2=mysql_query($sql2) or die('mysql error');

							if(!mysql_fetch_row($result2))
							{
								echo "<script> alert('Wrong Patient No or date'); </script>";
								echo '<META HTTP-EQUIV="Refresh" Content="0; URL=print_receipt.html">'; 
							}
							else
							{
								$sql2="SELECT test_charge FROM tests WHERE test_name='$test_name'";
								$result2=mysql_query($sql2) or die('mysql error');
								$row2=mysql_fetch_array($result2);
								$charge[$count++] = $row2['test_charge'];
							}
						}
					?>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li><u><br></u></li>
					<br>
				</ul>
			</div>
			<div class="grid_9">
				<ul>
					<li><u>AMOUNT</u></li>
					<br>
					<?php 
						$count=0;
						$sum=0;
						while(isset($charge[$count]))
						{
							$sum=$sum+$charge[$count];
							echo '<li> ₹ '.$charge[$count++].'</li>';
						}
					?>
				</ul>
			</div>
			<div class="clear"></div>
			<hr style="border: 1px dashed;" />
			<div class="grid_14">
				<ul>
					<li><b>TOTAL</b></li>
				</ul>
			</div>
			<div class="grid_1">
				<ul>
					<li><br></li>
				</ul>
			</div>
			<div class="grid_9">
				<ul>
					<li><?php echo '₹ '.$sum; ?></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="wrapper">
				<div class="grid_24 padline">
					<div class="lineH"></div>
				</div>
			</div>
			<center><div class="noprint"><input class="btn print success" id="btnPrint" type="button" value="Print Me!" onclick="window.print();"><br><br><a href="index.html"><img src="images/pro_home.png" alt=""></a></div></center>
			
			<div class="clear"></div>
		</div>
	</section>
</div>
</body>
</html>