<!DOCTYPE html>
<?php
include('connect.php');
session_start();
$patient_no=$_SESSION['patient_no'];
$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no'";
$result=mysql_query($sql) or die('mysql error');
if(!mysql_fetch_array($result))
{
echo "<script> alert('Wrong Patient No'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=trail1.php">'; 
}
else
{
$sql="SELECT * FROM patient_entry WHERE patient_no = '$patient_no'";
$result=mysql_query($sql) or die('mysql error');
$row=mysql_fetch_array($result);
}
//On page 1
$_SESSION['patient_no'] = $patient_no;
?>
<html>
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
<div class="bg-main">
	<section class="padsection">
		<div class="container_24">
			<table border="0">
				<tr>
					<td><h3>Patient Form</h3></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><?php echo $row[1];?></td>
				</tr>
				<tr>
					<td>Doctor's Name:</td>
						<select  name="parasites" multiple>
							<option>M.P. NOT DETECTED</option>
							<option>P. Vivex Ring Seen</option>
							<option>P. Vivex Schizont Seen</option>
							<option>P. Vivex Trophozoit Seen</option>
							<option>P. Falciparum Ring Seen</option>
							<option>P. Falciparum Gumtocyte Seen</option>
						</select>
					<td><?php echo $row[2];?></td>
				</tr>
				<tr id="footer">
					<td>Gender:</td>
					<td><?php if($row[3]==0){ echo 'male' ;}else echo 'female';?></td>
				</tr>
				<div class="noprint"><input class="btn print success" id="btnPrint" type="button" value="Print Me!" onclick="window.print();"></div>
			</table>
		</div>
	</section>
</div>
</body>
</html>