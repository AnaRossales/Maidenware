<?php
echo '<form id="guardar" method="post" action="creararchivoconbasededatos.php" >';
echo "<input type='hidden' name='plantillaseleccionada' value='".$plantillaselecionada."'>";
$nombre = $_POST['Nombre'];
echo "<input type='hidden' name='Nombre' value='".$nombre."'>";
$id = $_POST['id'];
echo "<input type='hidden' name='id' value='".$id."'>";
$correo = $_POST['Correo'];
echo "<input type='hidden' name='correo' value='".$correo."'>";
$profesion = $_POST['Profesion'];
echo "<input type='hidden' name='profesion' value='".$profesion."'>";
$NumeroWhats= $_POST['NmWhatsapp'];
if($NumeroWhats !=""){
echo "<input type='hidden' name='NumeroWhats' value='".$NumeroWhats."'>";
}
$Instagram = $_POST['Instagram'];
if($Instagram !=""){
echo "<input type='hidden' name='instagram' value='".$Instagram."'>";
}
$github = $_POST['GitHub'];
if($github!=""){
echo "<input type='hidden' name='github' value='".$github."'>";
}
$Linkedin= $_POST['Linkedin'];

if($Linkedin!=""){
echo "<input type='hidden' name='Linkedin' value='".$Linkedin."'>";
}

$twitter = $_POST['Twitter'];

if($twitter!=""){
echo "<input type='hidden' name='twitter' value='".$twitter."'>";
}

$Youtube=$_POST['Youtube'];

if($Youtube!=""){
    $Youtube = "@".$Youtube;
echo "<input type='hidden' name='Youtube' value='".$Youtube."'>";
}

$Discord=$_POST['DiscordLink'];

if($Discord!=""){
echo "<input type='hidden' name='DiscordLink' value='".$Discord."'>";
}

$Facebook=$_POST['Facebook'];

if($Facebook!=""){
echo "<input type='hidden' name='Facebook' value='".$Facebook."'>";
}
?>