<?php
if (isset($_POST['subscribe'])) {
    // Obtener el correo electrónico ingresado en el formulario
    $correo = $_POST['correo'];

    // Validar y procesar el correo electrónico
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        // Configurar el correo electrónico
        $destinatario = "alexis.chavez@hotmail.com";
        $asunto = "Nuevo suscriptor para el boletín";
        $mensaje = "Se ha suscrito un nuevo correo electrónico al boletín: " . $correo;
        $encabezados = "From: alexis.chavez@hotmail.com" . "\r\n" .
            "Reply-To: alexis.chavez@hotmail.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Enviar el correo electrónico
        if (mail($destinatario, $asunto, $mensaje, $encabezados)) {
            echo "¡Gracias por suscribirte!";
        } else {
            echo "Ha ocurrido un error al enviar el correo.";
        }
    } else {
        echo "El correo electrónico ingresado no es válido.";
    }
}
?>
