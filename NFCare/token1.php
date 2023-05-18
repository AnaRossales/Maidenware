<?php
function generarContraseña($longitud, $cantidadID, $idOculto) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $contraseña = '';
    $desfragmento = ceil($longitud / $cantidadID); // Longitud de cada desfragmento
    $contadorID = 0;

    for ($i = 0; $i < $longitud; $i++) {
        // Insertar el ID oculto en los fragmentos correspondientes
        if ($i % $desfragmento == 0 && $contadorID < $cantidadID) {
            $contraseña .= $idOculto[$contadorID];
            $contadorID++;
        } else {
            $contraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    }

    return $contraseña;
}
$longitudContraseña = 100; // Longitud total de la contraseña generada
$cantidadID = 7; // Cantidad de fragmentos que contienen el ID oculto
$idOculto = '2064558'; // ID oculto a insertar en la contraseña generada

$contraseñaGenerada = generarContraseña($longitudContraseña, $cantidadID, $idOculto);
setcookie('_User', $contraseñaGenerada, time() + (86400 * 30), '/'); // Guardar la contraseña en una cookie válida por 30 días

header('Location: usuario2.php');
exit();
?>