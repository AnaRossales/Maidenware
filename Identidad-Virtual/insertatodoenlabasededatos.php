<?php
$conn = mysqli_connect('localhost','root', '', 'identidad_virtual');

// Verifica si la conexión es exitosa
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

$nombre = $_POST['Nombre'];
$id = $_POST['id'];
$correo = isset($_POST['Correo']) ? $_POST['Correo'] : null;
$profesion = isset($_POST['Profesion']) ? $_POST['Profesion'] : null;
$NumeroWhats = isset($_POST['NmWhatsapp']) ? $_POST['NmWhatsapp'] : null;
$Instagram = isset($_POST['Instagram']) ? $_POST['Instagram'] : null;
$github = isset($_POST['GitHub']) ? $_POST['GitHub'] : null;
$Linkedin = isset($_POST['Linkedin']) ? $_POST['Linkedin'] : null;
$twitter = isset($_POST['Twitter']) ? $_POST['Twitter'] : null;
$Youtube = isset($_POST['Youtube']) ? $_POST['Youtube'] : null;
$Discord = isset($_POST['DiscordLink']) ? $_POST['DiscordLink'] : null;
$Facebook = isset($_POST['Facebook']) ? $_POST['Facebook'] : null;

$sql = "INSERT INTO `identidad_virtual` (`id_usuario`, `nombre`, `profesion`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `whatsapp`, `github`, `discord`, `correo_contacto`) 
        VALUES ('','$id', '$nombre', '$profesion', '$Facebook', '$twitter', '$Instagram', '$Youtube', '$Linkedin', '$NumeroWhats', '$github', '$Discord', '$correo')";
if (mysqli_query($conn, $sql)) {
    echo "Se ha insertado un nuevo registro en la tabla usuarios.";
} else {
    echo "Error al insertar el registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
