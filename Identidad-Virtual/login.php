<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "identidad_virtual");

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
