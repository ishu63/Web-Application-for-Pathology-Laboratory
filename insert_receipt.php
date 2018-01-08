<?php
include('connect.php');

$test_name=$_POST['test_name'];
$test_charge=$_POST['test_charge'];
$sql="INSERT INTO tests VALUES('','$test_name','$test_charge')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=receipt.php">'; 

?>