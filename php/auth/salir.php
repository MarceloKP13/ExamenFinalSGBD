<?php
//Iniciar Sesión
session_start();
//Eliminar las variables de sesión
session_unset();
//Destruir la sesión
session_destroy();
//Redirigir al usuario
header('Location:../../index.php');
exit();
?>