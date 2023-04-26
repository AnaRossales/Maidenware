<?php
$conn = mysqli_connect('localhost','root', '', 'identidad_virtual');

// Verifica si la conexión es exitosa
$sql = "SELECT * FROM identidad_virtual WHERE nombre='".$nameitself."';";
$result_identidad_virtual = mysqli_query($conn, $sql);

// Imprime los resultados de la consulta en la tabla identidad_virtual
if (mysqli_num_rows($result_identidad_virtual) > 0) {
    while($row = mysqli_fetch_assoc($result_identidad_virtual)) {
        $nombre =$row["nombre"];
        $correo = $row['correo_contacto'];
        $profesion = $row['profesion'];
        $NumeroWhats = $row['whatsapp'];
        $Instagram = $row['instagram'];
        $github = $row['github'];
        $Linkedin= $row['linkedin'];
        $twitter = $row['twitter'];
        $Youtube=$row['youtube'];
        $Discord=$row['discord'];
        $Facebook=$row['facebook'];
    }
}else{
    header('Location: index.html');
}


// Cierra la conexión
mysqli_close($conn);
?>