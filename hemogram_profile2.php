<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$haemoglobin=$_POST['haemoglobin'];
$total_rbc=$_POST['total_rbc'];
$pcv=$_POST['pcv'];
$mcv=$_POST['mcv'];
$mch=$_POST['mch'];
$mchc=$_POST['mchc'];
$total_wbc=$_POST['total_wbc'];
$platelet_count=$_POST['platelet_count'];
$absolute_eosinophil=$_POST['absolute_eosinophil'];
$band=$_POST['ja_band'];
$neutrophils=$_POST['ja_neutrophils'];
$lymphocytes=$_POST['ja_lymphocytes'];
$eosinophils=$_POST['ja_eosinophils'];
$monocytes=$_POST['ja_monocytes'];
$basophils=$_POST['ja_basophils'];
$normocytes=$_POST['normocytes'];
$normochromasia=$_POST['normochromasia'];
$platelet=$_POST['platelet'];
$parasites=$_POST['parasites'];
$esr=$_POST['esr'];
$bleeding=$_POST['bleeding'];
$clotting=$_POST['clotting'];
$b_group=$_POST['b_group'];
$rh_factor=$_POST['rh_factor'];
//if(($band+$neutrophils+$lymphocytes+$eosinophils+$monocytes+$basophils)!=100)
//{
//	echo "<script> alert('successfully saved!!'); </script>";
//	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=s_widal.php">'; 
//}
//else
//{
	$sql="INSERT INTO hemogram_profile VALUES('$P_ID','$haemoglobin','$total_rbc','$pcv','$mcv','$mch','$mchc','$total_wbc','$platelet_count','$absolute_eosinophil','$band','$neutrophils','$lymphocytes','$eosinophils','$monocytes','$basophils','$normocytes','$normochromasia','$platelet','$parasites','$esr','$bleeding','$clotting','$b_group','$rh_factor')";
	$result=mysql_query($sql) or die('mysql error');

	echo "<script> alert('successfully saved!!'); </script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 
//}
?>