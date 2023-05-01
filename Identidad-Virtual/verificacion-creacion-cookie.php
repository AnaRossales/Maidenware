<?php
// Suponiendo que el nombre de la cookie es "mi_cookie"
if (isset($_COOKIE["ID_Usuario"])) {
  echo "El valor de la cookie es: " . $_COOKIE["ID_Usuario"];
} else {
  echo "La cookie no está definida";
}
?>
