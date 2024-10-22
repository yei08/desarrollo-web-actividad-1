<?php
include_once '../Application/Services/UserService.php';

$userService = new UserService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $rol = $_POST['rol'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];

    if ($id) {
        $userService->updateUser($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado);
    } else {
        $userService->createUser($password, $nombre, $apellidos, $rol, $email, $telefono, $estado, date('Y-m-d'));
    }

    header('Location: user_table.php');
}
?>
