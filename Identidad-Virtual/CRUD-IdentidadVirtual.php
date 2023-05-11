<?php
    if(!isset($_COOKIE['ID_Usuario']) || $_COOKIE['ID_Usuario'] === null) {
        header('Location: https://www.maidenware.com.mx');
        exit();
     }
     ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es-ES" class="supernova">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <title>Formulario de Identidad Virtual</title>
    <link href="css/Estiloformulario1.css" rel="stylesheet" type="text/css" />
    <link href="css/EstiloFormulario2.css" rel="stylesheet" type="text/css"  />
    <link href="css/Estilos.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <script>
        //Esta funcion sirve para comprobar que lo que el usuario inserto en los espacios de Facebook y Discord realmente sean links 
        function validarLink(input) {
          // Expresión regular para validar enlaces
          const regex = /^(ftp|http|https):\/\/[^ "]+$/;
          // Validar si el valor del input coincide con la expresión regular
          if (!regex.test(input.value)) {
            alert("El enlace ingresado no es válido");
            input.value = "";
          }
        }
//Aqui lo que hace, es que valida todo el formulario y le mete tantito rollo para que el usuario no pueda hacer inyecciones de sql o cosas por el estilo o el mismo HTML
       
function validarEspacios(event) {
  event.preventDefault(); // Detener el envío del formulario por defecto

  // Expresiones regulares para buscar espacios al inicio y caracteres no permitidos
  const regexInicio = /^\s+/;
  const regexInvalidos = /[<>''"]/;
  const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Obtener todos los inputs dentro del formulario
  const inputs = document.getElementsByTagName("input");

  // Recorrer los inputs y validar si tienen espacios al inicio o caracteres no permitidos
  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];
    if (regexInvalidos.test(input.value)) {
      // Mostrar mensaje de error si el valor contiene caracteres no permitidos
      alert(`El valor ingresado en el campo ${input.name} no es válido`);
      return;
    }
    if (input.type === "email" && !regexEmail.test(input.value)) {
      // Mostrar mensaje de error si el valor del campo de correo electrónico no es válido
      alert(`El correo electrónico ingresado en el campo ${input.name} no es válido`);
      return;
    }
    if (input.type === "number" && isNaN(input.value)) {
      // Mostrar mensaje de error si el valor del campo numérico no es un número
      alert(`El valor ingresado en el campo ${input.name} no es un número válido`);
      return;
    }
  }
  // Enviar el formulario
  event.target.submit();

}        
</script>    
    <form class="jotform-form" action="queplantillaseleccione.php" method="post" onsubmit="validarEspacios(event)">
        <div role="main" class="form-all">
            <div style="text-align: center;">
                <!--Aqui nuestro logo y el header-->
                <img src="https://maidenware1.s3.us-east-2.amazonaws.com/Logo_fondo_blanco.png" alt="Logo_fondo_blanco" width="60%">
            </div>

            <!--Aqui la sección-->
            <ul class="form-section page-section">
                <li id="cid_89" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httal htvam">
                            <h1 id="header_89" class="form-header" data-component="header" style="text-align: center;">Identidad Virtual</h1>
                            <br><br>
                            <p>Completa este formulario con tus datos personales y enlaces a tus redes sociales para crear tu <b>Identidad Virtual</b>. Asegúrate de llenar cuidadosamente todos los campos para que otros puedan encontrarte en línea</p>
                        </div>
                    </div>
                </li>

                <!--Aqui la descripción de la sección de arriba-->
                <li id="cid_101" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-small">
                        <div class="header-text httal htvam">
                            <h2 id="header_101" class="form-header" data-component="header">Información Personal</h2>
                        </div>
                        <p>La siguiente información es la más importante y aparecerá en su tarjeta de presentación, por lo que es fundamental que la verifique y la llene cuidadosamente.</p>
                    </div>
                </li>
                <!--Datos Personales-->
                <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="Nombre">
                    <div id="cid_3" class="form-input-wide">
                        <div data-wrapper-react="true">
                            <?php
try {
    $conn = mysqli_connect('localhost','maidenwa_user', 'Bluey050705', 'maidenwa_identidad_virtual');
    if (!$conn) {
        throw new Exception("No se pudo conectar a la base de datos, contacte al responsable de la página");
    }
    $sqlusuario = "SELECT * FROM identidad_virtual WHERE id_usuario='".$_COOKIE["ID_Usuario"]."';";

    $result_UPDATE = mysqli_query($conn, $sqlusuario);
    if (mysqli_num_rows($result_UPDATE) > 0) {
        $result_identidad_virtual = mysqli_query($conn, $sqlusuario);

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
        echo'<label id="Nombre" for="Nombre"> Nombre <b style="color: red;">*</b></label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre, el cual aparecera dentro de su tarjeta de presentación</p>
        <br>
        <input type="text" id="Nombre" name="Nombre" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre" value="'.$nombre.'"  required/>
        </span>';
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input correo-->
        <label id="Correo" for="Correo"> Correo Electrónico <b style="color: red;">*</b> </label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su correo, con el cual las personas que lo vean se podran contactarse con usted</p>
        <br>
        <input type="email" id="Correo" name="Correo" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su correo" value="'.$correo.'"/>
        </span>';
        echo '<label id="Profesion" for="Profesion"> Profesión <b style="color: red;">*</b> </label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su profesión, la cual se verá reflejada en su tarjeta de presentación</p><br>
        <input type="text" id="Profesion" name="Profesion" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su profesion" value="'.$profesion.'" />
        </span>
        </div>
        <li id="cid_101" class="form-input-wide" data-type="control_head">
                            <div class="form-header-group  header-small">
                                <div class="header-text httal htvam">
                                    <h2 id="header_101" class="form-header" data-component="header">Redes Sociales</h2>
                                </div>
                                <p>Asegúrese de llenar solo los enlaces que desees compartir para que otros puedan contactarle. También verifique que la información esté correcta antes de enviar el formulario.</p>
                            </div>
                        </li>
                        <!--Redes Sociales-->
                        <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="Nombre">
                            <div id="cid_3" class="form-input-wide">
                                <div data-wrapper-react="true">';
    if($NumeroWhats!=""){
        echo' <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Whatsapp-->
        <label id="NmWhatsapp" for="NmWhatsapp">Número de Whatsapp</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su numero de contacto vía Whatsapp</p>
        <br>
        <input type="number" id="NmWhatsapp" name="NmWhatsapp" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su numero de Whatsapp" pattern="[0-9]{10,12}" value="'.$NumeroWhats.'"/>
    </span>';
    }else{
        echo' <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Whatsapp-->
        <label id="NmWhatsapp" for="NmWhatsapp">Número de Whatsapp</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su numero de contacto vía Whatsapp</p>
        <br>
        <input type="number" id="NmWhatsapp" name="NmWhatsapp" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su numero de Whatsapp" pattern="[0-9]{10,12}"/>
    </span>';
    }
    if($Facebook!=""){
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Facebook-->
        <label id="Facebook" for="Facebook">Facebook</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de su cuenta de Facebook</p><br>
        <input type="text" id="Facebook" name="Facebook" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el link de su perfil" onchange="validarLink(this)" value="'.$Facebook.'" />
    </span>';
    }else{
            echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Facebook-->
        <label id="Facebook" for="Facebook">Facebook</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de su cuenta de Facebook</p><br>
        <input type="text" id="Facebook" name="Facebook" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el link de su perfil" onchange="validarLink(this)"/>
    </span>';
    }
    if($Instagram!=""){
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Instagram-->
        <label id="Instagram" for="Instagram">Instagram</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Instagram (sin @)</p><br>
        <input type="text" id="Instagram" name="Instagram" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" value="'.$Instagram.'" />
    </span>';
    }else{
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Instagram-->
        <label id="Instagram" for="Instagram">Instagram</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Instagram (sin @)</p><br>
        <input type="text" id="Instagram" name="Instagram" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario"/>
    </span>';
    }
    if($github!=""){
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input GitHub-->
        <label id="GitHub" for="GitHub">GitHub</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de GitHub</p><br>
        <input type="text" id="GitHub" name="GitHub" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" value="'.$github.'" />
    </span>';
    }else{
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input GitHub-->
        <label id="GitHub" for="GitHub">GitHub</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de GitHub</p><br>
        <input type="text" id="GitHub" name="GitHub" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario"/>
    </span>';
    }
    if($Linkedin!=""){
    echo'<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
    <!--Label e input Linkedin-->
    <label id="Linked In" for="Linked In"> LinkedIn</label>
    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #3b3838;">Inserte el link de su cuenta de Linkedin</p><br>
    <input type="text" id="Linkedin" name="Linkedin" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" value="'.$Linkedin.'"/>
</span>';
    }else{
        echo'<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
    <!--Label e input Linkedin-->
    <label id="Linked In" for="Linked In"> LinkedIn</label>
    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #3b3838;">Inserte el link de su cuenta de Linkedin</p><br>
    <input type="text" id="Linkedin" name="Linkedin" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario"/>
</span>';
    }
    if($twitter!=""){
        echo'<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Twitter-->
        <label id="Twitter" for="Twitter">Twitter</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Twitter (sin @)</p><br>
        <input type="text" id="Twitter" name="Twitter" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" value="'.$twitter.'"/>
    </span>';
    }else{
        echo'<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Twitter-->
        <label id="Twitter" for="Twitter">Twitter</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Twitter (sin @)</p><br>
        <input type="text" id="Twitter" name="Twitter" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario"/>
    </span>';
    }
    if($Youtube!=""){
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Youtube-->
         <label id="Youtube" for="Youtube">Youtube</label>
         <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de su canal de Youtube</p><br>
         <input type="text" id="Youtube" name="Youtube" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el nombre de su canal" value="'.$Youtube.'" />
     </span>';
    }else{
        echo '<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Youtube-->
         <label id="Youtube" for="Youtube">Youtube</label>
         <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de su canal de Youtube</p><br>
         <input type="text" id="Youtube" name="Youtube" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el nombre de su canal"/>
     </span>';
    }
    if($Discord!=""){
        echo ' <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Discord-->
        <label id="DiscordLink" for="DiscordLink">Discord</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de acceso a su servidor de Discord</p><br>
        <input type="text" id="DiscordLink" name="DiscordLink" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese el link de invitación de su servidor" onchange="validarLink(this)" value="'.$Discord.'"/>
    </span>';
    }else{
        echo ' <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <!--Label e input Discord-->
        <label id="DiscordLink" for="DiscordLink">Discord</label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de acceso a su servidor de Discord</p><br>
        <input type="text" id="DiscordLink" name="DiscordLink" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese el link de invitación de su servidor" onchange="validarLink(this)"/>
    </span>';
    }
                                
    }else{
        echo ' <label id="Nombre" for="Nombre"> Nombre <b style="color: red;">*</b></label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre, el cual aparecera dentro de su tarjeta de presentación</p>
        <br>
        <input type="text" id="Nombre" name="Nombre" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre"  required/>
    </span>
    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <input type="number" id="id" name="id" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa tu nombre"  required/>
    </span>
    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        <label id="Correo" for="Correo"> Correo Electrónico <b style="color: red;">*</b> </label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su correo, con el cual las personas que lo vean se podran contactarse con usted</p>
        <br>
        <input type="email" id="Correo" name="Correo" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su correo" />
    </span>

    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
        Label e input profesion
        <label id="Profesion" for="Profesion"> Profesión <b style="color: red;">*</b> </label>
        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su profesión, la cual se verá reflejada en su tarjeta de presentación</p><br>
        <input type="text" id="Profesion" name="Profesion" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su profesion" />
    </span>
</div>
<li id="cid_101" class="form-input-wide" data-type="control_head">
                            <div class="form-header-group  header-small">
                                <div class="header-text httal htvam">
                                    <h2 id="header_101" class="form-header" data-component="header">Redes Sociales</h2>
                                </div>
                                <p>Asegúrese de llenar solo los enlaces que desees compartir para que otros puedan contactarle. También verifique que la información esté correcta antes de enviar el formulario.</p>
                            </div>
                        </li>

                        <!--Redes Sociales-->
                        <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="Nombre">
                            <div id="cid_3" class="form-input-wide">
                                <div data-wrapper-react="true">
                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Whatsapp-->
                                        <label id="NmWhatsapp" for="NmWhatsapp">Número de Whatsapp</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su numero de contacto vía Whatsapp</p>
                                        <br>
                                        <input type="number" id="NmWhatsapp" name="NmWhatsapp" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su numero de Whatsapp" pattern="[0-9]{10,12}"/>
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Facebook-->
                                        <label id="Facebook" for="Facebook">Facebook</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de su cuenta de Facebook</p><br>
                                        <input type="text" id="Facebook" name="Facebook" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el link de su perfil" onchange="validarLink(this)" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Instagram-->
                                        <label id="Instagram" for="Instagram">Instagram</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Instagram (sin @)</p><br>
                                        <input type="text" id="Instagram" name="Instagram" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input GitHub-->
                                        <label id="GitHub" for="GitHub">GitHub</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de GitHub</p><br>
                                        <input type="text" id="GitHub" name="GitHub" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Linkedin-->
                                        <label id="Linked In" for="Linked In"> LinkedIn</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #3b3838;">Inserte el link de su cuenta de Linkedin</p><br>
                                        <input type="text" id="Linkedin" name="Linkedin" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Twitter-->
                                        <label id="Twitter" for="Twitter">Twitter</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Twitter (sin @)</p><br>
                                        <input type="text" id="Twitter" name="Twitter" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                       <!--Label e input Youtube-->
                                        <label id="Youtube" for="Youtube">Youtube</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de su canal de Youtube</p><br>
                                        <input type="text" id="Youtube" name="Youtube" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el nombre de su canal" />
                                    </span>

                                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                        <!--Label e input Discord-->
                                        <label id="DiscordLink" for="DiscordLink">Discord</label>
                                        <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de acceso a su servidor de Discord</p><br>
                                        <input type="text" id="DiscordLink" name="DiscordLink" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese el link de invitación de su servidor" onchange="validarLink(this)"/>
                                    </span>
                                    
                                    ';
    }
}else{
    echo ' <label id="Nombre" for="Nombre"> Nombre <b style="color: red;">*</b></label>
    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre, el cual aparecera dentro de su tarjeta de presentación</p>
    <br>
    <input type="text" id="Nombre" name="Nombre" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre"  required/>
</span>
<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
    <input type="hidden" id="id" name="id" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa tu nombre" value="'.$_COOKIE['ID_Usuario'].'" required/>
</span>
<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
    <label id="Correo" for="Correo"> Correo Electrónico <b style="color: red;">*</b> </label>
    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su correo, con el cual las personas que lo vean se podran contactarse con usted</p>
    <br>
    <input type="email" id="Correo" name="Correo" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su correo" />
</span>

<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
    <label id="Profesion" for="Profesion"> Profesión <b style="color: red;">*</b> </label>
    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su profesión, la cual se verá reflejada en su tarjeta de presentación</p><br>
    <input type="text" id="Profesion" name="Profesion" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su profesion" />
</span>
</div>
<li id="cid_101" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-small">
                            <div class="header-text httal htvam">
                                <h2 id="header_101" class="form-header" data-component="header">Redes Sociales</h2>
                            </div>
                            <p>Asegúrese de llenar solo los enlaces que desees compartir para que otros puedan contactarle. También verifique que la información esté correcta antes de enviar el formulario.</p>
                        </div>
                    </li>

                    <!--Redes Sociales-->
                    <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="Nombre">
                        <div id="cid_3" class="form-input-wide">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Whatsapp-->
                                    <label id="NmWhatsapp" for="NmWhatsapp">Número de Whatsapp</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su numero de contacto vía Whatsapp</p>
                                    <br>
                                    <input type="number" id="NmWhatsapp" name="NmWhatsapp" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su numero de Whatsapp" pattern="[0-9]{10,12}"/>
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Facebook-->
                                    <label id="Facebook" for="Facebook">Facebook</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de su cuenta de Facebook</p><br>
                                    <input type="text" id="Facebook" name="Facebook" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el link de su perfil" onchange="validarLink(this)" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Instagram-->
                                    <label id="Instagram" for="Instagram">Instagram</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Instagram (sin @)</p><br>
                                    <input type="text" id="Instagram" name="Instagram" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input GitHub-->
                                    <label id="GitHub" for="GitHub">GitHub</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de GitHub</p><br>
                                    <input type="text" id="GitHub" name="GitHub" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Linkedin-->
                                    <label id="Linked In" for="Linked In"> LinkedIn</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #3b3838;">Inserte el link de su cuenta de Linkedin</p><br>
                                    <input type="text" id="Linkedin" name="Linkedin" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Twitter-->
                                    <label id="Twitter" for="Twitter">Twitter</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de usuario de Twitter (sin @)</p><br>
                                    <input type="text" id="Twitter" name="Twitter" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese su nombre de usuario" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                   <!--Label e input Youtube-->
                                    <label id="Youtube" for="Youtube">Youtube</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte su nombre de su canal de Youtube</p><br>
                                    <input type="text" id="Youtube" name="Youtube" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingresa el nombre de su canal" />
                                </span>

                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                    <!--Label e input Discord-->
                                    <label id="DiscordLink" for="DiscordLink">Discord</label>
                                    <br><p style="font-size: 0.8em; line-height: 1.2; margin: 0.5em 0; color: #666;">Inserte el link de acceso a su servidor de Discord</p><br>
                                    <input type="text" id="DiscordLink" name="DiscordLink" class="introducetexto" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" style="width: 600px;" placeholder="Ingrese el link de invitación de su servidor" onchange="validarLink(this)"/>
                                </span>
                                
                                ';  
}

} catch (Exception $e) {
    echo "<script>alert('".$e->getMessage()."');</script>";
    header('Location: http://maidenware.com.mx');
    exit;
}
?>
<!--Aqui va a ir la seleccion de plantillas-->
</div>
                                <li id="cid_101" class="form-input-wide" data-type="control_head">
                                    <div class="form-header-group  header-small">
                                        <div class="header-text httal htvam">
                                            <h2 id="header_101" class="form-header" data-component="header">Selección de Plantilla</h2>
                                        </div>
                                    </div>
                                </li>
                                <div class="card-group" style="text-align: center;">
                                    <label class="card">
                                        <input type="radio" name="plantilla" value="1" style="display: none;" required>
                                        <img src="https://maidenware1.s3.us-east-2.amazonaws.com/imgboton1.jpg">
                                        Plantilla 1
                                    </label>
                                    <label class="card">
                                        <input type="radio" name="plantilla" value="2" style="display: none;" required>
                                        <img src="https://maidenware1.s3.us-east-2.amazonaws.com/imgboton2.jpg">
                                        Plantilla 2
                                    </label>
                                    <label class="card">
                                        <input type="radio" name="plantilla" value="3" style="display: none;" required>
                                        <img src="https://maidenware1.s3.us-east-2.amazonaws.com/imgboton3.jpg">
                                        <label>Plantilla 3</label>
                                    </label>
                                    <span id="error-mensaje" style="color: red; display: none;">Por favor, seleccione una opción.</span>

                                </div>
                                <!--Java de Card seleccionada-->
                                <script>
                                    // Añadir la clase "selected" a la tarjeta seleccionada
                                    const cards = document.querySelectorAll(".card");
                                    cards.forEach(card => {
                                        card.addEventListener("click", () => {
                                            cards.forEach(c => c.classList.remove("selected"));
                                            card.classList.add("selected");
                                        });
                                    });
                                </script>
                <li class="form-line" data-type="control_button" id="id_102">
                    <div id="cid_102" class="form-input-wide">
                        <div data-align="auto"
                            class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">                    </div>
                    </div>
                    <br><br>
                    <div style="display: flex; justify-content: center;">
                    <div class="wrap"><br>
                    <input type="submit" class="btn-outline-primary" value="Probar">

                    <!--Aqui falta -->


                        <!--<a href="#!" class="btn btn-outline-primary">Log In</a>
			 <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>-->
                      </div>
                      <br>
                </div>
                </li>
            </ul>
        </div>
    </form>
</body>
</html>
                
                                  