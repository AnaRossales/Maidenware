
<?php


if (isset($_POST['Nom_Empresa']) && isset($_POST['Con_Empres'])) {
    // Conexión a la base de datos
    $conn =  mysqli_connect("localhost", "root", "", "nfcare2");

    // Verificar si hay errores de conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
}
    //Variables de usuario

    $Nom_Empresa = $_POST['Nom_Empresa'];
    $Con_Empresa = $_POST['Con_Empres'];

    $Con1 = hash('sha256', $Con_Empresa);

    $Resultado = mysqli_query($conn, "SELECT Contraseña FROM log_in_empresa WHERE Nombre='$Nom_Empresa'");
    $row = mysqli_fetch_array($Resultado);

    echo $row['Contraseña'];

    $Con2 = $row['Contraseña'];
    

    if($Con1 == $Con2){

        header('Location: index.html');

    }


    mysqli_close($conn);
?>

