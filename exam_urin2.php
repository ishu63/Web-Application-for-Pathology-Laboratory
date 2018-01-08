<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$sample=$_POST['sample'];
$Quantity=$_POST['Quantity'];
$Colour=$_POST['Colour'];
$Transperancy=$_POST['Transperancy'];
$Gravity=$_POST['Gravity'];
$reaction=$_POST['reaction'];
$Albumin=$_POST['Albumin'];
$Sugar=$_POST['Sugar'];
$Acetone=$_POST['Acetone'];
$Salts=$_POST['Salts'];
$Pigments=$_POST['Pigments'];
$Pus=$_POST['Pus'];
$rbc=$_POST['rbc'];
$Epithelial=$_POST['Epithelial'];
$Crystals=$_POST['Crystals'];
$Amorphous=$_POST['Amorphous'];
$Cast=$_POST['Cast'];
$Bacteria=$_POST['Bacteria'];
$Mucus=$_POST['Mucus'];
$Yeast=$_POST['Yeast'];
$Trichomonas=$_POST['Trichomonas'];
$Spermatozoa=$_POST['Spermatozoa'];
$Fungus=$_POST['Fungus'];
$sql="INSERT INTO exam_urin VALUES('$P_ID','$sample','$Quantity','$Colour','$Transperancy','$Gravity','$reaction','$Albumin','$Sugar','$Acetone','$Salts','$Pigments','$Pus','$rbc','$Epithelial','$Crystals','$Amorphous','$Cast','$Bacteria','$Mucus','$Yeast','$Trichomonas','$Spermatozoa','$Fungus')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully saved!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>