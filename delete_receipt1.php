<?php
include('connect.php');

$test_name=$_POST['test_name'];
$sql="DELETE FROM tests WHERE test_name='$test_name'";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully deleted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=receipt.php">';

?>