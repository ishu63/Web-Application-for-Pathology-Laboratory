<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$b_group=$_POST['b_group'];
$rh_factor=$_POST['rh_factor'];
$rbs=$_POST['rbs'];
$Creatinine=$_POST['Creatinine'];
$SGPT=$_POST['SGPT'];
$hb=$_POST['hb'];
$hiv=$_POST['hiv'];
$pateint=$_POST['pateint'];
$Control=$_POST['Control'];
$Index=$_POST['Index'];
$Ratio=$_POST['Ratio'];
$Value=$_POST['Value'];
$INR=$_POST['INR'];
$sql="DELETE FROM pre_operative_profile WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO pre_operative_profile VALUES('$P_ID','$b_group','$rh_factor','$rbs','$Creatinine','$SGPT','$hb','$hiv','$pateint','$Control','$Index','$Ratio','$Value','$INR')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>