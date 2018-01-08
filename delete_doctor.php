<?php
include('connect.php');

$old_short_name=$_POST['old_short_name'];
$sql="DELETE FROM doctor_info WHERE short_name='$old_short_name'";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully deleted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=doctor.php">';

?>