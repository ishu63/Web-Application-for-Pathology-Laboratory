<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$t3lg=$_POST['t3lg'];
$T3=$_POST['T3'];
$T4=$_POST['T4'];
$TSH=$_POST['TSH'];
$FT3=$_POST['FT3'];
$FT4=$_POST['FT4'];
$PTH=$_POST['PTH'];
$sql="DELETE FROM thyroid_test WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO thyroid_test VALUES('$P_ID','$t3lg','$T3','$T4','$TSH','$FT3','$FT4','$PTH')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>