<?php
$conn = mysqli_connect('localhost','maidenwa_user', 'Bluey050705', 'maidenwa_identidad_virtual');

// Verifica si la conexión es exitosa
$nameitself = basename($_SERVER["PHP_SELF"], ".php");
$sql = "SELECT id FROM login WHERE nombre_de_usuario ='".$nameitself."';";
$result_identidad_virtual = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result_identidad_virtual);
$sql2 = "SELECT * FROM identidad_virtual WHERE id_usuario =".$row['id'].";";
$result_identidad_virtual1 = mysqli_query($conn, $sql2);

// Imprime los resultados de la consulta en la tabla identidad_virtual
if (mysqli_num_rows($result_identidad_virtual1) > 0) {
    while($rows = mysqli_fetch_assoc($result_identidad_virtual1)) {
        $nombre =$rows["nombre"];
        $correo = $rows['correo_contacto'];
        $profesion = $rows['profesion'];
        $NumeroWhats = $rows['whatsapp'];
        $Instagram = $rows['instagram'];
        $github = $rows['github'];
        $Linkedin= $rows['linkedin'];
        $twitter = $rows['twitter'];
        $Youtube=$rows['youtube'];
        $Discord=$rows['discord'];
        $Facebook=$rows['facebook'];
    }
}else{
    header('Location: index.html');
}


// Cierra la conexión
mysqli_close($conn);
?>