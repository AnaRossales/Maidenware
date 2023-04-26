<?php
$nombre_archivo = $_POST['Nombre'];
$plantilla1= "include 'plantilla1.php';";
$plantilla2= "include 'plantilla2.php';";
$cierre = 'echo "</body></html>";';
$echo = "echo '";
$cierreecho="';";
if (file_exists($nombre_archivo. '.php')) {
    echo "El archivo ya existe";
} else {
    $plantillaselecionada =$_POST['plantillaseleccionada'];
	$contenido = '<?php
    /*aqui traer de la base de datos*/
    $nameitself = basename($_SERVER["PHP_SELF"], ".php");
    include "incluyemelasvariablesconDBMS.php";';
    require_once 'insertatodoenlabasededatos.php';
    if($plantillaselecionada==1){
        $contenido= $contenido .$echo.'
        <!DOCTYPE HTML>
	<html>
        <head>
        <title>Aqui nombre de usuario</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assetsplantilla1/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assetsplantilla1/assets/css/noscript.css" /></noscript>
        </head><body class="is-preload">'.$cierreecho;
        $contenido = $contenido . $plantilla1.$cierre ;

    }
    if($plantillaselecionada==2){
        $contenido = $contenido . $plantilla2;
    }
    $contenido = $contenido . " mysqli_close();
	?>";
	file_put_contents($nombre_archivo . '.php', $contenido);
    echo '<br>'.$id.'<br>'.$nombre.'<br>'.$correo.'<br>'.$profesion.'<br>'.$NumeroWhats.'<br>'.$Instagram.'<br>'.$github.'<br>'.$Linkedin.'<br>'.$twitter.'<br>'.$Youtube.'<br>'.$Discord.'<br>'.$Facebook;
	echo "El archivo " . $nombre_archivo . ".php ha sido creado correctamente.";
}
?>