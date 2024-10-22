<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario_id'])) {
    // El usuario está autenticado, redirigir al dashboard o página principal
    header("Location: Views/dashboard.php");
    exit;
} else {
    // El usuario no ha iniciado sesión, redirigir al login
    header("Location: Views/Forms/login.php");
    exit;
}
?>
