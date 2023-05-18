<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="card">
        <div class="photo"></div>
        <div class="banner"></div>
        <ul class="info">
<?php
include 'traemelasvariables.php';
echo'<li><b>'.$NombrePer.$ApellidoPer.'</b></li><li>Operario</li><br>';
echo'<li><b>Fecha de Nacimiento <br></b></li><li>'.$fecha_formateada.'</li><br>';
echo'<li><b>Tipo de Sangre<br></b></li><li>'.$TipoSanguineo.'</li><br>';
echo '</ul>';
echo "<h4>&nbsp; &nbsp;Padecimientos:</h4>";
echo '<ul class="padecimientos">';
if (!empty($historial_medico)) {
    foreach ($historial_medico as $item) {
        echo '<li>&nbsp;&nbsp;' . htmlspecialchars($item) . '</li>';
    }
} else {
    echo '<p>N/A</p>';
}
echo '</ul>';
echo "<h4>&nbsp; &nbsp;Inmunización:</h4>";
echo '<ul class="padecimientos">';
foreach ($imun_vars as $imun) {
    if ($imun !== null) {
        echo "<li>&nbsp;&nbsp;$imun</li>";
    }
}
echo '</ul>';
echo "<h4>&nbsp; &nbsp;Antecendentes Prenatales:</h4>";
echo "<p>".$Ant_PreN."</p>";
echo "<h4>&nbsp; &nbsp;Antecendentes Natales:</h4>";
echo "<p>".$Ant_Nat."</p>";
?>
<button class="contact" id="main-button" onclick="window.location.href='tel:911'">Llamar a 911</button>
<div class="social-media-banner">
    <ul>
        
    </ul>
    
    <br>
    <br>
</div>
</div>
</body>

</html>