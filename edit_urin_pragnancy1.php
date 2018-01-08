<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$sample=$_POST['sample'];
$result=$_POST['result'];
$method=$_POST['method'];
$sql="DELETE FROM urin_pragnancy WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO urin_pragnancy VALUES('$P_ID','$sample','$result','$method')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>