<?php
include('connect.php');

$short_name=$_POST['short_name'];
$full_name=$_POST['full_name'];
$sql="INSERT INTO doctor_info VALUES('$short_name','$full_name')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doctor.php">'; 

?>