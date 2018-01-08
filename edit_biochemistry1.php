<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$Blood_Urea=$_POST['Blood_Urea'];
$Nitrogen_BUN=$_POST['Nitrogen_BUN'];
$Creatinine=$_POST['Creatinine'];
$Uric_Acid=$_POST['Uric_Acid'];
$Calcium=$_POST['Calcium'];
$Ionised=$_POST['Ionised'];
$Na=$_POST['Na'];
$K=$_POST['K'];
$Cl=$_POST['Cl'];
$Phosphorus=$_POST['Phosphorus'];
$Total=$_POST['Total'];
$Albumin=$_POST['Albumin'];
$Globulin=$_POST['Globulin'];
$AG_Ratio=$_POST['AG_Ratio'];
$Bilirubin_Total=$_POST['Bilirubin_Total'];
$Bilirubin_Direct=$_POST['Bilirubin_Direct'];
$Bilirubin_Indirect=$_POST['Bilirubin_Indirect'];
$SGPT=$_POST['SGPT'];
$SGOT=$_POST['SGOT'];
$Phosphatase=$_POST['Phosphatase'];
$Cholesterol=$_POST['Cholesterol'];
$Triglyceride=$_POST['Triglyceride'];
$HDL=$_POST['HDL'];
$LDL=$_POST['LDL'];
$Blood_Glucose=$_POST['Blood_Glucose'];
$Urine_Glucose=$_POST['Urine_Glucose'];
$Urine_Acetone=$_POST['Urine_Acetone'];
$Amylase=$_POST['Amylase'];
$Phosphate=$_POST['Phosphate'];
$Fraction=$_POST['Fraction'];
$Lithium=$_POST['Lithium'];
$Cholinesterase=$_POST['Cholinesterase'];
$Lipase=$_POST['Lipase'];
$Magnesium=$_POST['Magnesium'];
$Bicarbonate=$_POST['Bicarbonate'];
$Acetone=$_POST['Acetone'];
$GGTP=$_POST['GGTP'];
$sql="DELETE FROM biochemistry WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO biochemistry VALUES('$P_ID','$Blood_Urea','$Nitrogen_BUN','$Creatinine','$Uric_Acid','$Calcium','$Ionised','$Na','$K','$Cl','$Phosphorus','$Total','$Albumin','$Globulin','$AG_Ratio','$Bilirubin_Total','$Bilirubin_Direct','$Bilirubin_Indirect','$SGPT','$SGOT','$Phosphatase','$Cholesterol','$Triglyceride','$HDL','$LDL','$Blood_Glucose','$Urine_Glucose','$Urine_Acetone','$Amylase','$Phosphate','$Fraction','$Lithium','$Cholinesterase','$Lipase','$Magnesium','$Bicarbonate','$Acetone','$GGTP')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>