<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$Consistency=$_POST['Consistency'];
$crystal=$_POST['crystal'];
$PUS=$_POST['PUS'];
$red=$_POST['red'];
$cells=$_POST['cells'];
$gram_stain=$_POST['gram_stain'];
$zn_stain=$_POST['zn_stain'];
$Pus_cells=$_POST['Pus_cells'];
$Cocci=$_POST['Cocci'];
$Bacilli=$_POST['Bacilli'];
$Epithelial=$_POST['Epithelial'];
$sql="INSERT INTO sputum VALUES('$P_ID','$Consistency','$crystal','$PUS','$red','$cells','$gram_stain','$zn_stain','$Pus_cells','$Cocci','$Bacilli','$Epithelial')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>