<?php
$nombre = $_POST['nombre'];
$conn = mysqli_connect('localhost','root', '', 'identidad_virtual');

// Verifica si la conexión es exitosa
$sql = "SELECT * FROM identidad_virtual WHERE nombre='".$nombre."';";
$result_identidad_virtual = mysqli_query($conn, $sql);
if (mysqli_num_rows($result_identidad_virtual) > 0) {
    while($row = mysqli_fetch_assoc($result_identidad_virtual)) {
        echo 'Nombre'.$row["nombre"];
        echo 'Correo'.$row['correo_contacto'];
        echo 'Profesion'.$row['profesion'];
        echo 'Whatsapp'.$row['whatsapp'];
        echo 'Instagram'.$row['instagram'];
        echo 'Github'.$row['github'];
        echo 'Linkedin'.$row['linkedin'];
        echo 'Twitter'.$row['twitter'];
        echo 'Yutu'.$row['youtube'];
        echo 'Discord'.$row['discord'];
        echo 'Facebook'.$row['facebook'];
        echo '';
    }
}else{
    header('Location: index.html');
}
?>