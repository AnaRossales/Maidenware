<html>
<body>

<?php



//Informacion de la Empresa

$Nom_Empresa = $_POST['Nom_Empresa'];
$Con_Empresa = $_POST['Con_Empres'];
$Dir_Empresa = $_POST['Dir_Empresa'];
$Tel_Empresa = $_POST['Tel_Empres'];

//Informacion del representante

$Nom_Repres = $_POST['Nom_Repres'];
$Tel_Repres = $_POST['Tel_Repres'];

//Conexion

if (isset($_POST['Nom_Empresa']) && isset($_POST['Con_Empres'])) {

// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "nfcare2");

 // Verificar si hay errores de conexión
 if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if(isset($_POST['btnRegistro'])){

    //EncriptarContraseña

    $ConFuert_Empresa = hash('sha256', $Con_Empresa);
    $queryRegistroEmpresa = "INSERT INTO log_in_empresa (Nombre, Contraseña) VALUES ('$Nom_Empresa', '$ConFuert_Empresa')";

    if(mysqli_query($conn, $queryRegistroEmpresa )){

        
        echo "<script> alert ('Usuario' . $Nom_Empresa . 'registrado'); </script>";

    }else {

        echo "Error: " . $queryRegistroEmpresa . "<br>" .mysqli_error($conn);

    }
}


if(isset($_POST['btnRegistro'])){

    //EncriptarContraseña

    $queryEmpresaInfo = "INSERT INTO empresa (Nombre, Dir_Empresa, Tel_Empresa, Representante_Empresa, Tel_Representante) VALUES ('$Nom_Empresa', '$Dir_Empresa' , '$Tel_Empresa' , '$Nom_Repres' , '$Tel_Repres')";

    if(mysqli_query($conn, $queryEmpresaInfo )){

        
        echo "<script> alert ('Usuario' . $Nom_Empresa . 'registrado'); </script>";

    }else {

        echo "Error: " . $queryRegistroEmpresa . "<br>" .mysqli_error($conn);

    }
}


}

//Imprimir datos

echo "<h1> $Nom_Empresa </h1>";
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
echo "<br><br>";

?>
</body>
</html>