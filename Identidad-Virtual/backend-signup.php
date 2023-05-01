<?php
$oui = $_POST['oui'];
if ($oui != 1) {
    header('Location: http://maidenware.com.mx');
}

$nombreusuario = $_POST['nombreusuario'];
$correo = $_POST['Correo'];
$contrasena = $_POST['contrasena'];
try {
    $conn = mysqli_connect('localhost', 'root', '', 'identidad_virtual');
    if (!$conn) {
        throw new Exception("No se pudo conectar a la base de datos, contacte al responsable de la página");
    }
    
    // Verificar si el nombre de usuario ya existe
    $sqlusuario = "SELECT * FROM login WHERE nombre_de_usuario='".$nombreusuario."';";
    $result_dosUsuarios = mysqli_query($conn, $sqlusuario);
    if (mysqli_num_rows($result_dosUsuarios) > 0) {
        throw new Exception("El nombre de usuario ya existe. Intente con otro.");
    }
    
    // Verificar si el correo ya está en uso
    $sqlcorreo = "SELECT * FROM login WHERE correo='".$correo."';";
    $result_doscorreos = mysqli_query($conn, $sqlcorreo);
    if (mysqli_num_rows($result_doscorreos) > 0) {
        throw new Exception("El correo ya está en uso. Intente con otro.");
    }
    
    // Encriptar la contraseña
    $password_hashed = password_hash($contrasena, PASSWORD_BCRYPT);
    
    // Insertar el registro en la base de datos
    $sql = "INSERT INTO login (nombre_de_usuario, correo, contrasena) VALUES ('".$nombreusuario."', '".$correo."', '".$password_hashed."');";
    if (!mysqli_query($conn, $sql)) {
        throw new Exception("Error al registrar el usuario, contacte al responsable de la página");
    }
    echo "<script>alert('Registro exitoso, felicidades ya eres parte de la familia Maidenware, ahora toca personalizar tu identidad virtual');</script>";
    

// Consulta para obtener el Select ID de la tabla 'mi_tabla'
$sqlcreacioncookie = "SELECT id FROM login WHERE nombre_de_usuario='$nombreusuario'";
$resultado = $conn->query($sqlcreacioncookie);

// Verificamos si se encontró el Select ID
if ($resultado->num_rows > 0) {
    // Obtenemos el valor del Select ID
    $row = $resultado->fetch_assoc();
    $id = $row['id'];
} else {
    echo "No se encontró el Select ID";
}

// Creamos la cookie con el valor del Select ID y un tiempo de vida de 5 minutos
setcookie("ID_Usuario", $id, time() + 3000, "/");
setcookie("nombreusuario", $nombreusuario, time() + 3000, "/");


// Cerramos la conexión a la base de datos
$conn->close();



    header('Location:verificacion-creacion-cookie.php');
} catch (Exception $e) {
    echo "<script>alert('".$e->getMessage()."');</script>";
    echo "<script>history.go(-1);</script>";
    exit;
}

mysqli_close($conn);
?>
