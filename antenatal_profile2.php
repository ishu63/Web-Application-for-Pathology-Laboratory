<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$b_group=$_POST['b_group'];
$rh_factor=$_POST['rh_factor'];
$vdrl=$_POST['vdrl'];
$sample=$_POST['sample'];
$blood_glucose=$_POST['blood_glucose'];
$urin_sugar=$_POST['urin_sugar'];
$urin_Acetone=$_POST['urin_Acetone'];
$hbsag=$_POST['hbsag'];
$shiv=$_POST['shiv'];
$sql="INSERT INTO antenatal_profile VALUES ('$P_ID','$b_group','$rh_factor','$vdrl','$sample','$blood_glucose','$urin_sugar','$urin_Acetone','$hbsag','$shiv')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>