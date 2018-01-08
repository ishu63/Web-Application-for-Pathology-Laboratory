<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$Bilirubin_Total=$_POST['Bilirubin_Total'];
$Bilirubin_Direct=$_POST['Bilirubin_Direct'];
$Bilirubin_Indirect=$_POST['Bilirubin_Indirect'];
$SGPT=$_POST['SGPT'];
$SGOT=$_POST['SGOT'];
$Phosphatase=$_POST['Phosphatase'];
$Patient_PT=$_POST['Patient_PT'];
$Control_PT=$_POST['Control_PT'];
$ISI=$_POST['ISI'];
$Index=$_POST['Index'];
$Ratio=$_POST['Ratio'];
$INR=$_POST['INR'];
$sql="DELETE FROM liver_function_test WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO liver_function_test VALUES('$P_ID','$Bilirubin_Total','$Bilirubin_Direct','$Bilirubin_Indirect','$SGPT','$SGOT','$Phosphatase','$Patient_PT','$Control_PT','$ISI','$Index','$Ratio','$INR')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>