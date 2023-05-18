
<html>
<body>

<?php

$conexion = mysqli_connect("localhost","root","", "nfcare");

//Informacion Personal

$NombrePer = $_POST['Nombre'];
$ApellidoPer = $_POST['Apellido'];
$Tel_Persona = $_POST['Tel_Persona'];
$fecha = $_POST['Fecha_Nac'];
$fecha_formateada = date("d-m-Y", strtotime($fecha));
$ID_Empresa = $_POST['ID_Empresa'];


//Informacion del contacto

$Nombre_Contacto = $_POST['Nombre_Cont_Emergencia'];
$Tel_Contacto = $_POST['Tel_Contacto'];

//Tipo Sanguineo

$TipoSanguineo = $_POST['Tipo_Sangre'];



//Imprimir datos

echo "<h1>$NombrePer" . " " .  "$ApellidoPer</h1>";
echo $NombrePer . " " . $ApellidoPer . "<br><br>" . "ID de Empresa:" . " " . $ID_Empresa . "<br>" ;
echo "<br><br>";

echo "Fecha de nacimiento:" . " " . $fecha_formateada;
echo "<br><br>";

echo "Telefono de la persona:" . " " . $Tel_Persona;
echo "<br><br>";

echo "Tipo Sangre: " . $TipoSanguineo;
echo "<br><br>";

echo "<h1> Contacto de emergencia </h1>";

echo "Nombre del Contacto:" . " " . $Nombre_Contacto;
echo "<br><br>";

echo "Telefono de la persona:" . " " . $Tel_Contacto;
echo "<br><br>";



?>

</body>
</html>