<?php
$contraseña = $_COOKIE['_User'];
$cantidadID = 7;
$idOculto = '';
$contadorID = 0;
$desfragmento = ceil(strlen($contraseña) / $cantidadID); // Longitud de cada desfragmento
for ($i = 0; $i < strlen($contraseña); $i++) {
    // Extraer los caracteres correspondientes al ID oculto
    if ($i % $desfragmento == 0 && $contadorID < $cantidadID) {
        $idOculto .= $contraseña[$i];
        $contadorID++;
    }
}

$cookieEncontrada = false;

// Realiza la validación comparando
if ('2069691' === $idOculto) {
    // La cookie coincide con el valor esperado
    // Realiza las acciones necesarias
    $cookieEncontrada = true;
}

// Si no se encontró ninguna cookie válida, redirige a otra página
if (!$cookieEncontrada) {
    header('Location: https://www.youtube.com/watch?v=GQHIzuqD3-4');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Usuario/NFCare_Formularios/style.css" />
</head>

<body>
    <div class="card">
        <div class="photo6"></div>
        <div class="banner2"></div>
        <ul class="info">
            <li><b>Lizbeth Hernandez</b></li>
            <li>Diseñadora</li>
        </ul>
        <h4>&nbsp; &nbsp; Grupo Sanguineo: O+</h4>
        <h4>&nbsp; &nbsp; Factor RH: Positivo</h4>
        <h4>&nbsp; &nbsp; Padecimientos:</h4>
        <ul class="Padecimientos">
            <li>Estres</li>
        </ul>
        <h4>&nbsp; &nbsp; Inmunización:</h4>
        <ul class="Padecimientos">
            <li>Ninguno</li>           
        </ul>
        <h4>&nbsp; &nbsp; Alergias:</h4>
        <ul class="Padecimientos">
            <li>Polvo</li>
        </ul>
        <h4>&nbsp; &nbsp;Antecedentes Prenatales:</h4>
        <p> Ninguno </p>
        <h4>&nbsp; &nbsp;Antecedentes Natales:</h4>
        <p> Ninguno </p>
        <h4>&nbsp; &nbsp;Seguro Médico</h4>
        <p>IMSS Hospital de Zona 25</p>
        <br>
        <button class="contact" id="main-button" onclick="window.location.href='tel:911'">Llamar a 911</button>

        <div class="social-media-banner">
            <ul>
                
            </ul>
            
            <br>
            <br>
        </div>
    </div>
</body>

</html>