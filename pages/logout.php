<?php
session_start();

// Destruir todas las sesiones
$_SESSION = array();
session_destroy();

// Redirigir a la página de inicio de sesión u otra página
header('Location: login.php');
exit();
?>