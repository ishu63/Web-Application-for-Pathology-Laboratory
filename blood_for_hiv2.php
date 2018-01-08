<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$HIV=$_POST['HIV'];
$sql="INSERT INTO blood_for_hiv VALUES('$P_ID','$HIV')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>