<?php
include('connect.php');

$old_test_name=$_POST['old_test_name'];
$new_test_name=$_POST['new_test_name'];
$new_test_charge=$_POST['new_test_charge'];
$sql="UPDATE tests SET test_name='$new_test_name',test_charge='$new_test_charge' WHERE test_name='$old_test_name'";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=receipt.php">';

?>