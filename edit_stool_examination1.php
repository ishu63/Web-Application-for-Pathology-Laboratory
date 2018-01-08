<?php
include('connect.php');

$P_ID = $_GET['P_ID'];

$color=$_POST['color'];
$consistency=$_POST['consistency'];
$blood=$_POST['blood'];
$mucus=$_POST['mucus'];
$pus=$_POST['pus'];
$parasites=$_POST['parasites'];
$blood_benzidine=$_POST['blood_benzidine'];
$reducinng_sugar=$_POST['reducinng_sugar'];
$reaction=$_POST['reaction'];
$ova=$_POST['ova'];
$crysts=$_POST['crysts'];
$Trophozoites=$_POST['Trophozoites'];
$Ova1=$_POST['Ova1'];
$Cysts=$_POST['Cysts'];
$hpf=$_POST['hpf'];
$RBC=$_POST['RBC'];
$Macrophage=$_POST['Macrophage'];
$Epithelial=$_POST['Epithelial'];
$vegetable_cells=$_POST['vegetable_cells'];
$Starch=$_POST['Starch'];
$Bacteria=$_POST['Bacteria'];
$Neutral_Fat=$_POST['Neutral_Fat'];
$Fatty_Acid_Crystal=$_POST['Fatty_Acid_Crystal'];
$Fat_Globules=$_POST['Fat_Globules'];
$Preparation=$_POST['Preparation'];
$Food_Particles=$_POST['Food_Particles'];
$sql="DELETE FROM stool_examination1 WHERE P_ID='$P_ID'";
$result=mysql_query($sql) or die('mysql error');
$sql="INSERT INTO stool_examination1 VALUES('$P_ID','$color','$consistency','$blood','$mucus','$pus','$parasites','$blood_benzidine','$reducinng_sugar','$reaction','$ova','$crysts','$Trophozoites','$Ova1','$Cysts','$hpf','$RBC','$Macrophage','$Epithelial','$vegetable_cells','$Starch','$Bacteria','$Neutral_Fat','$Fatty_Acid_Crystal','$Fat_Globules','$Preparation','$Food_Particles')";
$result=mysql_query($sql) or die('mysql error');

echo "<script> alert('successfully editted!!'); </script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">'; 

?>