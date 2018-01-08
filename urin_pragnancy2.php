<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$sample=$_POST['sample'];
$result=$_POST['result'];
$method=$_POST['method'];
$sql="INSERT INTO urin_pragnancy VALUES('$P_ID','$sample','$result','$method')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>