<?php
include('connect.php');

$old_short_name=$_POST['old_short_name'];
$short_name=$_POST['short_name'];
$full_name=$_POST['full_name'];
$sql="UPDATE doctor_info SET short_name='$short_name',full_name='$full_name' WHERE short_name='$old_short_name'";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doctor.php">';

?>