<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$fbg=$_POST['fbg'];
$fug=$_POST['fug'];
$fua=$_POST['fua'];
$ppbg=$_POST['ppbg'];
$ppug=$_POST['ppug'];
$ppua=$_POST['ppua'];
$sql="INSERT INTO bloood_glucose VALUES('$P_ID','$fbg','$fug','$fua','$ppbg','$ppug','$ppua')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>