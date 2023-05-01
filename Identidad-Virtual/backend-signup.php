<?php
$oui=$_POST['oui'];
if($oui!=1){
    header('Location: http://maidenware.com.mx');
}
$username=$_POST['nombre_usuario'];
$correo=$_POST['Correo'];
$contrasena=$_POST['contrasena'];

?>