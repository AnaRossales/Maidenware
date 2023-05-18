<html>
<body>

<?php

session_start();

if (isset($_POST['ID_Empresa']) && isset($_POST['Con_Empres'])) {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "nfcare");

    // Verificar si hay errores de conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    //Variables de usuario

    $ID_Empresa = $_POST['ID_Empresa'];
    $Nom_Empresa = $_POST['Nom_Empresa'];
    $Con_Empresa = $_POST['Con_Empres'];

    $sql = "SELECT * FROM log_in_empresa WHERE ID_Empresa='$ID_Empresa' AND Contraseña='$Con_Empresa'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $_SESSION['ID_Empresa'] = $ID_Empresa;
        header('Location: Entrada.html');
        
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }
}

?>

</body>
</html>