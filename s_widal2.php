<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$Reported_On=$_POST['Reported_On'];
$o=$_POST['o'];
$h=$_POST['h'];
$ah=$_POST['ah'];
$bh=$_POST['bh'];
$reasult=$_POST['reasult'];
$sql="INSERT INTO s_widal VALUES('$P_ID','$Reported_On','$o','$h','$ah','$bh','$reasult')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>