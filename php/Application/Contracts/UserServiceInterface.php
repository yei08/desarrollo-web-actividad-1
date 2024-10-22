<?php

interface UserServiceInterface {
    public function createUser($password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro);
    public function getUser($id);
    public function updateUser($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado);
    public function deleteUser($id);
    public function getAllUsers();
}
?>
