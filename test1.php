<?php
include('connect.php');
$result = mysql_query('SELECT patient_no,date,P_ID
                         FROM patient_entry
                     ORDER BY P_ID DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  $patient_no=$row['patient_no']+1;
}

$sql="INSERT INTO patient_entry VALUES('','$patient_no','','','','','')";
$result1=mysql_query($sql) or die('mysql error');

// Free the resources associated with the result set
// This is done automatically at the end of the script
mysql_free_result($result);

?>