<?php

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "identidad_virtual");

$oui = $_POST['oui'];
if ($oui != 1) {
    header('Location: http://maidenware.com.mx');
}
$nombreusuario = $_POST['nombreusuario'];
$correo = $_POST['nombreusuario'];
$contrasena = $_POST['contrasena'];
//$password_hashed = password_hash($contrasena, PASSWORD_BCRYPT);
    try {
        // Conexión a la base de datos
        $conn = mysqli_connect('localhost', 'root', '', 'identidad_virtual');
        // Comprobación de errores en la conexión
        if (!$conn) {
            throw new Exception("No se pudo conectar a la base de datos, contacte al responsable de la página");
        }

        // Consulta a la base de datos para comprobar el usuario y contraseña
        $sql2 = "SELECT * FROM login WHERE nombre_de_usuario='$nombreusuario' AND contrasena='$contrasena'";
        $sql1 = "SELECT * FROM login WHERE correo='$correo' AND contrasena='$contrasena'";
        $result = $conn->query($sql1);
        $result1 = $conn ->query($sql2);
        // Comprobación de errores en la consulta
        if ($result->num_rows == 1) {
            // Usuario y contraseña correctos
            echo "Bienvenido, " . $nombreusuario . "!";
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $nombreusuario = $row['nombre_de_usuario'];
            setcookie("ID_Usuario", $id, time() + 3000, "/");
            setcookie("nombreusuario", $nombreusuario, time() + 3000, "/");
            header('Location: CRUD-IdentidadVirtual.php');

        } else if($result1 -> num_rows==1){
            // Usuario y/o contraseña incorrectos
            echo "Bienvenido, " . $nombreusuario . "!";
            $row = $result1->fetch_assoc();
            $id = $row['id'];
            $nombreusuario = $row['nombre_de_usuario'];
            setcookie("ID_Usuario", $id, time() + 3000, "/");
            setcookie("nombreusuario", $nombreusuario, time() + 3000, "/");
            header('Location: CRUD-IdentidadVirtual.php');
        }else{
            echo "Usuario y/o contraseña incorrectos";
        }
        // Cierre de la conexión a la base de datos
        $conn->close();

    } catch (Exception $e) {
        // Captura de excepciones
        echo "Error: " . $e->getMessage();
    }


// Obtener los datos del formulario
$nombre_usuario = $_POST['Name'];
$correo=$_POST['correo'];
$contrasena = $_POST['contrasena'];

// Buscar el usuario en la base de datos
$query = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario'";
$resultado = mysqli_query($conexion, $query);
$usuario = mysqli_fetch_assoc($resultado);

// Verificar la contraseña
if (password_verify($contrasena, $usuario['contrasena'])) {
  // Iniciar sesión
  session_start();
  $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];

  // Redirigir al usuario a la página protegida
  header('Location: pagina_protegida.php');
} else {
  // Si las credenciales son incorrectas, mostrar un mensaje de error
  echo "Credenciales incorrectas";
}
?>
