<?php
include('connect.php');
$sql="SELECT patient_no,date,P_ID FROM patient_entry ORDER BY P_ID DESC LIMIT 1";
$result = mysql_query($sql) or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) {
	if(date("Y-m-d") == $row['date'])
	{
		$patient_no=$row['patient_no']+1;
	}
	else
	{
		$patient_no=1;
	}
}
// Free the resources associated with the result set
// This is done automatically at the end of the script
mysql_free_result($result);

$patient_name=$_POST['patient_name'];
$doctor_name=$_POST['doctor_name'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$yage=$_POST['yage'];
$mage=$_POST['mage'];
if($gender=='male')
{
	$gender=0;
}
else
{
	$gender=1;
}
//(P_ID,patient_no,name,doctor,gender,Date_Format('date','%d/%m/%Y'),yage,mage)
$sql="INSERT INTO patient_entry VALUES('','$patient_no','$patient_name','$doctor_name','$gender','$date','$yage','$mage')";
$result=mysql_query($sql) or die('mysql error');

$sql1="SELECT P_ID FROM patient_entry ORDER BY P_ID DESC LIMIT 1";
$result1 = mysql_query($sql1) or die('Invalid query: ' . mysql_error());
while ($row1 = mysql_fetch_assoc($result1)) {
	$P_ID=$row1['P_ID'];
}

foreach ($_POST['test_name'] as $test_name) {
	
	$sql3="SELECT test_id FROM tests WHERE test_name='$test_name'";
	$result3=mysql_query($sql3) or die('mysql error');
	$row3 = mysql_fetch_assoc($result3);
	$test_id = $row3['test_id'];
	
	$sql2="INSERT INTO patient_tests VALUES('$P_ID','$test_id')";
	$result2=mysql_query($sql2) or die('mysql error');
}

echo "<script> alert('successfully saved Patient No. $patient_no.!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>