<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "identidad_virtual");
$oui = $_POST['oui'];
if ($oui != 1) {
    header('Location: http://maidenware.com.mx');
}
$nombreusuario = $_POST['nombreusuario'];
$contrasena = $_POST['contrasena'];

try {
    // Conexión a la base de datos
    $conn = mysqli_connect('localhost','maidenwa_user', 'Bluey050705', 'maidenwa_identidad_virtual');

    // Comprobación de errores en la conexión
    if (!$conn) {
        throw new Exception("No se pudo conectar a la base de datos, contacte al responsable de la página");
    }

    // Consulta a la base de datos para comprobar el usuario y contraseña
    $sql = "SELECT * FROM login WHERE nombre_de_usuario='$nombreusuario' OR correo='$nombreusuario'";
    $result_identidad_virtual = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result_identidad_virtual);

    // Comprobación de errores en la consulta
    if (!$row) {
        echo "Usuario y/o contraseña incorrectos";
    } else {
        // Verificación de la contraseña
        $password_hashed = $row['contrasena'];
        if (password_verify($contrasena, $password_hashed)) {
            // Usuario y contraseña correctos
            echo "Bienvenido, " . $nombreusuario . "!";
            $id = $row['id'];
            $nombreusuario = $row['nombre_de_usuario'];
            setcookie("ID_Usuario", $id, time() + 3000, "/");
            setcookie("nombreusuario", $nombreusuario, time() + 3000, "/");
            header('Location: CRUD-IdentidadVirtual.php');
        } else {
            // Usuario y/o contraseña incorrectos
            echo "Usuario y/o contraseña incorrectos";
        }
    }

    // Cierre de la conexión a la base de datos
    $conn->close();

} catch (Exception $e) {
    // Captura de excepciones
    echo "Error: " . $e->getMessage();
}
?>
