<?php
include_once '../Application/Contracts/UserServiceInterface.php';
include_once '../Infrastructure/Persistences/UserRepository.php';

class UserService implements UserServiceInterface {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function createUser($password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro) {
        $user = new User(null, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro);
        return $this->userRepository->create($user);
    }

    public function getUser($id) {
        return $this->userRepository->read($id);
    }

    public function updateUser($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado) {
        $user = new User($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, null);
        return $this->userRepository->update($user);
    }

    public function deleteUser($id) {
        return $this->userRepository->delete($id);
    }

    public function getAllUsers() {
        return $this->userRepository->readAll();
    }
}
?>
