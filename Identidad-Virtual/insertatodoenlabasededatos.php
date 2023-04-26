<?php
$conn = mysqli_connect('localhost','root', '', 'identidad_virtual');

// Verifica si la conexión es exitosa
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}
        $nombre = $_POST['Nombre'];
        $id = $_POST['id'];
        $correo = $_POST['correo'] ?? null;
        $profesion = array_key_exists('profesion', $_POST) ? $_POST['profesion'] : null;
        $NumeroWhats = $_POST['NumeroWhats'] ?? null;
        $Instagram = isset($_POST['instagram']) ? $_POST['instagram'] : null;
        $github = isset($_POST['github']) ? $_POST['github'] : null;
        $Linkedin = isset($_POST['Linkedin']) ? $_POST['Linkedin'] : null;
        $twitter = isset($_POST['twitter']) ? $_POST['twitter'] : null;
        $Youtube = isset($_POST['Youtube']) ? $_POST['Youtube'] : null;
        $Discord = isset($_POST['DiscordLink']) ? $_POST['DiscordLink'] : null;
        $Facebook = isset($_POST['Facebook']) ? $_POST['Facebook'] : null;
        $sql = "INSERT INTO `identidad_virtual` (`id`, `id_usuario`, `nombre`, `profesion`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `whatsapp`, `github`, `discord`, `correo_contacto`) 
        VALUES ('', '$id', '$nombre', '$profesion', '$Facebook', '$twitter', '$Instagram', '$Youtube', '$Linkedin', '$NumeroWhats', '$github', '$Discord', '$correo')";
if (mysqli_query($conn, $sql)) {
    echo "Se ha insertado un nuevo registro en la tabla usuarios.";
} else {
    echo "Error al insertar el registro: " . mysqli_error($conn);
}

mysqli_close($conn);


?>
