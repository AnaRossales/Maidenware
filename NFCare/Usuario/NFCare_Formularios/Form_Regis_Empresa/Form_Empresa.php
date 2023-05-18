<html>
<body>

<?php

//Informacion de la Empresa

$ID_Empresa = $_POST['ID_Empresa'];
$Nom_Empresa = $_POST['Nom_Empresa'];
$Dir_Empresa = $_POST['Dir_Empresa'];
$Tel_Empresa = $_POST['Tel_Empres'];

//Informacion del representante

$Nom_Repres = $_POST['Nom_Repres'];
$Tel_Repres = $_POST['Tel_Repres'];

//Imprimir datos

echo "<h1> $Nom_Empresa </h1>";
echo "<br><br>";

echo "ID de la Empresa:" . "  " . $ID_Empresa;
echo "<br><br>";

echo "Direccion de Empresa:" . "  " . $Dir_Empresa;
echo "<br><br>";

echo "telefono de la empresa:" . "  " . $Tel_Empresa;
echo "<br><br>";

echo "<h1>informacion del representante</h1>";
echo "<br><br>";

echo "Nombre del representante:" . "  " . $Nom_Repres;
echo "<br><br>";

echo "Telefono del representante:" . "  " . $Tel_Repres;

?>
</body>
</html>