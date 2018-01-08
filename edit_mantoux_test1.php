<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$read_on=$_POST['read_on'];
$read_after=$_POST['read_after'];
$result1=$_POST['result'];
$Induration=$_POST['Induration'];
$Erythemia=$_POST['Erythemia'];
$Necrosis=$_POST['Necrosis'];
$sql="DELETE FROM mantoux_test WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO mantoux_test VALUES('$P_ID','$read_on','$read_after','$result1','$Induration','$Erythemia','$Necrosis')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>